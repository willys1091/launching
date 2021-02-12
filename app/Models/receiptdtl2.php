<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receiptdtl2 extends Model{
    use HasFactory;

    protected $table = 'receiptdtl2';

    public function receipthdr(){
        return $this->belongsTo('App\Models\receipthdr','receipthdr_id');
    }
}
