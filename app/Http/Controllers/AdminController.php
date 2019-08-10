<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::find(1);
        // Lay ra Admin kem theo ClassRoom
        $admin = $admin->load('classRoom');
        // $admin = $admin->with('classRoom')->get();

        // Lay rieng ra ClassRoom cua Admin do
        // $class = $admin->classRoom;
        // $class = $admin->classRoom()->get();
        dd($admin);

    }

    public function indexClass()
    {
        $class = ClassRoom::find(5);
        // Lay ra tat ca admins thuoc class 5
        $admins = $class->admins->toArray();

        // Lay ra class kem theo tat ca cac admins thuoc no
        $class = $class->load('admins');
        dd($admins);

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admins.getLogin');
    }
    public function getLogin(){
        if (Auth::check()) {
            return redirect()->route('classes.list');//kiem tra da login chua neu true la da login
            # code...
        }
        return view('admin.login');
    }
    public function postLogin( Request $request){
        if (Auth::check()) {
            return redirect()->route('classes.list');//kiem tra da login chua neu true la da login
            # code...
        }
        $this->validate($request,[
            'email'=>'required|email|exists:admins|min:6',
            'password'=>'required|min:6|max:32'
        ]);
        $data = $request->only(['email','password']);// chi lay ra dlieu gom name va pass


        // kiem tra dang nhap theo email va pass vua nhan

         $checkLogin=Auth::attempt($data);//= Auth::attempt(['email' => $email, 'password' => $password])
         // 3. Kiem tra neu tra ve true thi dang nhap thanh cong
         if ($checkLogin) {
             # code...
             return redirect()->route('classes.list');

         }else {
             return redirect()->route('admins.getLogin');
         }
    }
}
