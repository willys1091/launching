<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentplan extends Model{
    use HasFactory;

    protected $table = 'paymentplan';

    public function pricelist(){
        return $this->hasMany('App\Models\pricelist');
    }

    public function unitselection(){
        return $this->hasMany('App\Models\unitselection');
    }

    public function vippass(){
        return $this->hasMany('App\Models\vippass');
    }
}
