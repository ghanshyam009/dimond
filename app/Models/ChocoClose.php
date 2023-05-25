<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChocoClose extends Model
{
    use HasFactory;
    public $table = 'chocolate_close';
    protected $fillable = [
        'lot_id', 'processresons_id', 'user_id', 'growing_time', 'image'
    ];
}
