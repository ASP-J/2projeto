<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model

{
    use HasFactory;
    protected $table ='books';
    protected $primaryKey ='id';
    protected $fillable =['tittle','author','description','quantity'];

    public function loans()
    {
        return $this->belongsToMany(Leon::class, 'id', 'book_id');
    }
}


