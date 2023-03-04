<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lotprocess extends Model
{
    use HasFactory;
    public $table = 'lotprocesses';
    protected $fillable = [
        'name','status'
    ];

}
