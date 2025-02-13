<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCatalogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'author',
        'publisher',
        'category',
        'language',
        'cover_image'
    ];
}
