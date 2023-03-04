<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shap extends Model
{
    use HasFactory;
    public $table = 'shaps';
    protected $fillable = [
        'name','status'
    ];


    public function toggleIsActive()
     {
            $this->is_active= !$this->is_active;
            return $this;
     }
}
