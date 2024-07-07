<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Hash;
use DB;
use App\Models\admin\user;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $data = DB::table('admin')->get();
        return view('/admin/pages/account/list', ['listAccount' => $data]);
    }

    public function addAccount(){
        return view('/admin/pages/account/add');
    }

    public function addProgress(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:admin,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $adminaccount = new user();
        $adminaccount -> name = $request->input('name');
        $adminaccount -> email = $request->input('email');
        $adminaccount -> password =  Hash::make($request->input('password'));

        $adminaccount ->save();

        return redirect()->route('addAccount')->with('success', 'User created successfully!');
    }

}
