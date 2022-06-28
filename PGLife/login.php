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

if(isset($_POST['apply']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];

	 $sql_query = "INSERT INTO login (email,password)
	 VALUES ('$email','$password')";

	 $query = "SELECT * FROM registration WHERE email='$email' && password='$password'";
   $data=mysqli_query($conn,$query);
   $total=mysqli_num_rows($data);
	 if($total == 1){
     echo "You were logged in";
   }else{
     echo "<font color='red'>Login Failed.</font> Create an account first.";
   }

	 if (mysqli_query($conn, $sql_query))
	 {
		echo "";
	 }
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<!--
<?php
// if(isset($_POST['apply']))
// {
//   $email=$_POST['email'];
//   $password=$_POST['password'];
//
//   $query = "SELECT * FROM registration WHERE email='$email' && password='$password'";
//   $data=mysqli_query($conn,$query);
//   $total=mysqli_num_rows($data);
//
//   if($total == 1){
//     echo "login OK";
//   }else{
//     echo "Login Failed";
//   }
// }
 ?> -->
