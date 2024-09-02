<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    protected $table = 'attachments';
    protected $primaryKey = 'att_id';
    protected $fillable = ['att_name', 'type', 'path', 'book_id'];
    public function books(){
        return $this->belongsTo(book::class, 'book_id');
    }
    
    use HasFactory;
}
