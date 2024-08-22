@extends('welcome')
@section('title', 'Edit Activity')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('activity/' .$activities->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$activities->id}}" id="id" />
        <label>Activity Name</label></br>
        <input type="text" name="name" id="name" value="{{$activities->name}}" class="form-control"></br>
        <label>Activity Duration</label></br>
        <input type="text" name="mobile" id="duration" value="{{$activities->duration}}" class="form-control"></br>
        <label>Activity Remark</label></br>
        <input type="text" name="mobile" id="description" value="{{$activities->remark}}" class="form-control"></br>
        <label>Activity Status</label></br>
        <select name="status" id="status" class="form-control">
            <option value="pending" {{ $activities->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="done" {{ $activities->status == 'done' ? 'selected' : '' }}>Done</option>
        </select></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop