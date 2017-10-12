<?php

namespace App\Http\Controllers;
//khai bao thu vien chua slide
use App\Slide;
use App\Product;
use App\ProductType;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        //tao bien slide de lay su lieu tu Database do ve
        $slide = Slide::all();

        $new_product = Product::where('new', 1)->paginate(4);
        $promotion_product = Product::where('promotion_price','<>',0)->paginate(8);

      /*  return view('page.trangchu', 
            ['slide'=>$slide],
            ['new_product'=>$new_product],
            ['promotion_product'=>$promotion_product]
        );*/
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_product'));
    }

    public function getProducttype($type){
        $product_type = Product::where('id_type', $type)->paginate(6);
        $product_other = Product::where('id_type', '<>', $type)->paginate(3);
        $type_sidebar = ProductType::all();
        $product_header = ProductType::where('id', $type)->first();
    	return view('page.loaisanpham', compact('product_type', 'product_other', 'type_sidebar', 'product_header')); 
    }

    public function getProductdetail(Request $request){
        $product = Product::where('id', $request->id)->first();
        $product_same = Product::where('id_type', $product->id_type)->paginate(3);
    	return view('page.chitietsanpham', compact('product', 'product_same'));
    }

    public function getContacts(){
    	return view('page.lienhe');
    }

    public function getAbout(){
        return view('page.gioithieu');
    }
}
