<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jangad extends Model
{
    use HasFactory;
    public $table = 'jangads';
    protected $fillable = [
        'party','date','return_date','note','pcs','weight','height','length','width'
    ];
}
