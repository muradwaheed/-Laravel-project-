
<?php

$con = mysqli_connect("localhost", "root", "", "leagueofdraven");
$result = mysqli_query($con, "SELECT * FROM la ORDER BY date DESC");
 
?>



 <div class="la">
	<div class="lahead"><h2>Latest Articles</h2></div>
	<div class="labody">
		<?php
while($row = mysqli_fetch_assoc($result)){
$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$date = $row['date']; 
?>

		<div class="lapost">

<div class="laposthead"><?php echo $title;?> </div>
		<div class="lapostbody">
			<?php echo $description;?><br><br>
			<?php echo $date;?>
</div>
</div>

<?php } ?>
   </div>


</div>