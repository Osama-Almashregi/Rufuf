<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sery extends Model
{
    use HasFactory;

    protected $table = 'series';
    protected $primaryKey = 'series_id';
    protected $fillable = [
        'series_name',
            
    ];
    public function parts(){
        return $this->hasMany(part::class, 'part_sery_rel', 'sery_id', 'part_id');
    }
}
