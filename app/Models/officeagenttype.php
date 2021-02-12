<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officeagenttype extends Model{
    use HasFactory;

    protected $table = 'officeagenttype';

    public function officeagent(){
        return $this->hasMany('App\Models\officeagent');
    }
}
