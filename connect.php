<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
$conn = new mysqli('localhost','root','','test');
$sql="INSERT INTO registration(firstname,lastname,email,password) VALUES('$firstName','$lastName','$email','$password')";
$ss=mysqli_query($conn,$sql);
if($ss){
	echo "Form submited";
}
else{
	echo "Form not submited";
}
mysqli_close($conn);
?>