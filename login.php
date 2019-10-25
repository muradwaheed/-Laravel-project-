<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php $ha = "active"; ?>Login page</title>
	<link rel="stylesheet" type="text/css" href="a.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
	<div id="aboutdiv" class="about">
	What is League of Legends?

   Two sisters were born from the Aspect of Justice. Kayle, the Righteous, wields celestial might and purges lands of the guilty. Morgana, the Fallen, refused to forsake her people. She bound her wings and receded into shadow, pained by her sister’s choice. Two sisters born from Justice chose opposing paths. They bide their time waiting for the destined day when they cannot evade their other half.
</div> 
<div id="contactdiv" class="about">
	<style type="text/css"></style>
	<form>
		<div class="l">
		<input type="text" name="" placeholder="name"/>
		<input type="text" name="" placeholder="Mobile Number"/>
		<input type="text" name="" placeholder="Email"/>
		<a class="sb" href="#">submit</a>
	   </div>

	   <div class="l">
		<textarea>Your Message</textarea>
	</div>
		
	</form>
	
</div> 
	<div class="fullwidth">

<header class="mainheader">


<nav>
	
	<ul>
		<li class="<?php echo $ha; ?>" ><a href="ind.php">Home</a> </li>
		<li><a href="#">News</a></li>
		<li><a href="#">Media</a></li>
		<li id="ch"><a href="#">Champions </a>
			<ul id="chm">
				<li><a href="#">Assassin</a></li>
				<li><a href="#">Fighter</a></li>
				<li><a href="#">Mage</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Tank</a></li>
				<li><a href="#">Marksman</a></li>
				

			</ul>


		</li>
		<li><a href="#">Guides</a></li>
		<li id="contact"><a href="#">Contact</a></li>
		<li id="about"><a href="#">About</a></li>

	</ul>




</nav>

<form class="search" method="post" action="register.php">
	<input type="text" name="" placeholder="Search...."/>
	<button id="submit" type="submit">SIGN UP</button>
</form>

</header>
</div>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form class="abc" method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<section id="#add" class="site-footer">
		
						<div class="header">
							
							<h1><strong>Application</strong></h1>
							
						</div>
					

					<div class="footer-icons">
						
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-googleplus"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
						<div class="copyrights">
							
							<h3></h3>

						</div>
					
	</section>


</div>

	<style>
	
	</style>
	<script>
$(document).ready(function()
{
	
	




	$("#ch").hover(function(){
		$('#contactdiv').slideUp('slow');
        $('#aboutdiv').slideUp('slow');
		$('#chm').stop(true, true).slideDown('slow');
	},
	function () {

     $('#chm').stop(true, true).slideUp('slow');
	});

$("#show").click(function()
	{
		if ($('#showmore').is(":hidden")){
			$('#showmore').slideDown('slow');
			$('#show').text("Show Less");
		}else{
			 $('#showmore').slideUp('slow');
            $('#show').text("Show More");
		}
	});








	$("#about").click(function()
	{
		if ($('#aboutdiv').is(":hidden")){
			$('#contactdiv').slideUp('slow');
			$("#aboutdiv").slideDown('slow');
		}else{
			 $('#contactdiv').slideUp('slow');
            $('#aboutdiv').slideUp('slow');
		}
	});


	$("#contact").click(function()
	{
		if ($('#contactdiv').is(":hidden")){
			$('#aboutdiv').slideUp('slow');
			$("#contactdiv").slideDown('slow');
		}else{
			$('#aboutdiv').slideUp('slow');
            $('#contactdiv').slideUp('slow');
		}
	});
});
</script>
</body>
</html>