<!DOCTYPE html>
<html>
<body>

<style>
	header {
    background-color: #987;
    padding: 10px;
    text-align: center;
    font-size: 10px;
    color: white;
	}
	
	footer {
    background-color: #987;
    padding: 5px;
    text-align: center;
    color: white;
}

</style>

<header><h2>ใบสมัครการแข่งขันวิ่งมาราธอน</h2></header>
  <br>
  
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  //$name = trim($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $age;
echo "<br>";
echo $address;
echo "<br>";
echo $gender;
?>


<footer>
  <p>หากมีปัญหาติดต่อเจ้าหน้าที่</p>
</footer>


</fieldset>

</body>
</html>