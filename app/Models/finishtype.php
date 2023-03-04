<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finishtype extends Model
{
    use HasFactory;
    public $table = 'finishtypes';
    protected $fillable = [
        'name','status'
    ];
}
