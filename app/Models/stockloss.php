<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockloss extends Model
{
    use HasFactory;
    public $table = 'stocklosses';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
