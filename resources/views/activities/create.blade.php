@extends('welcome')
@section('title', 'Create Activity')
@section('content')
 
<div class="card">
  <div class="card-header">Add New Activity</div>
  <div class="card-body">
      
      <form action="{{ url('activity') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <label>Remark</label></br>
        <input type="text" name="remark" id="remark" class="form-control"></br>
        <label for="status">Status</label></br>
        <select name="status" id="status" class="form-control">
            <option value="pending">Pending</option>
            <option value="done">Done</option>
        </select></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form> 
   
  </div>
</div>
 
@stop