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
  

<form method="post" action="result.php"> 
  <fieldset>
  <legend>กรอกข้อมูลประจำตัว </legend>
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br>
  
  Sex:<br>
  <select name="sex">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
  <br>
  
  Age:<br>
  <input type="text" name="age" value="">
  <br>
  
  Address:<br>
    <textarea name="message" rows="10" cols="30">กรอกที่อยู่ปัจจุบัน</textarea>
  <br>
  
  <br>
  Size Shirt:<br>

		<input type="radio" name="ss" value="s" checked>S
		<input type="radio" name="ss1" value="m">M
		<input type="radio" name="ss2" value="l">L
		<input type="radio" name="ss3" value="xl">XL

	<br>
  
  Type For Run:<br>

		<input type="radio" name="typerun" value="male" checked>5 กิโลเมตร
		<input type="radio" name="typerun" value="female">10 กิโลเมตร
		<input type="radio" name="typerun" value="other">21 กิโลเมตร  

		
	<p>โปรดตรวจสอบข้อมูลก่อนยืนยัน</p>
	<input type="submit" name="submit" value="Submit">
	
</fieldset></form> 
 



<footer>
  <p>หากมีปัญหาติดต่อเจ้าหน้าที่</p>
</footer>

</body>
</html>
