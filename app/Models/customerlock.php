<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerlock extends Model{
    use HasFactory;

    protected $table = 'customerlock';

    public function customer(){
        return $this->belongsTo('App\Models\customer','customer_id');
    }

    public function admin(){
        return $this->belongsTo('App\Models\admin','admin_id');
    }
}
