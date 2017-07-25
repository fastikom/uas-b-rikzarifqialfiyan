<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['id','author', 'bookname','description'];
    public $timestamps = false;
}
