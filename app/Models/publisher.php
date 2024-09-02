<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;

    protected $table = 'publishers';
    protected $primaryKey = 'pub_id';

    protected $fillable = [
        'pub_name',
        'establishment_date',
        'owner',
        'sequential_deposit_no',    
    ];
    public function books(){
        return $this->belongsToMany(book::class, 'book_publisher_rel', 'pub_id', 'book_id');
    }
}
