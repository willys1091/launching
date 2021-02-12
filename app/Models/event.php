<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model{
    use HasFactory;

    protected $table = 'event';

    public function pricelist(){
        return $this->hasMany('App\Models\pricelist');
    }

    public function unitselection(){
        return $this->hasMany('App\Models\unitselection');
    }

    public function vipcategory(){
        return $this->hasMany('App\Models\vipcategory');
    }

    public function vipname(){
        return $this->hasMany('App\Models\vipname');
    }

    public function vippass(){
        return $this->hasMany('App\Models\vippass');
    }


}
