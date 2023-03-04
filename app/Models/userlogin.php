<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userlogin extends Model
{
    use HasFactory;
    public $table = 'users';
    protected $fillable = [
        'name','email','password'
    ];
    public function lotUser()
    {
        return $this->hasMany(LotMove::class,'user_id','id');
    }
}
