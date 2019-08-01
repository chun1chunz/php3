@extends('admin.master')

@section('title','Create new Class')

@section('content')
    @if($errors ->any())
        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach
        </ul>
           
        </div>
    @endif
<form action="{{route('classes.create-post')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" id="name" class="form-control" name="name" />
            
        </div>
        <div class="form-group">
            <label for="teacher_name">Teachername</label>
            <input type="text" id="teacher_name" class="form-control" name="teacher_name" />
            
        </div>
        <div class="form-group">
            <select name="major" id="" class="form-control">
                <option value="CNTT"> Cong nghe thong tin</option>
                <option value="DPTT"> D phuong tien </option>
                <option value="MKT"> marketing</option>
                <option value="UD"> Ung dung phan mem</option>

            </select>
        </div>
        <div class="form-group">
            <label for="max_student"> Max student</label>
            <input type="text" class="form-control" name="max_student" id="max_student"/>
        </div>
        <div>
        <button type="submit" class="btn btn-submit"> Create Class</button>
        </div>
    </form>
@endsection