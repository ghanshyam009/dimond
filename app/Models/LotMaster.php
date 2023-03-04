<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotMaster extends Model
{
    use HasFactory;

    public function lotDetail()
    {
        return $this->hasMany(LotDetail::class,'lot_id','id');
    }
    public function laserDetail()
    {
        return $this->hasMany(Laser::class,'lot_id','id');
    }

    public function lotMove()
    {
        return $this->hasMany(LotMove::class,'lot_id','id');
    }
}
