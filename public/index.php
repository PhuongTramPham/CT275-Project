<?php
define('TIMEZONE', 'Asia/Ho_Chi_Minh');
date_default_timezone_set(TIMEZONE);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../bootstrap.php';

define('APPNAME', 'My Books');

session_start();

$router = new \Bramus\Router\Router();

// Auth routes
$router->post('/logout', '\App\Controllers\Auth\LoginController@logout');
$router->get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
$router->post('/register', '\\App\Controllers\Auth\RegisterController@register');
$router->get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\Auth\LoginController@login');

// book routes
$router->get('/books', '\App\Controllers\BooksController@index');
$router->set404('\App\Controllers\Controller@sendNotFound');
$router->get('/books/add', '\App\Controllers\BooksController@showAddPage');
$router->post('/books/create', '\App\Controllers\BooksController@create');
$router->get('/books/edit/(\d+)',
            '\App\Controllers\BooksController@showEditPage');
$router->post('/books/(\d+)',
            '\App\Controllers\BooksController@update');
$router->post('/books/delete/(\d+)',
            '\App\Controllers\BooksController@delete');

//custom   
$router->get('/', '\App\Controllers\HomeController@index');

$router->run();
