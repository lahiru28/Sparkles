<?php     require_once('inc/connection.php') ?>
<?php 

	error_reporting(0);

	$errors = array();

	$date=$_POST['date'];
	$venue=$_POST['venue'];
	$email=$_POST['email'];

	$query = "INSERT INTO packages (";
	$query .= "date , venue , email , packname , is_deleted";
	$query .= ") VALUES (";
	$query .= " '{$date}','{$venue}','{$email}', 5 , 0 " ;
	$query .=")";


	$result = mysqli_query($connection , $query);

	if ($result) {
		//echo "ok";

	}else{
		echo "failed";
	}	
		

 ?>

<!DOCTYPE html>
<html>
 <head>
		<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="styles/norty40.css">
		<link rel="stylesheet" type="text/css" href="styles/headernfooter.css">
 </head>
 <body>
	 
	<!--Header--> 
    <div class="header">
		<h1>Sparkles</h1></br>
	
		<ul>
		<li><a href="homepage.php" class="navi">Home</a></li>
		<li><a class="active" href="Services.php" class="navi">Services</a></li>
		<li><a href="aboutus.php"class="navi">About Us</a></li>
		<li><a href="gallery.php" class="navi">Gallery</a></li>
		<li><a href="contactus.php" class="navi">Contact Us</a></li>
		<li style="float:right"><a href="login.php">Login</a></li>
		<li style="float:right"><a href="signup.php">Sign Up</a></li>
		</ul>
		<br><br>
		</div>
	
		<!--The Wallpaper slide show-->
	
	<div style="margin-left:300px;">
	<div class="mySlides" >
		<img src="images/fourty 1.jpg" style="width:80%; height:700px;">
	</div>
	<div class="mySlides">
		<img src="images/fourty 2.jpg" style="width:80%; height:700px;">
	</div>
	<div class="mySlides">
		<img src="images/fourty 3.jpg" style="width:80%; height:700px;">
	</div>
	<div class="mySlides" >
		<img src="images/fourty 4.jpg" style="width:80%; height:700px;">
	</div>
	<div class="mySlides" >
		<img src="images/fourty 5.jpg" style="width:80%; height:700px;">
	</div>
	</div>
	
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span>
	<span class="dot"></span> 
	<span class="dot"></span>
	
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 2000);
	}
	</script>
	
	<!--Introduction-->
	<div class="intro" style = "margin-left:100px;">
		<p> Norty forty fabulous forty karanna Life begins on your 40th birthday.
		<p> Why spend it alone when you can show fabulous you are now?
	</div>
	
	
	
	<!--Creating Columns-->
	<div class="row">
	<!--Left Column-->
	<div class="leftcolumn">	
		<div class="items"></br>
			<p>Food a beverages for 20+ guest
			<p>2 Kg Cake
			<p>Popular Venue
			<p>Clasical music for Entertainment
		</div>
	</div>
	
	
	<div class="rightcolumn">
		<div class="container">
			<form name="availability" method="post">
		
			<label for="date">Date</label>
			<input type="date" id="date" name="date" ></input>
			
			<label for="venue">Venue</label>
			<select id="venue" name="venue">
				<option value="galadari">Galadari</option>
				<option value="home">Home Sweet Home</option>
				<option value="cinnamon">Cinnamon</option>
				<option value="kingsbury">Kingsbury</option>
				<option value="wateredge"> Waters edge</option>
				
			</select>
			
			<label for="email">Email</label> 
			<input type="text" id="email" name="email"></input>
				
			<input type="Submit" name="Submit" onclick="details()">
		
			</form>
		</div>	
	</div>
	</div><!--To close the row-->
	<script>
	function details() {
		alert("your details have been submitted and the ammount per person is Rs.1400/=");
	}
	</script>
	
	
	<!--Footer-->
	<div class="footer" style = "margin-top:300px;">
		<h2>Sparkles</h2>
		<p>@Copyright.All rights reserved
	</div>
  
	
 </body>
	
</html>