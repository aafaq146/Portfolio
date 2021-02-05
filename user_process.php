<?php 
include('db_connect.php');
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$website=$_REQUEST['website'];
$message=$_REQUEST['message'];
// inserting data into table
$query=mysqli_query($con," INSERT INTO contact(name,email,phone,website,message) VALUES('$name','$email','$phone','$website','$message')") or die(mysqli_error($con));

mysqli_close($con);
$msg="You Send Message Successfully";
header("location:index.php?note=$msg");
echo "You successfully sumbit .";
 ?>