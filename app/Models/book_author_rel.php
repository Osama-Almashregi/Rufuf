<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_author_rel extends Model
{
    protected $table='book_author_rel';
    protected $primaryKey='rel_id';
    protected $fillable=['work_on_book','work_id','author_id','book_id'];
    use HasFactory;
}
