<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officeagent extends Model{
    use HasFactory;

    protected $table = 'officeagent';

    public function officeagenttype(){
        return $this->belongsTo('App\Models\officeagenttype','officeagenttype_id');
    }

    public function bank(){
        return $this->belongsTo('App\Models\bank','bank_id');
    }
}
