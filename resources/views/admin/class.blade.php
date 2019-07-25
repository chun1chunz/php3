@extends('admin.master')

@section('title','Class page')

@section('content')

 @include('admin.class_detail')
 <table border=1>
     <thead>Bang hien thi
         <th>ID</th>
         <th>Name</th>
         <th>Major</th>
     </thead>
    
 </table>
 @include('admin.class_detail')
@endsection
