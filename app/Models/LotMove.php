<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotMove extends Model
{
    use HasFactory;
    public $table = 'lot_moves';
    protected $fillable = [
        'lot_id','batch_id','location_id','name','pcs','shape','height','length','width','weight','process','return_type','print_packet','status','machine'
    ];
}