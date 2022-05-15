<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request){
         $product_id=$request->input('product_id');
         $product_quantity=$request->input('product_quantity');

         if(Auth::check()){
             $product_check=Product::where('id',$product_id)->first();
             if($product_check){
                 if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){  
                    return response()->json(['status'=>"Already added to Cart"]);
                 }else{
                 $cartItem= new Cart();
                 $cartItem->user_id=Auth::id();
                 $cartItem->product_id=$product_id;
                 $cartItem->product_quantity=$product_quantity;
                 $cartItem->save();
                 return response()->json(['status'=>$product_check->title."Added to Cart"]);
                 }
             }
         }else{
             return response()->json(['status'=>"login to continue"]);
         }
    }

    public function viewCart(){
        $cartitems=Cart::where('user_id',Auth::id())->get();
         return view('frontend.cart',compact('cartitems'));
    }

    public function deleteProduct(Request $request){
        if(Auth::check()){
            $product_id=$request->input('product_id');
           if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){ 
               $cartItem=Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
               $cartItem->delete();
               return response()->json(['status'=>"Product Deleted successfully"]);
           }
        }else{
            return response()->json(['status'=>"login to continue"]);
        }
    }
}
