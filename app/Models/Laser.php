<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laser extends Model
{
    use HasFactory;
    public $table = 'lasers';
    protected $fillable = [
        'lot_id','batch_id','pcs','shape','height','length','width','weigth','timer','stop_timer'
    ];
}
