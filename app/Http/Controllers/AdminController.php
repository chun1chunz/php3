<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ClassRoom;

class AdminController extends Controller
{
    //
    public function index(){
        // $admins= Admin::all();
        $admin= Admin::find(1);
        // dd($admins);
       // lay ra admin kem classRoom
        $admin = $admin->load('classRoom')->toSql();//toSql: xem cau lenh truy van //toArray : xem mang array
        //$admin =$admin->with('classRoom')->get();

        // lay ra classRoom cua admin do
        dd($admin);
       
    }
     public function indexClass(){
        $class = ClassRoom::find(36);
        // lay ra tat ca cac admins
        $class -> $class->admins;
        $class = $class->load('admins');
        dd($admins);
     }
    
}
