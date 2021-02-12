<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitselection extends Model{
    use HasFactory;

    protected $table = 'unitselection';

    public function event(){
        return $this->belongsTo('App\Models\event','event_id');
    }

    public function vippass(){
        return $this->belongsTo('App\Models\vippass','vippass_id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\customer','customer_id');
    }

    public function unit(){
        return $this->belongsTo('App\Models\unit','unit_id');
    }

    public function paymentplan(){
        return $this->belongsTo('App\Models\paymentplan','paymentplan_id');
    }


}
