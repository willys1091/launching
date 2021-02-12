<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vipcategory extends Model{
    use HasFactory;

    protected $table = 'vipcategory';

    public function event(){
        return $this->belongsTo('App\Models\event','event_id');
    }

    public function unitselection(){
        return $this->hasMany('App\Models\unitselection');
    }
}
