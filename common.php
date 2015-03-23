<?php
include 'top.html';

    $valid = false;
    $error = "Error!";
    $first = $_GET["firstname"];
    $last =  $_GET["lastname"];
    $kevin =  "Kevin";
    $bacon =  "Bacon";

     if($first!= ""){
			$valid = true;
	 }
	 else{
			$valid = false;
				echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
	 }
	 if($last!= ""){
			$valid = true;
	 }
	 else{
			$valid = false;
				echo "<strong>Error! Invalid data.</strong> <br> <br>We're sorry. You submitted invalid user information. Please go back and try again.<br> <br>";
	 }
	 ?>
	
	 <h1> Results for <?php echo $first?> <?php echo $last?> </h1>
	 

	 
