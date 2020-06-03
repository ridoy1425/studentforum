<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <title>Maskatadighi School and College</title>
  </head>
  <body>
    <div class="menu_bar">
   
        <nav class="navbar navbar-expand-lg  bg-light">
          <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('public/frontend/images/LogoMakr_8ySgl4.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('school.about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('school.students')}}">Student Form</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('school.studentlist')}}">Students List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('school.contact')}}" tabindex="-1">Contact</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
   
    </div>

  @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public/frontend/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
  </body>
</html>