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
  <h2>Basic Table</h2>
  <p>ตารางแสดงผล</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>age</th>
        <th>Email</th>
		<th>address</th>
      </tr>
    </thead>
	<?php
		include("content/mysqlcontent.php");
		$sql = "SELECT * FROM userprofilenine";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {		
		while($row = mysqli_fetch_assoc($result))
		{
	?>
    <tbody>
      <tr>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["age"];?></td>
        <td><?php echo $row["email"];?></td>
		<td><?php echo $row["address"];?></td>
      </tr>
    </tbody>
	<?php
	}
	}
	?>
  </table>
</div>

</body>
</html>
