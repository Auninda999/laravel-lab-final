<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Restaurent;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users', $users);
    }

    public function registeredit(Request $request, $id){
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);
    }

    public function registerupdate(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->usertype = $request->input('usertype');

        $users->update();

        return redirect('/role-register')->with('status', 'User data updated');
    }

    public function registerdelete(Request $request, $id){
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status', 'User data removed');
    }

    public function adduser(){
        return view('admin.adduser');
    }

    public function insertuser(Request $request){
        $user = new User();  
        $user->name = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->usertype = $request->input('usertype');
        if($user->save()){
            return redirect('/role-register');
        }else{
            return redirect('/adduser');
        }
    }

    public function addrestaurent(){
        return view('admin.addrestaurent');
    }

     public function insertrestaurent(Request $request){
        $restaurent = new Restaurent();  
        $restaurent->name = $request->username;
        $restaurent->contactno = $request->phone;
        $restaurent->email = $request->email;
        $restaurent->shortdescription = $request->shortdescription;
        $restaurent->menulist = $request->menu;
        if($restaurent->save()){
            return redirect('/restaurentlist');
        }else{
            return redirect('/addrestaurent');
        }
    }

    public function registeredrestaurents(){
        $restaurents = Restaurent::all();
        return view('admin.restaurentlist')->with('restaurents', $restaurents);
    }
}
