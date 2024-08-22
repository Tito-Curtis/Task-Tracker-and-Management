@extends('welcome')
@section('content')
@section('title', 'Home')

<div class="container my-5">
    <div class="jumbotron text-center bg-primary text-white p-5 rounded">
        <h1 class="display-4">Welcome to Activity Tracker & Manager</h1>
        <p class="lead">Your all-in-one solution for managing and tracking daily activities effectively.</p>
    </div>
    <div class="row text-center mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fa fa-tasks fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Track Activities</h5>
                    <p class="card-text">Monitor all your daily activities in one place. Stay organized and on top of your tasks.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fa fa-users fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Team Collaboration</h5>
                    <p class="card-text">Collaborate with your team seamlessly. Update statuses and manage tasks together.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fa fa-chart-line fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Generate Reports</h5>
                    <p class="card-text">Get insights and reports on activity history, filtered by custom durations.</p>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
