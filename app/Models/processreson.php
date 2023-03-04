<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class processreson extends Model
{
    use HasFactory;
    public $table = 'processresons';
    protected $fillable = [
        'name','status'
    ];
}
