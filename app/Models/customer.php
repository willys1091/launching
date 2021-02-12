<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model{
    use HasFactory;

    protected $table = 'customer';

    public function customerlock(){
        return $this->hasOne('App\Models\customerlock');
    }

    public function receipthdr(){
        return $this->hasMany('App\Models\receipthdr');
    }

    public function unitselection(){
        return $this->hasMany('App\Models\unitselection');
    }

    public function vippass(){
        return $this->hasMany('App\Models\vippass');
    }
}
