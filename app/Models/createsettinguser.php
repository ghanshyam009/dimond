<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createsettinguser extends Model
{
    use HasFactory;
    public $table = 'createsettingusers';
    protected $fillable = [
        'name','login','password','language'
    ];
}
