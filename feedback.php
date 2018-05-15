<?php
include 'conn.php';

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{
	$query="insert into feedback
	values('$name','$email','$subject','$message');";
	$result=mysqli_query($conn,$query);
	if(!$result)
	{
		die("Feedback not received due to technical problems");
	}

}
header('Location:index.php');

?>