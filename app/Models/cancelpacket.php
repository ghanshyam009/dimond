<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cancelpacket extends Model
{
    use HasFactory;
    public $table = 'cancelpackets';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
