<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockpacket extends Model
{
    use HasFactory;
    public $table = 'stockpackets';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
