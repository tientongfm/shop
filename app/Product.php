<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= "products";

    //1 san pham thuoc 1 loai san pham
    public function product_type(){
    	return $this->belongsTo('App\ProductType', 'id_type','id');
    }

    //san pham thi co nhieu trong chi tiet hoa don
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail', 'id_product','id');
    }
}
