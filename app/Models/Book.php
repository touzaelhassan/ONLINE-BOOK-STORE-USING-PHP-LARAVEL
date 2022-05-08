<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Author', 'book_author');
    }
}
