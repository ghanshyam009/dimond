<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class machine extends Model
{
    use HasFactory;
    public $table = 'machine';
    protected $fillable = [
       'lotno', 'mname','growthrate','status','timer','stop_timer','created_at'
    ];
}