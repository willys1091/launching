<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyaccount extends Model{
    use HasFactory;

    protected $table = 'companyaccount';

    public function bank(){
        return $this->belongsTo('App\Models\bank','bank_id');
    }
}
