@extends('layouts.app')

@section('title')
    edit
@endsection


@section('content-body')
<button class="btn btn-primary "><a class="text-black" href="{{route('student_add')}}">Add studet</a></button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Fullname</th>
        <th scope="col">Address</th>
        <th scope="col">Birthday</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $v)

        <tr>
            <th scope="row">{{$v['id']}}</th>
            <td>{{$v['fullname']}}</td>
            <td>{{$v['address']}}</td>
            <td>{{$v['birthday']}}</td>
            <td><a href="{{route('student_get',['id'=>$v['id']])}}"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="{{route('student_delete',['id'=>$v['id']])}}"><i class="bi bi-x-circle-fill"></i></a></td>
          </tr>
        @endforeach
      
      
    </tbody>
  </table>
@endsection