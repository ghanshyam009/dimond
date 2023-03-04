<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chocolate extends Model
{
    use HasFactory;
    public $table = 'chocolates';
    protected $fillable = [
        'lotno','machineno','startdate','starttime','img1','img2','img3'
    ];
}
