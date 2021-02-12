<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model{
    use HasFactory;

    protected $table = 'district';

    public function city(){
        return $this->belongsTo('App\Models\city','city_id');
    }
}
