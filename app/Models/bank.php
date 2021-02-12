<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model{
    use HasFactory;

    protected $table = 'bank';

    public function companyaccount(){
        return $this->hasMany('App\Models\companyaccount');
    }

    public function officeagent(){
        return $this->hasMany('App\Models\officeagent');
    }

    public function unit(){
        return $this->hasMany('App\Models\unit');
    }
}
