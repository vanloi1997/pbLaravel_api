<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Category;


class CategoryController extends Controller
{
    //
    public function index(){
        $data = Category::get();
        $count = $data->count();
        return response()->json(['items' => $data,'count' => $count]);
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
