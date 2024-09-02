<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part_series_rel extends Model
{
    protected $primaryKey = 'rel_id';
    protected $fillable=['part_id', 'series_id', 'number_in_series'];
    use HasFactory;
}
