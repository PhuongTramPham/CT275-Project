<?php

namespace App\Controllers;

use App\SessionGuard as Guard;

use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
{
	public function __construct()
	{
		if (!Guard::isUserLoggedIn()) {
			redirect('/login');
		}

		parent::__construct();
	}

	public function index()
	{
		$this->sendPage('books/home', [
			'books' => Guard::user()->books
		]);			
	}
 
	public function showAddPage()
	{
		$this->sendPage('books/add', [
			'categories' => Category::all(),
			'errors' => session_get_once('errors'),
			'old' => $this->getSavedFormValues()
		]);
	}

	public function create()
	{
		$data = $this->filterBookData($_POST);
		$model_errors = Book::validate($data);
		if (empty($model_errors)) {
			$book = new Book();
			$book->fill($data);
			$book->user()->associate(Guard::user());
			// $book->category()->associate(Category::find($data['category']));
			$book->save();

			redirect('/books');
		}

		// Lưu các giá trị của form vào $_SESSION['form']
		$this->saveFormValues($_POST);

		// Lưu các thông báo lỗi vào $_SESSION['errors']
		redirect('/books/add', ['errors' => $model_errors]);
	}	

	protected function filterBookData(array $data)
	{
		return [
			'name' => $data['name'] ?? null,
			'author' => $data['author'] ?? null,
			'category_id' => $data['category'] ?? null,
			'abstract' => $data['abstract'] ?? null,
			'updated_at' => date("Y-m-d H:i:s") ?? null
		];
	}

	public function showEditPage($book_id)
	{
		$book = Guard::user()->books->find($book_id);
		if (! $book) {
			$this->sendNotFound();
		}

		$form_values = $this->getSavedFormValues();
		$data = [
			'errors' => session_get_once('errors'),
			'categories' => Category::all(),
			'book' => ( !empty($form_values) ) ?
				array_merge($form_values, ['id' => $book->id]) :
				$book->toArray()
		];
		$this->sendPage('books/edit', $data);
	}

	public function update($book_id)
	{
		$book = Guard::user()->books->find($book_id);
		if (! $book) {
			$this->sendNotFound();
		}
		
		$data = $this->filterBookData($_POST);
		$model_errors = Book::validate($data);

		if (empty($model_errors)) {
			$book->fill($data);
			$book->save();
			redirect('/books');
		}

		$this->saveFormValues($_POST);
		redirect('/books/edit/'.$book_id, [
			'errors' => $model_errors
		]);
	}	

	public function delete($book_id)
	{
		$book = Guard::user()->books->find($book_id);
		if (! $book) {
			$this->sendNotFound();
		}
		
		$book->delete();
		redirect('/books');
	}

}
