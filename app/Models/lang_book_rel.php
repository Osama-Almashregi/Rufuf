<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lang_book_rel extends Model
{
    use HasFactory;
    protected $table = 'lang_book_rel';
    protected $primaryKey = 'rel_id';
    protected $fillable = ['lang_id', 'book_id'];
}
