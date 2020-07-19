<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Users;
use Image;

class UsersController extends Controller
{
    //
    public function index(){
        $data = Users::select('is_active as isActive','is_admin as isAdmin','users.*')->orderBy('updated_at','DESC')->get();
        return response()->json(['items' => $data]);
    }
    public function show(Request $req){
        $data = Users::where('id',$req->user)->first();
        $data->isActive = $data->is_active;
        $data->isAdmin = $data->is_admin;
        return response()->json($data);
    }
    public function store(Request $req){
        $user = json_decode($req->userr);
        if($req->hasFile('image')){
            $image_tmp = $req->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $user_image_path = 'images/user/'.$filename;
                //resize image
                Image::make($image_tmp)->save($user_image_path);

                //store image name 
                $result = Users::insert([
                    'email' => $user->email,
                    'name' => $user->name,
                    'is_active' => $user->isActive,
                    'is_admin' => $user->isAdmin,
                    'phone' => $user->phone,
                    'location' => $user->location,
                    'password' => bcrypt($user->password),
                    'avatar' => 'http://localhost:8000/'.$user_image_path
                ]);
                return response()->json(['items' => $result]);
            }
        }
        return response()->json(['items' => 'error']);
    }

    public function update(Request $req){
        $user = json_decode($req->userr);
        if($req->hasFile('image')){
            $image_tmp = $req->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $user_image_path = 'images/user/'.$filename;
                //resize image
                Image::make($image_tmp)->save($user_image_path);

                //store image name 
                $result = Users::where('id', $req->user)->update(['updated_at' => $user->updatedAt,'name' => $user->name,'email' => $user->email,'phone' => $user->phone,'location' => $user->location,'is_active' => $user->isActive,'is_admin' => $user->isAdmin,'password' => bcrypt($user->password),'avatar' => 'http://localhost:8000/'.$user_image_path]);

                return response()->json(['item' => $result]);
            }
        }
        return response()->json(['items' => 'error']);
    }
    
    public function destroy($id){
        $data = Users::where('id', $id)->delete();
        return response()->json(['affected' => $data]);
    }
    public function emailcheck(Request $req){
        $email = $req->query('email');
        $emailcheck = Users::where('email',$email)->count();
        $emailcheck = $emailcheck == 0 ? true : false;
        return response()->json($emailcheck);
    }
}
