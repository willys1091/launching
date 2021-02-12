<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricelist extends Model{
    use HasFactory;

    protected $table = 'princelist';

    public function event(){
        return $this->belongsTo('App\Models\event','event_id');
    }

    public function paymentplan(){
        return $this->belongsTo('App\Models\paymentplan','paymentplan_id');
    }

    public function unit(){
        return $this->belongsTo('App\Models\unit','unit_id');
    }

    public function propertytype(){
        return $this->belongsTo('App\Models\propertytype','propertytype_id');
    }
}
