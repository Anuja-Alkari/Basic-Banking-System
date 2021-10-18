
<?php 

$con=new mysqli("localhost","root","","banking_system");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>