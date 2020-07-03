

<link href="{{ asset('css/aboutus.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')

{{-- <div class="about-section">
  <h1>About Us</h1>
  <p>‘Committee Manager’ is a website specifically created for IIUM that manages the committee’s recruitment for an event or program.</p>
  <p><b>Email:</b> committeemanagerIIUM@gmail.com</p>
   
</div>
<hr>
<div class="about-section">
  <h1>Services</h1>
  <p>We provide a platform for the organizer or societies to recruit the committee for their event.</p>
  <p>Keep track the activities for the organizer and students.</p>
  <p>Easy to use platform which includes familiar functions and features.</p>
</div>
<hr>
<hr>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/image/syarra.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Nur Syarra Shazida</h2>
        <p class="title">Developer</p>
        <p>Final year student of Information technology.</p>
        <p>nursyarra.zaini@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/image/avatar.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Supervisor</p>
        <p>Assistant Professor of Kulliyyah Information and Communication Technology, IIUM</p>
        <p>mike@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/image/avatar.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Nur Ain Mohamad</h2>
        <p class="title">Developer</p>
        <p>Final year student of Information technology.</p>
        <p>john@example.com</p>
      </div>
    </div>
  </div>
</div> --}}

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Sans" />@extends('layouts.app')

@section('content')
<center><h1 id="about_title"><?php echo $title; ?></h1></center>  
<div class="padding-column">
<div class="row">
  <div class="column">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active img-size">
      <img class="d-block w-100" src="https://lh3.googleusercontent.com/proxy/QnXheGFvwdRTZUkHHOzFlsK_gl-UkXj41D9gMoM66X0-0wxkU05Pduhoq6147rldOuSfpp94xwA6jQFR4m5Vpm90jXIGjOpTGN2z" alt="First slide">
    </div>
    <div class="carousel-item img-size">
      <img class="d-block w-100" src="https://news.iium.edu.my/wp-content/uploads/2017/05/DSCN8458.jpg" alt="Second slide">
    </div>
    <div class="carousel-item img-size">
      <img class="d-block w-100" src="https://assets.nst.com.my/images/articles/22iium_1503316576.jpg" alt="Third slide">
    </div>
  </div>
  
</div>
  </div>
  <div class="column" style="background-color:#EAFAF1; height: 410px; border-radius: 50px;" >
    <center><h2 class="column-font">Committee Manager</h2></center><hr><br>
    <p>In a year, surely there are many events that are being held within the campus.</p>
    <p>Most of the times, these events are being handled by a group of students and surely, it
  requires a lot of manpower to make the event become successful.</p>
  <p>This website is specifically designed and developed for IIUM students as developers have noticed that there is no specific application or platform is used to find the committee members for an event.</p>
  <p>Committee Manager then work as a system that manage the recruitment process.</p>
  
 
  </div>
</div>
</div>
<br><br>
<p class="padding">Any inquiry? <a href="faq">Click Here</a></p>
    

@endsection

