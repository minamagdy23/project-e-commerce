<?php

namespace App\Http\Controllers\Dashbourd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EditCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('dashbourd.Categories.editcategory');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       DB::table('categories')->insert([
          'name' => $request->name,
           'image' =>$request->image
       ]);
       return redirect()->route('edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $Cate = Category::all();
        return view('dashbourd.Categories.editcategory', compact('Cate'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit ($id)
    {
        $c = Category::find($id);
        return view('dashbourd.Categories.editcategory1', compact('c'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $c=Category::find($id);
        $c->name =$request->name;
        $c->image = $request->image;
        $c->save();
        return redirect()->route('edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $c = DB::table('categories')->where('id',$id)->delete();
        return redirect()->route('edit');
    }
}