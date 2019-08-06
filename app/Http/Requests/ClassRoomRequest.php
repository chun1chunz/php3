<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ClassRoomRequest extends FormRequest
{
   
    public function rules()
    {
        return [
            //
            'name'=>'required|string|min:8',
            'teacher_name'=>'required|string|min:5|max:32',
            'major'=>'required|string',
            'max_student'=>'nullable|numeric',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Yeu cau nhap ten lop',
            'name.string'=>'ten lop la chuoi',
            'name.min'=>'ten lop it nhat 8 ki tu',
            //teacher_name
            'teacher_name.required'=>'Yeu cau nhap ten giao vien',
            'teacher_name.string'=>" Teacher_name phai la chuoi",
            'teacher_name.min'=>'It nhat 5 ki tu',
            'teacher_name.max'=>'Nhieu nhat 32 ki tu',

        ];
    }
}
