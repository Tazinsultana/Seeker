<?php

namespace App\Http\Controllers;

use App\Models\ajux_crud;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestStatus\Success;

class ProductController extends Controller
{
   public function Index()
   {

      return view('admin.product');
   }
   public function AddProduct(Request $request)
   {
      $request->validate(
         [

            'name' => 'required|unique:ajux_cruds',
            'price' => 'required',
         ],
         [
            'name.required' => 'Name is required',
            'name.unique' => 'Product already exsits',
            'price.required' => 'Price is Required',

         ]

      );
      $product = new ajux_crud();

      $product->name = $request->name;
      $product->price = $request->price;
      $product->save();
      return response()->json([
         'status' => 'success',
      ]);






   }
}