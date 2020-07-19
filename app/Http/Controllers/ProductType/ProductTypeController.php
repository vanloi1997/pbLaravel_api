<?php

namespace App\Http\Controllers\ProductType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    //
    public function index(){
        $data = Category::get();
        return response()->json(['items' => $data]);
    }
    public function show(Request $req){
        $data = Category::where('id',$req->category)->first();
        $data->isActive = $data->is_active;
        return response()->json($data);
    }
    public function store(Request $req){
        $name = $req->name;
        $is_active = $req->isActive;
        $slug = str_slug($name, '-');
        $result = Category::insert([
            'name' => $name,
            'is_active' => $is_active,
            'slug' => $slug
        ]);
        return response()->json(['items' => $result]);
    }

    public function update(Request $req){
        $id = $req->category;
        $slug = str_slug($req->name, '-');
        $data = Category::where('id', $id)->update(['name' => $req->name ,'is_active' => $req->isActive, 'slug' => $slug]);
        return response()->json(['item' => $data]);
    }
    
    public function destroy($id){
        $data = Category::where('id', $id)->delete();
        return response()->json(['affected'=> $data]);
    }
}
