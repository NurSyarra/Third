<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="apple-touch-icon-precomposed" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="{{ asset('js/faq.js') }}" defer></script>

<style type="text/css">
/* import the fonts needed */
@import url("http://fonts.googleapis.com/css?family=Cookie");
@import url("http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");

/* reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


/* header settings */
.header > input { display: none; }


/* header settings */
.header > input { display: none; }

.header > label {
  display: none;
  width: 3em;
  height: 3em;
  margin-left: 1em;
  margin-top: .5em;
  background-size: contain;
  background-image: url("https://drive.google.com/uc?export=view&id=0B6od18BhWGl5eWhtZzJUaFA0SjA");
  background-repeat: no-repeat;
}

.header {
  width: 100%;
  height: 4em;
  background-color: #0C1323;
  opacity: 0.9;
  background-image: url("https://drive.google.com/uc?export=view&id=0B6od18BhWGl5YWN3emwyelRyUUE");
  background-repeat: no-repeat;
  background-position: right;
  background-size: auto 4em;
  position: fixed;
  top: 0px;
  z-index: 1000;
}


.header > .navbar {
  width: auto;
}

=======
.header > .navbar {
  width: auto;
}
>>>>>>> origin/Updated
.header > .navbar > li {
  display: inline-block;
  width: auto;
  height: auto;
  font-size: 130%;
  padding: 10px 12px 5px 12px;
  text-align: center;
}

.header > .navbar > li > a {
  color: white;
  text-decoration: none;
  font-family: Trebuchet MS, Charcoal, sans-serif;
  text-shadow: 2px 2px grey;
}

.header > .navbar > li > a:hover {
  color: #C21814; 
}
/* end header settings */

/* body settings */
.body {
  margin-top: 3em;
  z-index: -1000;
  width: 100vw;
  height: 100vh;
  font-family: Trebuchet MS, Charcoal, sans-serif;
  font-size: 130%;
  color: #0C1323;
  background-size: 100%;
  background-repeat: repeat-y;
  background-image: url("https://drive.google.com/uc?export=view&id=0B6od18BhWGl5elFiRTlubVZfN0k");



}

.question:hover {
  color: #C21814;
}


}
.question:hover {
  color: #C21814;
}

.content {
  width: 80%;
  padding: 20px;
  margin: 0 auto;
  padding: 0 60px 0 0;
}



.centerplease {
  margin: 0 auto;
  width: 100vw;
  font-size: 150%;
  text-align: center;
  margin-top: 3em;
  padding: 5px;
}

.question {
  position: relative;
  background: #0C1323;
  margin: 0;
  padding: 10px 10px 10px 50px;
  display: block;
  width:100%;
  cursor: pointer;
  color: white;
  /*text-shadow: 2px 2px grey;*/
}

.answers {
  background: #999;
  padding: 0px 15px;
  margin: 5px 0;
  height: 0;
  overflow: hidden;
  z-index: 15;
  position: relative;
  opacity: 0;
  -webkit-transition: .7s ease;
  -moz-transition: .7s ease;
  -o-transition: .7s ease;
  transition: .7s ease;
}

.questions:checked ~ .answers{
  height: auto;
  opacity: 1;
  padding: 15px;
}

.plus {
  position: absolute;
  color: white;
  margin-left: 10px;
  z-index: 15;
  font-size: 2em;
  line-height: 100%;
  -webkit-user-select: none;    
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  transition: .3s ease;
}

.questions:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.questions {
  display: none;
}
/* end of body settings */

/* footer settings */
.footer {
  display: block;
  width: 100%;
  color: #242B39;
  text-align: center;
  position: fixed;
  bottom: 0px;
  background-color: white;
  padding: 5px;
  z-index: 10;
  opacity: .9;
}


.footer > .contact {
  padding: 0px 0px 5px 0px;
}


.footer > .contact {
  padding: 0px 0px 5px 0px;
}

.footer > .contact > li > a {
  text-decoration: none;
  color: #242B39;
}

.footer > .contact > li > a:hover {
  text-decoration: underline;
  text-transform: uppercase;
  color: #C21814;
}

.footer > .contact > li {
  display: inline;
  padding: 0px 8px 0px 8px;
  border-right: 1px solid #242B39;
}

