<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    protected $table = 'languages';
    protected $primaryKey = 'lang_id';
    protected $fillable = ['lang_name'];
    use HasFactory;

    public function books(){
        return $this->belongsToMany(book::class, 'lang_book_rel', 'lang_id', 'book_id');
    }
}
