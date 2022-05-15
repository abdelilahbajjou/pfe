<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategorieController extends Controller
{
    public function index(){
        $category= Category::all();
        return view('admin.category.index',compact('category'));
    }

    public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $request){
        $category= new Category();
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')== TRUE?'1':'0';
        $category->popular=$request->input('popular')== TRUE?'1':'0';
        $category->save();
        return redirect('/dashboard')->with('status','category added succesfully');
    }

    public function edit($id){
        $category= Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request,$id){
        $category= Category::find($id);
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status')== TRUE?'1':'0';
        $category->popular=$request->input('popular')== TRUE?'1':'0';
        $category->save();
        return redirect('dashboard')->with('status','categorie updated succesfully');
    }

    public function destroy($id){
        $category= Category::find($id);
        $category->delete();
        return  redirect('categories')->with('status','catgeory deleted succefully');
    }
}
