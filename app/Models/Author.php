<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// php artisan --migration make:model Author
class Author extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(Book::class); // Based on "books.author_id" --> Convention over configuration
    }
}
