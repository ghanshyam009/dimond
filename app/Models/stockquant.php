<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockquant extends Model
{
    use HasFactory;
    public $table = 'stockquants';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
