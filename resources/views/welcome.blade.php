<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title', 'Default Title')</title>

    <style>
    
        .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
        }

        
        .sidebar a {
          display: block;
          color: black;
          padding: 16px;
          text-decoration: none;
        }

        
        .sidebar a.active {
          background-color: #04AA6D;
          color: white;
        }

        
        .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
        }

        
        div.content {
          margin-left: 200px;
          padding: 1px 16px;
          height: 1000px;
        }

        
        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
          }
          .sidebar a {float: left;}
          div.content {margin-left: 0;}
        }

        
        @media screen and (max-width: 400px) {
          .sidebar a {
            text-align: center;
            float: none;
          }
        }

        
        .nav-item .btn {
          margin-left: 10px;
        }

       
        .homepage-message {
            text-align: center;
            padding: 50px 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Activity Tracker and Manager</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                            <a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                                        </li>

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                        
                    </div>
                </nav>
            </div> 
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <a class="active" href="{{url('/')}}">Home</a>
                        <a href="{{url('/activity')}}">All Activities</a>   
                        <a href="{{url('/pending')}}">Pending Activities</a> 
                        <a href="{{url('/completed')}}">Completed Activities</a> 
                    </div>   
                </div>
                <div class="col-md-9">
                    
                    @yield('content')

                    
                   
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
