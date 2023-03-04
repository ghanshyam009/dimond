<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    public $table = 'companies';  
    protected $fillable = [
        'name','stat','dist','address','gstno','comregister','currency','phone','mobile','email','website'
    ];
}
