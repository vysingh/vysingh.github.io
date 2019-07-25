<!doctype html>
<html lang="en">
<head>
  <title>MY SAMPLE PAGE</title>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="coding">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Darker+Grotesque|PT+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
</head>
<style>
	#phonetop:hover {
		color: red;
	}
	body {
		font-family: 'Source Sans Pro', sans-serif;
	}
	.nav-item 
	{
		text-transform: capitalize;
	}

	/* @media (min-width: 1200px) 
	{
		.wrapper-content 
		{
			width: 900px;
			margin-left: auto;
			margin-right: auto;
		}
	}
	*/
	.masthead {
      height: 200px;
      background-image: url('banner1.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
}
</style>

<body>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">REPAIR SERVICE</h1>
        <p class="lead">Something about you</p>
      </div>
    </div>
  </div>
</header>

  <!--    
  	<nav class="navbar navbar-expand-sm bg-light justify-content-between">
  		<a class="navbar-brand" href="#"><img src="mechanic.png" width="30" height="30" alt="" class="d-inline-block align-top"> LOGO HERE</a>

  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse" aria-controls="navcollapse" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collaspe navbar-collapse" id="navcollapse">
  		  <ul class="navbar-nav">
  			<li class="nav-item"><a class="nav-link" href="!#home">home</a></li>

  			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navitemdropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolios</a>
  				<div class="dropdown-menu"aria-labelledby="navitemdropdown">
  					<a class="dropdown-item" href="!#php">PHP</a>
  					<a class="dropdown-item" href="!#html">HTML</a>
  					<a class="dropdown-item" href="!#css">CSS</a>			
  				</div>
  			</li>

  			<li class="nav-item"><a class="nav-link" href="!#contact">contact</a></li> 

  			<form class="form-inline float-right" action="#">
  				<input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search">
  				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  			</form>
  		  </ul>  
  		 </div> 	  		
  	</nav>
-->

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="mechanic.png" width="30" height="30" alt="" class="d-inline-block align-top"> LOGO HERE</a>

  <div class="collapse navbar-collapse" id="navbarToggler">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item"><a class="nav-link" href="#home">Why us</a></li>
 	  <li class="nav-item"><a class="nav-link" href="#service">Service</a></li>
 	  		<!--<a class="nav-link dropdown-toggle" href="#" id="navitemdropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
 	  	<!--
  				<div class="dropdown-menu" aria-labelledby="navitemdropdown">
  					<a class="dropdown-item" href="!#php">phone repair</a>
  					<a class="dropdown-item" href="!#html">laptop repair</a>
  					<a class="dropdown-item" href="!#css">buy 2hand</a>			
  				</div> -->
  	 

  			<li class="nav-item"><a class="nav-link" href="#contact">contact us</a></li> 
    </ul>

    <span class="my-2 my-lg-0" id="phonetop"><ion-icon name="call" class="mr-sm-2" ></ion-icon> (+61) 000 000 000</span>

  </div>
  </div> <!--end container nav-->
 </nav>
<!--ontent- home-->
<div class="container"> 
	<!--body wrap-->

	<div class="row my-5 d-flex align-items-stretch" id="home">
		<div class="col-md-3  float-right">
			<!--<img src="home1.jpg"  class="mx-auto" style="width:100%;">-->
			  <div class="btn-group-vertical btn-group-lg mb-2"> 
			      <button type="button" class="btn btn-danger p-3"><i data-feather="users" class="mr-3" ></i>Team of experts</button>
			      <button type="button" class="btn btn-danger p-3"><i data-feather="smile" class="mr-3" ></i>24/7 Approchable</button>
			      <button type="button" class="btn btn-danger p-3"><i data-feather="zap" class="mr-3" ></i>Same day service</button>
			      <button type="button" class="btn btn-danger p-3"><i data-feather="dollar-sign" class="mr-3" ></i>Competitive price</button>
		      </div>
		</div>
		<div class="col-md-9 bg-light " style="padding: 20px; box-sizing: border-box;">
			<h2>ABOUT US</h2>
			<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
			</p>
		</div>
	</div>
	<!--end home-->
<h2 class="my-5 text-center"> OUR SERVICE</h2>
    <div class="card-deck my-5 mx-auto" id="service">
      
    	<div class="card bg-light" >
    		<img src="phone-ser.jpeg" class="card-img-top" alt="">
    		<div class="card-body text-center">
    			<h4 class="card-title">PHONE REPAIR</h4>
    			<p class="card-text">Some example text some example text.Some example text some example text.</p>
    			<button class="btn btn-danger" id="btn-book" onclick="myFunction()">Book Now</button>		
    		</div>
    	</div>

    	<div class="card bg-light">
    		<img src="LAPTOP-SER.jpeg" class="card-img-top" alt="">
    		<div class="card-body text-center">
    			<h4 class="card-title">LAPTOP REPAIR</h4>
    			<p class="card-text">Some example text some example text.Some example text some example text.</p>
    			<button class="btn btn-danger" id="btn-book1" onclick="myFunction1()">Book Now</button>    		
    		</div>
    	</div>

    	<div class="card bg-light">
    		<img src="renew1-ser.jpeg" class="card-img-top" alt="">
    		<div class="card-body text-center">
    			<h4 class="card-title">RENEW ITEM</h4>
    			<p class="card-text">Some example text some example text.Some example text some example text.</p>
    			<button class="btn btn-danger" id="btn-book2" onclick="myFunction2()">Book Now</button>    		
    		</div>
    	</div>
    	
    </div> <!--end card deck-->

    <div class="row my-5 mx-auto">
    	<div class="col-lg-6 mx-auto">
    	  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26486.58782827919!2d151.0139639450797!3d-33.91994246107898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bc1b89bc8969%3A0x5017d681632ad00!2sBankstown+NSW+2200!5e0!3m2!1sen!2sau!4v1563945554593!5m2!1sen!2sau" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    	 </div>
    	 <div class="col-lg-6 mt-5" id="contact">
    	 	<h2>WHERE IS OUR STORE?</h2>
    	 	<P>Some example text some example text.Some example text some example text.</P>
    	 	<ion-icon name="call" class="mr-sm-2"></ion-icon> (+61) 000 000 000 <br>
    	 	<ion-icon name="home" class="mr-sm-2"></ion-icon> 123 pitt str Bankstown, NSW 2144 Australia <br>
    	 	<ion-icon name="logo-facebook" class="mr-sm-2"></ion-icon> facebook/werepair <br>
    	 	<ion-icon name="mail" class="mr-sm-2"></ion-icon> help@werpair.com<br>
    	 </div>
    </div>

    <div class="container">
    	<h2 class="my-sm-5 text-center my-5">FAQs</h2>
    	<div class="row my-5">
    		<div class="col-md-6 mx-auto">
    			<h4 data-toggle="collapse" data-target="#faqs-0" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How much does it cost?</h4>
    			    <div class="collapse" id="faqs-0">
    			        <p>Our all-inclusive prices are very competitive, with screen replacements starting at just $89.00. Add in the convenience that we come to you, and it means you can carry on doing the things you love while your mobile phone is repaired, at your home, work or even your favourite café. To get an instant repair price for your iPhone, iPad or Samsung repair simply click here.</p>

    			        <p>Worried about call-out fees? We don’t charge them. The price you see quoted on our website is the price you pay. And with fix2U’s risk-free no fix, no fee policy, if we can’t repair your device, there is nothing to pay!</p>
    			    </div>
    			<h4 data-toggle="collapse" data-target="#faqs-1" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-1">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>
    		    <h4 data-toggle="collapse" data-target="#faqs-2" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-2">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>
    		    <h4 data-toggle="collapse" data-target="#faqs-3" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-3">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>				
    		</div>
    		<div class="col-md-6 mx-auto">
		       <h4 data-toggle="collapse" data-target="#faqs-4" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-4">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>
    			<h4 data-toggle="collapse" data-target="#faqs-5" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-5">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>
    		    <h4 data-toggle="collapse" data-target="#faqs-6" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-6">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>
    		    <h4 data-toggle="collapse" data-target="#faqs-7" class="font-weight-light text-info"><ion-icon name="chatbubbles" class="mr-sm-2"></ion-icon>How to xxxxx xxxx  xxx xxx ?</h4>
    			    <div class="collapse" id="faqs-7">
    			        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    			    </div>			
    		</div>
    	</div>    	
    </div>

</div> <!--end body wrap-->
<footer class="bg-danger text-center text-white py-2">
	<small>copyright 2019</small>
</footer>
    <script>
      feather.replace()
    </script>

    <script>
    function myFunction() {
    var x = document.getElementById("btn-book");
  if (x.innerHTML === "Book Now") {
    x.innerHTML = "Call us: (+61) 000 000 000";
  } else {
    x.innerHTML = "Book Now";
  }
}
</script>
    <script>
    function myFunction1() {
    var x = document.getElementById("btn-book1");
  if (x.innerHTML === "Book Now") {
    x.innerHTML = "Call us: (+61) 000 000 000";
  } else {
    x.innerHTML = "Book Now";
  }
}
</script>
    <script>
    function myFunction2() {
    var x = document.getElementById("btn-book2");
  if (x.innerHTML === "Book Now") {
    x.innerHTML = "Call us: (+61) 000 000 000";
  } else {
    x.innerHTML = "Book Now";
  }
}
</script>
</body>
</html>