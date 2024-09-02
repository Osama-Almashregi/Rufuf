<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_publisher_rel extends Model
{
    use HasFactory;
    protected $table='book_publisher_rel';
    protected $primaryKey='rel_id';
    protected $fillable=['book_id', 'pub_id'];
}
