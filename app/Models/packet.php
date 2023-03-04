<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packet extends Model
{
    use HasFactory;
    public $table = 'packets';
    protected $fillable = [
        'batch_id','pcs','shape','height','length','width','weight','timer','stop_timer'
    ];

    public function batch()
    {
        return $this->belongsTo(Bactch::class,'batch_id','id');
    }
}
