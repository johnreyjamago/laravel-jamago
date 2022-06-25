@extends('users.layout')
@section('content')
 
<div class="editform">
  <div class="edittitle">Edit Students</div>
      <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Student ID</label></br>
        <input type="text" name="studentid" id="studentid" value="{{$users->studentid}}" class="form-control"></br>
        <label>First Name</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$users->firstname}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$users->lastname}}" class="form-control"></br>
        <label>Middle Initial</label></br>
        <input type="text" name="mi" id="mi" value="{{$users->mi}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$users->course}}" class="form-control"></br>
        <label>Yearlevel</label></br>
        <input type="text" name="yearlevel" id="yearlevel" value="{{$users->yearlevel}}" class="form-control"></br>
        <label>Username</label></br>
        <input type="text" name="username" id="username" value="{{$users->username}}" class="form-control"></br></br>

        <input id="submit"type="submit" value="Update" class="btn btn-success"></br>
    </form>
</div>
 
@stop