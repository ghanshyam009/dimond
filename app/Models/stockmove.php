<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockmove extends Model
{
    use HasFactory;
    public $table = 'stockmoves';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
