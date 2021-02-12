<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vippass extends Model{
    use HasFactory;

    protected $table = 'vippass';

    public function event(){
        return $this->belongsTo('App\Models\event','event_id');
    }

    public function vipcategory(){
        return $this->belongsTo('App\Models\vipcategory','vipcategory_id');
    }

    public function customer(){
        return $this->belongsTo('App\Models\customer','customer_id');
    }

    public function agent(){
        return $this->belongsTo('App\Models\agent','agent_id');
    }

    public function paymentplan(){
        return $this->belongsTo('App\Models\paymentplan','paymentplan_id');
    }


    public function unitselection(){
        return $this->hasMany('App\Models\unitselection');
    }

    
}
