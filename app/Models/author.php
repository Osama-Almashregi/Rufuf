<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;
 
    protected $primaryKey = 'author_id';
    protected $fillable = [
        'author_img',
        'author_name',
        'author_description',
        'author_profession',
        'author_nationality',
        'author_birthday',
        'author_deathday',
    ];
    public function books()
    {
        return $this->belongsToMany(book::class, 'book_author_rel', 'author_id', 'book_id');
    }
}
