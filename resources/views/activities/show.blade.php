@extends('welcome')
@section('title', 'View Activity')
@section('content')
 
 
<div class="card">
  <div class="card-header">Activity Page</div>
  <div class="card">
    <div class="card"> 
      <div class="card-header bg-primary text-white">
          <h4>User Bio</h4>
      </div>
      <div class="card-body">
          <h5 class="card-title" style="font-size: 1.25rem; font-weight: bold;">User Name: <span style="font-weight: normal;">{{ $activities->user->name }}</span></h5>
          <h5 class="card-title" style="font-size: 1.25rem; font-weight: bold;">User Email: <span style="font-weight: normal;">{{ $activities->user->email }}</span></h5>
      </div>
      <div class="card-header bg-secondary text-white mt-3">
          <h4>Activity Pane</h4>
      </div>
      <div class="card-body">
          <p class="card-text" style="font-weight: bold;">Activity Name: <span style="font-weight: normal;">{{ $activities->name }}</span></p>
          <p class="card-text" style="font-weight: bold;">Time Created: <span style="font-weight: normal;">{{ $activities->created_at }}</span></p>
          <p class="card-text" style="font-weight: bold;">Last Update: <span style="font-weight: normal;">{{ $activities->updated_at }}</span></p>
          <p class="card-text" style="font-weight: bold;">
            Activity Status: 
            <span style="font-weight: normal; color: white; padding: 5px; border-radius: 5px; 
                background-color: {{ $activities->status == 'done' ? 'green' : 'red' }};">
                {{ $activities->status }}
            </span>
        </p>
          <p class="card-text" style="font-weight: bold;">Activity Duration: <span style="font-weight: normal;">{{ $activities->duration }}</span></p>
          <p class="card-text" style="font-weight: bold;">Activity Remark: <span style="font-weight: normal;">{{ $activities->remark }}</span></p>
      </div>
  </div>
  
</div>

       
    </hr>
  
  </div>
</div>
@endsection