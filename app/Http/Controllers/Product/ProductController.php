<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;
use App\ProductType;
use App\Provider;
use App\Category;
use Image;

class ProductController extends Controller
{
    //
    public function index(){
        $data = Product::with('category','provider','productType')->get();
        return response()->json(['items' => $data]);
    }
    public function show(Request $req){
        $data = Product::with('category','provider','productType')->where('id',$req->product)->first();
        $data->isActive = $data->is_active;
        return response()->json($data);
    }
    public function store(Request $req){
        $product = json_decode($req->products);
        if($req->hasFile('image')){
            $image_tmp = $req->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $user_image_path = 'images/product/'.$filename;
                //resize image
                Image::make($image_tmp)->save($user_image_path);

                //store image name 
                $slug = str_slug($product->name, '-');
                $categories = Category::get();
                $productType = ProductType::get();
                $provider = Provider::get();
                $result = Product::with('category','provider','productType')->insert([
                    'name'                  => $product->name,
                    'is_active'             => $product->isActive,
                    'slug'                  => $slug,
                    'price'                 => $product->price,
                    'views'                 => $product->views,
                    'sales'                 => $product->sales,
                    'warranty'              => $product->warranty,
                    'discount'              => $product->discount,
                    'status'                => $product->status,
                    'content'               => $product->content,
                    'category_id'           => $product->category->id,
                    'product_type_id'       => $product->productType->id,
                    'provider_id'           => $product->provider->id,
                    'image'                 => 'http://localhost:8000/'.$user_image_path
                ]);
                return response()->json(['items' => $result,'item' => $product,$productType,$provider]);
                    }
                }
            return response()->json(['items' => 'error']);
    }

    public function update(Request $req){
        $product = json_decode($req->products);
        if($req->hasFile('image')){
            $image_tmp = $req->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $user_image_path = 'images/product/'.$filename;
                //resize image
                Image::make($image_tmp)->save($user_image_path);

                //store image name 
                $slug = str_slug($product->name, '-');
                $result = Product::where('id', $req->product)->update([
                    'name'                  => $product->name,
                    'is_active'             => $product->isActive,
                    'slug'                  => $slug,
                    'price'                 => $product->price,
                    'views'                 => $product->views,
                    'sales'                 => $product->sales,
                    'warranty'              => $product->warranty,
                    'discount'              => $product->discount,
                    'status'                => $product->status,
                    'content'               => $product->content,
                    'category_id'           => $product->category->id,
                    'product_type_id'       => $product->product_type->id,
                    'provider_id'           => $product->provider->id,
                    'image'                => 'http://localhost:8000/'.$user_image_path
                ]);
                return response()->json(['item' => $result]);
            }
        }
        return response()->json(['items' => 'error']);
    }
    
    public function destroy($id){
        $data = Product::where('id', $id)->delete();
        return response()->json(['affected'=> $data]);
    }
}
