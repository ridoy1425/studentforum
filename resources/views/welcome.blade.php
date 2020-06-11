<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/all.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <title>Maskatadighi School and College</title>
  </head>
  <body>
    <div class="logo_bar">      
      <div class="container">        
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('public/frontend/images/logo.png') }}" alt="logo">
            <h2>Maskatadighi Multilateral Technical High School & College  <br> <span>Rajshahi</span></h2>
          </a>
        </div>
      </div>
      <div class="menu_bar">
        <div class="container">
          <nav class="navbar navbar-expand-lg  ">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{Route('school.about')}}">About</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="{{Route('school.students')}}">Teachers List</a>
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
        </nav>
        </div>
      </div>   
      
    
    @yield('content')

    <footer class="footer_area">
        <div class="container">
          <div class="footer_top">
            <div class="row">
              <div class="col-md-3">
                <div class="contact">
                  <h3 class="common_header">Contact</h3>
                  <ul>
                   <li><a href="https://www.facebook.com/Maskatadighi-HIGH-School-134483456662803/"><i class="fab fa-facebook-f"></i>facebook.com</a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i> linkedin.com</a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i>twitter.com</a></li>
                      <li class="con_no"><a href="#"><i class="fas fa-mobile-alt"> </i>+334 1234 5987</a>
                      </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="ft_img">
                      <h3 class="common_header">Memorable Photos</h3>
                    </div>
                    <div class="con_imgi mt_30">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="{{asset('public/frontend/images/pic1.jpg') }}" alt="picture" class="img-flud w-100">
                          <img src="{{ asset('public/frontend/images/pic2.jpg') }}" alt="picture" class="img-flud mt_30 w-100">
                        </div>
                        <div class="col-md-4">
                          <img src="{{ asset('public/frontend/images/pic3.jpg') }}" alt="picture" class="img-flud w-100">
                          <img src="{{ asset('public/frontend/images/pic4.jpg') }}" alt="picture" class="img-flud mt_30 w-100">
                        </div>
                        <div class="col-md-4">
                          <img src="{{ asset('public/frontend/images/pic5.jpg') }}" alt="picture" class="img-flud w-100">
                          <img src="{{ asset('public/frontend/images/pic6.jpg') }}" alt="picture" class="img-flud mt_30 w-100">
                        </div>
                      </div>
                    </div>
              </div>
              
            </div>
          </div>
         
        <div class="footer_bottom  p-3">
          
            <p class="text-center">Copyright &copy; 2020. All rights reserved by <span class="text_info">AR Ridoy</span></p>
        </div>
        </div> 
      </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public/frontend/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
  </body>
</html>