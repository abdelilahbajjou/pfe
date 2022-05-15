<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

   
   public function index(){
       $trending_products=Product::where('trending','1')->get();
       return view('frontend.frontendofficial',compact('trending_products'));
    }
   
  
    public function all_books(){
       $category=Category::all();
      $all_products=Product::where('status','0')->get();
      return view('frontend.all_books',compact('all_products','category'));
   }



   public function viewcategory($slug){
      if (Category::where('slug',$slug)->exists()) {
         $category=Category::where('slug',$slug)->first();
         $products=Product::where('category_id',$category->id)->get();
         return view('frontend.view_category',compact('category','products'));
      }else{
         redirect('/')->with('status','slug didnt found');
      }

   }

   public function viewproduct($cate_slug,$prod_slug){
      if (Category::where('slug',$cate_slug)->exists()) {
         if(Product::where('slug',$prod_slug)->exists()){
            $products=Product::where('slug',$prod_slug)->first();
            return view('frontend.view_product',compact('products'));
         }else{
              redirect('/')->with('status','no such product found');
         }
      }else{
         redirect('/')->with('status','no such category found');
      }

   }

   public function about_us(){
      return view('frontend.about_us');
   }

}
