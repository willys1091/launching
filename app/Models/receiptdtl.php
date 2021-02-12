<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receiptdtl extends Model{
    use HasFactory;

    protected $table = 'receiptdtl';

    public function receipthdr(){
        return $this->belongsTo('App\Models\receipthdr','receipthdr_id');
    }

    public function unit(){
        return $this->belongsTo('App\Models\unit','unit_id');
    }
}
