<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model{
    use HasFactory;

    protected $table = 'unit';

    public function pricelist(){
        return $this->hasMany('App\Models\pricelist');
    }

    public function receiptdtl(){
        return $this->hasMany('App\Models\receiptdtl');
    }

    public function propertytype(){
        return $this->belongsTo('App\Models\propertytype','propertytype_id');
    }

    public function bank(){
        return $this->belongsTo('App\Models\bank','va_bank_id');
    }
    
    public function unitselection(){
        return $this->hasMany('App\Models\unitselection');
    }
}
