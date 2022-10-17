@extends('layouts.app')

@section('title')
    edit
@endsection


@section('content-body')
<h3 class="text-center p-3">Edit student</h3>
<form action="" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">fullname</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name= 'fullname'value="{{$data['fullname']}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input type="text" class="form-control" name="address" value="{{$data['address']}}" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Birthday</label>
        <input type="date" class="form-control" name="birthday" value="{{$data['birthday']}}" id="exampleInputPassword1">
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection