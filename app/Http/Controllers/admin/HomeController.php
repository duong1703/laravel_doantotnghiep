<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $countuser = DB::table('users')->count();
        $countadmmin = DB::table('admin')->count();
        return view('/admin/pages/home', [
            'countuser' => $countuser,
            'countadmmin' => $countadmmin,
        ]);
    }
}
