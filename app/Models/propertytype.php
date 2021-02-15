<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertytype extends Model{
    use HasFactory;

    protected $table = 'propertytype';

    public function pricelist(){
        return $this->hasMany('App\Models\pricelist');
    }

    public function unit(){
        return $this->hasMany('App\Models\unit');
    }
}
