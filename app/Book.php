<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * The primary key associated with the table.
     *
     * @var int
     */
    protected $id = 'id';

    /**
     * @var string
     */
    protected $name;

    public function users()
    {
        return $this->belongsToMany(User::class, 'authors_book', 'book_id','author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'books_in_category', 'book_id','category_id');
    }
}
