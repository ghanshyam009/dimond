<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purity extends Model
{
    use HasFactory;
    public $table = 'purities';
    protected $fillable = [
        'name','status'
    ];
}
