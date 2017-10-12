<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custormer extends Model
{
    protected $table= "custormer";

    //1 khach hang thi co nhieu hoa don
    public function bills(){
    	return $this->hasMany('App\Bill', 'id_customer', 'id');
    }
}
