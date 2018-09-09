<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container class.</p> 
  <p>The .container class provides a responsive fixed width container.</p>           
</div>


<?php

include("content/mysqlcontent.php");

$sql = "SELECT * FROM userprofilenine";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
		
	while($row = mysqli_fetch_assoc($result))
	{
		echo "userid: " .
		$row["userid"]. "- Name: " . 
		$row["name"]."<br>".
		$row["email"]."<br>" . 
		$row["age"]."<br>" . 
		$row["address"]."<br>".
		$row["gender"]."<br>".
		$row["congentital"]."<br>".
		$row["foodlose"]."<br>"
		;
		<tr>
		<td><?php>
	}
}
	else {
		echo "0 result";
	}
	?>
	
	</body>
</html>