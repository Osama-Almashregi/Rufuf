<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table = 'books';
 protected $primaryKey = 'book_id';
    protected $fillable = [
        'title',
        'subtitle',
        'photo',
        'description',
        'depository_no',
        'isbn',
        'dewey_no',
        'rating',
        'publication_place',
        'cat_id',
        'created_at',
        'updated_at',
        
    ];

    public function authors(){
        return $this->belongsToMany(author::class, 'book_author_rel', 'book_id', 'author_id');
    }
    public function publishers(){
       return $this->belongsToMany(publisher::class, 'book_publisher_rel', 'book_id', 'pub_id');
    }
    public function categories(){
        return $this->belongsTo(category::class, 'cat_id');
    }
    public function parts(){
        return $this->hasMany(part::class, 'book_id');
    }
  public function languages(){
    return $this->belongsToMany(language::class, 'lang_book_rel', 'book_id', 'lang_id');
  }
  public function attachments(){
    return $this->hasMany(attachment::class, 'book_id');
  }


}
