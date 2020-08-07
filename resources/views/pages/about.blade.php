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
      <img class="d-block w-100" src="image/22iium_1503316576.jpg" alt="First slide">
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
