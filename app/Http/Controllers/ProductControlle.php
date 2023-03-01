<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductControlle extends Controller
{
    public function fltrCatalog( $idCat=false){
$categorys=category::all();
            $product=Product::where("catId",$idCat)->get();


        return view('product_list',['products'=>$product, "cat"=>$categorys]);
    }
    public function showCatalog($name="name", $sort="asc"){
        $product=Product::orderBy($name, $sort)->get();
        $categorys=category::all();

        return view('product_list',['products'=>$product, "cat"=>$categorys]);
    }
    public function singleProduct($id){
            $product=Product::find($id);
            return view('product_one',['product'=>$product]);

    }
}
