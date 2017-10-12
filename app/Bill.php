<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table= "bills";

    //1 hoa don co nhieu chi tiet hoa don
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }

    //1 hoa don chi thuoc ve 1 khach hang
    public function custormer(){
    	return $this->belongsTo('App\Custormer', 'id_customer', 'id');
    }
}
