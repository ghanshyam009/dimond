<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class returnlaser extends Model
{
    use HasFactory;
    public $table = 'returnlasers';
    protected $fillable = [
        'lot_id','batch_id','user_id','process','netprocess','dlcweight','name','pcs','shape','height','length','width','weight'
    ];
}