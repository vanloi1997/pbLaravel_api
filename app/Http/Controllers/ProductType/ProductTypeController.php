<?php

namespace App\Http\Controllers\ProductType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Http\Response;
use App\ProductType;
class ProductTypeController extends Controller
{
    //
    public function index(){
        $data = ProductType::get();
        return response()->json(['items' => $data]);
    }
    public function show(Request $req){
        $data = ProductType::where('id',$req->product_type)->first();
        $data->isActive = $data->is_active;
        return response()->json($data);
    }
    public function store(Request $req){
        $name = $req->name;
        $is_active = $req->isActive;
        $slug = str_slug($name, '-');
        $result = ProductType::insert([
            'name' => $name,
            'is_active' => $is_active,
            'slug' => $slug
        ]);
        return response()->json(['items' => $result]);
    }

    public function update(Request $req){
        $id = $req->product_type;
        $slug = str_slug($req->name, '-');
        $data = ProductType::where('id', $id)->update(['name' => $req->name ,'is_active' => $req->isActive, 'slug' => $slug]);
        return response()->json(['item' => $data]);
    }
    
    public function destroy($id){
        $data = ProductType::where('id', $id)->delete();
        return response()->json(['affected'=> $data]);
    }
}
