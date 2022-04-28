<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    
    protected $fillable = ['id', 'name', 'author', 'category_id', 'abstract', 'user_id'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public static function validate(array $data) {
        $errors = [];
    
        if (! $data['name']) {
            $errors['name'] = 'Name is required.';
        }

        if (! $data['author']) {
            $errors['author'] = 'Author is required.';
        }

        if (strlen($data['abstract']) > 255) {
            $errors['abstract'] = 'Abstract must be at most 255 characters.';
        }
        return $errors;
    }
}
    