<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotDetail extends Model
{
    use HasFactory;
    public $table = 'lot_details';
    protected $fillable = [
        'lot_id','batch_id','pcs','shape','height','length','width','weigth','timer','stop_timer'
    ];

    public function lotMaster()
    {
        return $this->hasOne(LotMaster::class,'id','lot_id');
    }

}
