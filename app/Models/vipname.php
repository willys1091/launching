<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vipname extends Model{
    use HasFactory;

    protected $table = 'vipname';

    public function event(){
        return $this->belongsTo('App\Models\event','event_id');
    }
}
