<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part extends Model
{
    use HasFactory;
    protected $primaryKey = 'part_id';
    protected $fillable = [
        'part_no',
        'part_path',
        'book_id',
        'price',
        'pages_no',
        'publication_date',
        'edition_no',
        'edition_desc',
        'format',
        'size',
        'num_of_copies',
    ];
    public function books()
    {
        return $this->belongsTo(book::class, 'book_id');
    }
    public function series(){
        return $this->belongsToMany(sery::class, 'part_series_rel', 'part_id', 'series_id');
    }
}
