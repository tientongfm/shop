<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table="bill_detail";

    // 1 chi tiet hoa don thi co nhieu san pham->san pham thuoc chi tiet hoa don
    public function product(){
    	return $this->belongsTo('App\Product', 'id_product', 'id');
    }

    //1 chi tiet hoa don thuoc 1 hoa don nao do
    public function bills(){
    	return $this->belongsTo('App\Bill', 'id_bill', 'id');
    }
}
