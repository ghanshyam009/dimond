<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lots extends Model
{
    use HasFactory;
    public $table = 'lots';
    protected $fillable = [
        'machineno','enddate','endtime','growinghour','machineimage','img5'
    ];
    
}
