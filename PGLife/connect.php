<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="signup";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{
  $full_name = $_POST['full_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $college_name = $_POST['college_name'];
  $gender = $_POST['gender'];

	 $sql_query = "INSERT INTO registration (full_name,phone,email,password,college_name,gender)
	 VALUES ('$full_name',$phone,'$email','$password','$college_name','gender')";

	 if (mysqli_query($conn, $sql_query))
	 {
		echo "Signup successful!";
	 }
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
