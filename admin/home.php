
<?php 
	include('../functions.php');


	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

  <title><?php $ha = "active"; ?>Registrion page</title>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../admin/a.css">
	
</head>
<body>
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
    <li class="<?php echo $ha; ?>" ><a href="..//ind.php">Home</a> </li>
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
<div class="profile_info">
      <img src="../image/admin_profile.png">

      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="home.php?logout='1'" style="color: red;">logout</a>
            &nbsp; <a href="create_user.php"> + add user</a>
          </small>

        <?php endif ?>
      </div>
    </div>
</header>

</div>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		



	</div>
<!------add delete--->
	<div class="wrapper">
  	
  	<form class="comment_form">
      <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
      </div>
      <div>
        <label for="Email">Email:</label>
        <input type="text" name="email" id="email">
      </div>
      <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
      </div>
      <div>
        <label for="comment">Car type:</label>
        
      </div>
       <div>
        <label for="standard">Standard:</label>
        <input type="radio" name="standard" id="standard">
        <label for="premium">Premium:</label>
        <input type="radio" name="premium" id="premium">
      </div>
      <button type="button" id="submit_btn">POST</button>
      <button type="button" id="update_btn" style="display: none;">UPDATE</button>
    </form>
  </div>
  <!-----end---->
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
<style>
  .wrapper {
  width: 45%;
  height: auto;
  margin: 10px auto;
  border: 1px solid #fff;
  background: white;
}
/*
* COMMENT FORM
**/
.comment_form {
  width: 80%;
  margin: 100px auto;
  border: 1px solid green;
  background: #fafcfc;
  padding: 20px;
}
label {
  color: black;
}
.comment_form label {
  display: block;
  margin: 5px 0px 5px 0px;
}
.comment_form input, textarea {
  padding: 5px;
  width: 95%;
}
#submit_btn, #update_btn {
  padding: 8px 15px;
  color: white;
  background: #339;
  border: none;
  border-radius: 4px;
  margin-top: 10px;
}
#update_btn {
  background: #1c7600;
}
/*
* COMMENT DISPLAY AREA
**/
#display_area {
  width: 90%;
  padding-top: 15px;
  margin: 10px auto;
}
.comment_box {
  cursor: default;
  margin: 5px;
  border: 1px solid #cbcbcb;
  padding: 5px 10px;
  position: relative;
}
.delete {
  position: absolute;
  top: 0px;
  right: 3px;
  color: red;
  display: none;
  cursor: pointer;
}
.edit {
  position: absolute;
  top: 0px;
  right: 45px;
  color: green;
  display: none;
  cursor: pointer;
}
.comment_box:hover .edit, .comment_box:hover .delete {
  display: block;
}
.comment_text {
  color: green;
  text-align: justify;
}
.display_name {
  color: blue;
  padding: 0px;
  margin: 0px 0px 5px 0px;
}
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
<!-- Add JQuery */ -->
<script src="jquery.min.js"></script>

<script src="jquery.min.js"></script>
<script src="scripts.js"></script>
<script> 
  $(document).ready(function(){
// save comment to database
 $(document).on('click', '#submit_btn', function(){
    var name = $('#name').val();
    var email = $('#email').val();
  var address = $('#address').val();
  var standard = $('#standard').val();
  var premium = $('#premium').val();
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'name': name,
        'email': email,
    'address': address,
        'standard': standard,
    'premium': premium,
    
      },
      success: function(response){
        $('#name').val('');
        $('#email').val('');
    $('#address').val('');
        $('#standard').val('');
    $('#premium').val('');
        $('#display_area').append(response);
      }
    });
  });
  // delete from database
  $(document).on('click', '.delete', function(){
    var id = $(this).data('id');
    $clicked_btn = $(this);
    $.ajax({
      url: 'server.php',
      type: 'GET',
      data: {
      'delete': 1,
      'id': id,
      },
      success: function(response){
        // remove the deleted comment
        $clicked_btn.parent().remove();
         $('#name').val('');
        $('#email').val('');
    $('#address').val('');
        $('#standard').val('');
    $('#premium').val('');
      }
    });
  });
  var edit_id;
  var $edit_comment;
  $(document).on('click', '.edit', function(){
    edit_id = $(this).data('id');
    $edit_comment = $(this).parent();
    // grab the comment to be editted
    var name = $(this).siblings('.display_name').text();
    var comment = $(this).siblings('.comment_text').text();
    // place comment in form
   var name = $('#name').val();
    var email = $('#email').val();
  var address = $('#address').val();
  var standard = $('#standard').val();
  var premium = $('#premium').val();
    $('#submit_btn').hide();
    $('#update_btn').show();
  });
  $(document).on('click', '#update_btn', function(){
    var id = edit_id;
    var name = $('#name').val();
    var email = $('#email').val();
  var address = $('#address').val();
  var standard = $('#standard').val();
  var premium = $('#premium').val();
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'update': 1,
        'id': id,
        'name': name,
        'email': email,
    'address': address,
        'standard': standard,
    'premium': premium,
      },
      success: function(response){
        var name = $('#name').val();
    var email = $('#email').val();
  var address = $('#address').val();
  var standard = $('#standard').val();
  var premium = $('#premium').val();
        $('#submit_btn').show();
        $('#update_btn').hide();
        $edit_comment.replaceWith(response);
      }
    });   
  });
});
</script>

</script>
</body>
</html>

<!---
  <style>
  .header {
    background: #003366;
  }
  button[name=register_btn] {
    background: #003366;
  }
  .wrapper {
  width: 45%;
  height: auto;
  margin: 10px auto;
  border: 1px solid #cbcbcb;
  background: white;
}
/*
* COMMENT FORM
**/
.comment_form {
  width: 80%;
  margin: 100px auto;
  border: 1px solid green;
  background: #fafcfc;
  padding: 20px;
}
.comment_form label {
  display: block;
  margin: 5px 0px 5px 0px;
}
.comment_form input, textarea {
  padding: 5px;
  width: 95%;
}
#submit_btn, #update_btn {
  padding: 8px 15px;
  color: white;
  background: #339;
  border: none;
  border-radius: 4px;
  margin-top: 10px;
}
#update_btn {
  background: #1c7600;
}
/*
* COMMENT DISPLAY AREA
**/
#display_area {
  width: 90%;
  padding-top: 15px;
  margin: 10px auto;
}
.comment_box {
  cursor: default;
  margin: 5px;
  border: 1px solid #cbcbcb;
  padding: 5px 10px;
  position: relative;
}
.delete {
  position: absolute;
  top: 0px;
  right: 3px;
  color: red;
  display: none;
  cursor: pointer;
}
.edit {
  position: absolute;
  top: 0px;
  right: 45px;
  color: green;
  display: none;
  cursor: pointer;
}
.comment_box:hover .edit, .comment_box:hover .delete {
  display: block;
}
.comment_text {
  text-align: justify;
}
.display_name {
  color: blue;
  padding: 0px;
  margin: 0px 0px 5px 0px;
}
  </style>