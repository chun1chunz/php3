<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;


class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classroom = ClassRoom::all();
       return view('classrooms',['classrooms'=>$classrooms]);
    }
    public function createForm(){
        return view('admin.add_class');
    }
    public function create(Request $request){
        $this->validate($request, [
            'name'=>'required|string|min:8',
            'teacher_name'=>'required|string|min:5|max:32',
            'major'=>'required|string',
            'max_student'=>'nullable|numeric',
        ]);
        $data= $request->except('_token');
        //dd($data);
        // luu dlieu vao class
        $classRoom = new ClassRoom();
        // gan gia tri vao cho cac thuoc tinh
        $classRoom->name = $data['name'];
        $classRoom->teacher_name = $data['teacher_name'];
        $classRoom->major = $data['major'];
        $classRoom->max_student = $data['max_student'];
        // Luu
        $classRoom->save();
        // Sau khi luu se tra ve danh sach
        return view('admin.class', ['classes' => ClassRoom::all()]);
        //return $this->index();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