.footer > .contact > li:last-child{
  border-right: 0;
}
/* end of footer settings */

/* <= 600px settings*/
@media (max-width: 600px) {
  .header > label { 
    display: inline-block; 
  }
  
  .header > .navbar { 
    display: none; 
  }
  
  .header > input:checked + .navbar { 
    display: block;
    width: 220px;
    height: 110vh;
    position: absolute;
    top: 4em;
    z-index: 100;
    background-color: #0C1323; 
  }

  .header > input:checked + .navbar > li { 
    width: 250px;
    padding: 15px 0px 15px 15px;
  }
  
  .body {
    height: 120vh;
    font-size: 90%;
  }
  
  .footer {
    display: inline-block;
    width: 100%;
    z-index: 16;
    text-align: center;
    position: fixed;
    bottom: 0px;
    padding: 0px 0px 2px 0px;
  }
  
}

/* 601-759px settings */
@media all and (min-width:601px) and (max-width:749px) {
  .header > label { 
    display: inline-block; 
  }
  
  .header > .navbar { 
    display: none; 
  }
 
  .header > input:checked + .navbar { 
    display: block;
    width: 200px;
    height: 130vh;
    position: absolute;
    top: 4em;
    z-index: 100;
    background-color: #0C1323; 
  }

  .header > input:checked + .navbar > li { 
    width: 250px;
    padding: 15px 0px 15px 15px;
  }
 
  .body {
    height: 100vh;
    font-size: 100%;
  }
   .footer {
    display: inline-block;
    width: 100%;
    z-index: 16;
    text-align: center;
    position: fixed;
    bottom: 0px;
    padding: 0px 0px 2px 0px;
  }
}

/* 750-799px settings */
@media all and (min-width:750px) and (max-width:799px) {
  .body {
    height: 100vh;
    font-size: 100%;
  }
}

/* 800-1300px settings*/
@media all and (min-width:800px) and (max-width:1300px) {
  .body {
    height: 100vh;
    font-size: 100%;
  }
    .footer {
    display: inline-block;
    width: 100%;
    z-index: 16;
    text-align: center;
    position: fixed;
    bottom: 0px;
    padding: 0px 0px 2px 0px;
  }
}
}
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-2 justify-content-center">
        <div class="col-lg-8 order-lg-2">

<h2 class="text-center">Frequently Asked Questions</h2>
<br>

<div>
  <input type="checkbox" id="question1" name="q"  class="questions">
  <div class="plus">+</div>
  <label for="question1" class="question">
    How to register as an organiser?
  </label>
  <div class="answers">
   <p>1. Go to 'Register' and insert all of your details.</p>
   <p>2. Go to 'Profile' and update your profile.</p>
   <p>3. Go to 'Dashboard' to create a recruitment application and manage your applicants.</p>
   <p>4. Explore more!</p>
  </div>
</div>

<div>
  <input type="checkbox" id="question2" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question2" class="question">
    Can  non-iium community joined as a committee?
  </label>
  <div class="answers">
    No! This website is specifically for IIUMians. We will consider it as our future development!
  </div>
</div>
  
<div>
  <input type="checkbox" id="question3" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question3" class="question">
    Can student cancel the application?
  </label>
  <div class="answers">
    Indeed! You have the right!
  </div>
  
</div>

<div>
  <input type="checkbox" id="question4" name="q" class="questions">
  <div class="plus">+</div>
  <label for="question4" class="question">
    How do student get in touch with the organizer?
  </label>
  <div class="answers">
    The best way to contact them is by e-mailing them, there is a link to e-mail them in their profile page. 
  </div>
</div>


<br><br>

<hr>
    <h2 class="text-center">Question Form</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->
                    @if (Session::has('flash_message'))
                    	<div class="alert alert-success">{{ Session::get('flash_message')}}</div>
                    @endif
                    <form action="{{route('faq.store')}}" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i>Ask Question</h3>
                                    <p class="m-0">Connect with us!</p>
                                </div>
                            </div>
                            <div class="card-body p-3">
                            	{{csrf_field()}}
                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>

        </div>
    </div>
</div>

@endsection