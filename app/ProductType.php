<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //khai bao bang
    protected $table="type_products";

    //1 loai san pham thi co nhieu san pham
    public function product(){
    	return $this->hasMany('App\Product', 'id_type', 'id');
    }
}
