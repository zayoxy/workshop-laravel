<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //protected string $table = 'books';
    //protected int $primaryKey = 'id';

    // https://laravel.com/docs/12.x/eloquent#mass-assignment
    protected $fillable = ['title', 'pages', 'quantity'];
}
