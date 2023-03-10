<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class party extends Model
{
    use HasFactory;
    public $table = 'parties';
    protected $fillable = [
        'name','info','company','code','position','street','street2','city','state','country','zip','phone','mobile','email',
        'website','gst','title','gstin','language','tag','image'
    ];
}
