<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
protected $fillable = ['cat_name'];
    public function books(){
        return $this->hasMany(book::class,'cat_id');
    }
}
