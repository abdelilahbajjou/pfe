<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function add(){
        $category=Category::all();
        return view('admin.products.add',compact('category'));
    }
    public function insert(Request $request){
        $products = new Product();
            if($request->hasFile('image')){
                $file= $request->file('image');
                $ext=$file->getClientOriginalExtension(); //return jpg or jng ...
                $filename=time().'.'.$ext;
                $file->move('assests/uploads/products/',$filename);
                $products->image=$filename;
            }
            $products->category_id=$request->input('category_id');
            $products->title=$request->input('title');
            $products->author=$request->input('author');
            $products->slug=$request->input('slug');
            $products->small_description=$request->input('small_description');
            $products->description=$request->input('description');
            $products->original_price=$request->input('original_price');
            $products->selling_price=$request->input('selling_price');
            $products->quantity=$request->input('quantity');
            $products->taxes=$request->input('taxes');
            $products->status=$request->input('status')==TRUE ? '1':'0';
            $products->trending=$request->input('trending')==TRUE ? '1':'0';
            $products->language=$request->input('language');
            $products->nb_page=$request->input('nb_page');
            $products->edition_year=$request->input('edition_year');
            $products->meta_title=$request->input('meta_title');
            $products->meta_keywords=$request->input('meta_keywords');
            $products->meta_description=$request->input('meta_description');
            $products->save();
            return redirect('products')->with('status','products added succesfully');
        }

        public function edit($id){
            $products=Product::find($id);
            return view('admin.products.edit',compact('products'));
        }

        public function update(Request $request,$id){
            $products=Product::find($id);
            if ($request->hasFile('image')) {
                $path='assets/upolads/products'.$products->image;
                if(File::exists($path)){
                    File::delete($path);
                    // File::move('assests/uploads/productsDeleted/',$paths);
                }
                $file= $request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('assests/uploads/products/',$filename);
                $products->image=$filename;
            }
            $products->title=$request->input('title');
            $products->author=$request->input('author');
            $products->slug=$request->input('slug');
            $products->small_description=$request->input('small_description');
            $products->description=$request->input('description');
            $products->original_price=$request->input('original_price');
            $products->selling_price=$request->input('selling_price');
            $products->quantity=$request->input('quantity');
            $products->taxes=$request->input('taxes');
            $products->status=$request->input('status')== TRUE?'1':'0';
            $products->trending=$request->input('trending')== TRUE?'1':'0';
            $products->language=$request->input('language');
            $products->nb_page=$request->input('nb_page');
            $products->edition_year=$request->input('edition_year');
            $products->meta_title=$request->input('meta_title');
            $products->meta_keywords=$request->input('meta_keywords');
            $products->meta_description=$request->input('meta_description');
            $products->update();
            return redirect('products')->with('status','Product updated succesfully');
           
        }

        public function destroy($id){
        $products=Product::find($id);
        $path='assets/upolads/products'.$products->image;
        if(File::exists($path)){
              File::delete($path);
        }
        $products->delete();
        return redirect('products')->with('status','product deleted succesfully');
        }
    
}
