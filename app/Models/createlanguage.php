<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createlanguage extends Model
{
    use HasFactory;
    public $table = 'createlanguages';
    protected $fillable = [
        'language'
    ];
}
