<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model{
    use HasFactory;

    protected $table = 'city';

    public function province(){
        return $this->belongsTo('App\Models\province','province_id');
    }

    public function district(){
        return $this->hasMany('App\Models\district');
    }
}
