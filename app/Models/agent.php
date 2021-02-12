<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent extends Model{
    use HasFactory;

    protected $table = 'agent';

    public function vippass(){
        return $this->hasMany('App\Models\vippass');
    }
}
