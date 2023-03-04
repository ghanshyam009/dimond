<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class weightloss extends Model
{
    use HasFactory;
    public $table = 'weightlosses';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
