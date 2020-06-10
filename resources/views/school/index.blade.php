@extends('welcome')
@section('content')
<div class="header_pic">  
    <div class="container">
      <div class="carousel">
        {{-- <h1>WELCOME TO!</h1>
        <h3>Maskatadighi Multilateral Technical High School & College</h3>
        <p>Maskatadighi Multi (tech) High School And college is an academic institute located at Maskatadighi Katakhali Rajshahi.<br> Its institute code (EIIN) is 126854. It was established on 01 January 1952. The institute has following 3 disciplines:<br> SSC/Equivalent:95.87%, HSC/Equivalent:61.97%. It has day shift. Its management is Managing.</p> --}}
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('public/frontend/images/school1.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>In the classroom with many students</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/frontend/images/school2.jpg') }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Physical exercise before the class started</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('public/frontend/images/school3.jpg') }}" class="d-block w-100" alt="picschool">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Front view of Maskatadighi school's</p>
              </div>
            </div>            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>  
    
    <div class="welcome_msg">
      <div class="container">        
        <div class="messege">
          <h3 class="common_header">Welcome to Maskatadighi High School</h3>
          <p>Maskatadighi High School,Rajshahi is one of the most famous and biggest schools in Bangladesh.
            It aims at quality education of the students. It creates a favorable environment for the development of the potentials of the students. This school is not only famous at Rajshahi but also all over the country for its own identity. The students of this school have been able to play important role in building the nation for their creativity. The students of this school have a well developed sense of life and moral values.
           It got the recognition for its maintaining a steady and better environment for the flourishing of the students and for maintaining strict discipline. From the very beginning of the academic year classes are regularly held.
            They try to use ICT in education.</p>
        </div>
      </div>
    </div>
    <div class="third_area">
     <div class="container">
        <div class="row">
        <div class="col-md-5">
          <div class="impt_links">
            <h3 >Some Important Links</h3>
            <ul>
              <li><a href="https://moedu.gov.bd/">Ministry of Education</a></li>
              <li><a href="http://www.dshe.gov.bd/">Directorate of Secondary & Higher Education</a></li>
              <li><a href="http://www.educationboard.gov.bd/">Education Board</a></li>
              <li><a href="http://www.rajshahieducationboard.gov.bd/">Rajshahi Education Board</a></li>
              <li><a href="http://www.bmeb.gov.bd/">Bangladesh Madrasah Education Board</a></li>
              <li><a href="http://www.bteb.gov.bd/">Bangladesh Technical Education Board</a></li>
              <li><a href="http://www.dpe.gov.bd/">Class Five Certificate Result</a></li>
              <li><a href="http://www.ru.ac.bd/">Rajshahi University</a></li>
              <li><a href="http://www.ruet.ac.bd/">Rajshahi University Of Engineering & Technology</a></li>
            </ul>
      
    </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
         <div class="events">
           <h3> Some Events</h3>
            <ul>
              <li>
                <a href="#">Pahela Baisakh 1422 Udjapan</a>
              </li>
                <li>
                <a href="#">Mayor's visit to PN Girls' School</a>
              </li>
                <li>
                <a href="#">Visit of a Foreign Deligate</a>
              </li>
            </ul>
         </div>
        </div>
      </div>
     </div>
    </div>
    <div class="location">

     <div class="container">
       <h3 class="common_header">School Location</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2569.944889636146!2d88.67111365476171!3d24.36561241478709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbf0f86ccf9449%3A0xc085902576631f09!2sMaskatadighi%20Multilateral%20Technical%20High%20School%2C%20N6!5e0!3m2!1sbn!2sbd!4v1591775236262!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
     </div>
    </div>
  </div>
    @endsection