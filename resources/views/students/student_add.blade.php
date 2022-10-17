@extends('layouts.app')

@section('title')
    Add
@endsection


@section('content-body')
<h3 class="text-center p-3">Add student</h3>
<form action="" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">fullname</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name= 'fullname'  required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input type="text" class="form-control" name="address"  id="exampleInputPassword1" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Birthday</label>
        <input type="date" class="form-control" name="birthday"  id="exampleInputPassword1" required>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
@endsection