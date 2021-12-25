<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addProduct (Request $req) {
        $product = new Product();
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->description = $req->input('description');
        $product->file_path = $req->file('file')->store('products');
        $product->save();

        return $product;
    }

    function list() {
        return Product::all(); 
    }

    function delete($id) {
        $result = Product::where('id', $id)->delete();
        if($result) {
            return ["result"=>"Product is deleted"];
        } else {
            return ["result"=> "Product you are looking for do not exist"];
        }
    }
}
