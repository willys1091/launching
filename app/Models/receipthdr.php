<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receipthdr extends Model{
    use HasFactory;

    protected $table = 'receipthdr';

    public function customer(){
        return $this->belongsTo('App\Models\customer','customer_id');
    }

    public function receiptdtl(){
        return $this->hasMany('App\Models\receiptdtl');
    }

    public function receiptdtl2(){
        return $this->hasMany('App\Models\receiptdtl2');
    }
}
