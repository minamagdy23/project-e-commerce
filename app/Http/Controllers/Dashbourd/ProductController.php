<?php

namespace App\Http\Controllers\Dashbourd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('dashbourd.Products.addproduct');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'description' =>$request->desc,
            'image' => $request->image,
            'price' =>$request->price,
            'discount_price' =>$request->discount,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('show_product');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $Categ = Category::all();
        return view('dashbourd.Products.addproduct', compact('Categ'));
    }
    public function data(){

        $products = DB::table('products')->get();
        return view('dashbourd.Products.edit', compact('products'));

    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashbourd.Products.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $p =Product::find($id);
        return view('dashbourd.Products.updateproduct',compact('p'));
        // $p = Product::find($id);
        // return view('dashbourd.Products.updateproduct', compact('p'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $p=Product::find($id);
         $p->name=$request->name;
         $p->description=$request->desc;
         $p->price=$request->price;
         $p ->image=$request->image;
         $p->discount_price=$request->discount;
         $p->category=$request->category_id;
        return redirect()->route('show_product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $p = DB::table('products')->where('id',$id)->delete();
        return redirect()->route('show_product');
    }
}