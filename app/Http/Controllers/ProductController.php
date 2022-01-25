<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderby('id', 'desc')->get();
        
        return response()->json($products); // response() = http response
    }

    public function store(Request $request)
    {

        $product = Product::create($request->all());

        return response()->json([
            'status' => 'success',
            'product'   => $product
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->all()); // query builder, not eloquent

        return response()->json([
            'status' => 'success',
            'post'   => $product
        ]);
        //return response()->json('Product updated!');
    }

    public function destroy($id)
     {
         $product = Product::find($id);
         $product->delete();

         return response()->json('Product successfully deleted!');
     }
}