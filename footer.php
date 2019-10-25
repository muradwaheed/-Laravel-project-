

<section id="#add" class="site-footer">
		
						<div class="header">
							
							<h1><strong>LUCK GAME</strong></h1>
							
						</div>
					

					<div class="footer-icons">
						
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-googleplus"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
</div>
						<div class="copyrights">
							
							<h3>&copy;Copyrights 2017 - by Coding Addict</h3>

						</div>
					



	</section>


</div>

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




$("#close").click(function(){
$("div#infohere").slideUp('slow');

});

$("#close").click(function(){

	$(this).fadeOut('slow');
	$("div#infohere").slideUp('slow');
	

});



});
function championinfo(name){
	$.post('championinfo.php', {name: name}, function(data){
		if ($('div#infohere').is(":hidden")){
			$("div#infohere").slideDown('slow');
			$('div#infohere').html(data);
			$("#close").fadeIn('slow');
		}else{
			$('div#infohere').html(data);
		}
	});
}


</script>
</body>

</html> 