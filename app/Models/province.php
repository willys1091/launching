<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model{
    use HasFactory;

    protected $table = 'province';

    public function city(){
        return $this->hasMany('App\Models\city');
    }
}
