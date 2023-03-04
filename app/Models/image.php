<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    public $table = 'images';
    protected $fillable = [
        'name','image','img2','img3','img4','img5'
    ];
}
