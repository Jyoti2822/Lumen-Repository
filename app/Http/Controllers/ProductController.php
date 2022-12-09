<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;




use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        //Get- All data from database
        $products=Product::all();
        return response()->json($products); 
    }


    // public function create()
    // {
    //     //
    // }


    public function store(Request $request)
    {
        //Post data to database from user
        $this->validate($request,[

            'title' => 'required|unique:products|min:3|max:12',

            'price' => 'required|min:1|max:4',

            'description' => 'required'

        ]);

        
        $product =new Product();

        $product->title = $request->input('title');

        $product->price = $request->input('price');

        $product->description = $request->input('description');



        $product->save();

        return response()->json($product);
    }


    public function show($id)
    {
        // give 1 item from products table
        $product=Product::find($id);
        return response()->json($product); 
    }


    public function edit($id)
    {
        //
    }


//      */
    public function update(Request $request, $id)
    {
        // Update-Id
        $this ->validate($request,[
            'title' =>'required',
            'price'=>'required',
            // 'photo'=>'required',
            'description' =>'required'

        ]);

       $product=Product::find($id);
        return response()->json($product); 


 }


    public function destroy($id)
    {
        // Delete -ID
        $product=Product::find($id);
        $product->delete();
        return response()->json('Product Deleted Successfully!'); 
    }

    
    public function search($title){
        return Product::where("title",$title)->get();

    }



}
