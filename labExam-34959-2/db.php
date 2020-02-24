<?php 

session_start();




if (isset($_POST["submit"])) {
	$_SESSION["Email"]=$_POST["email"];

}

 ?>



<?php
$serverName="localhost";
$username="root";
$password="";
$databaseName="labexam";

function executeNonQuery($query)
{
	global $serverName,$username,$password,$databaseName;
	$result=false;
	$connection=mysqli_connect($serverName,$username,$password,$databaseName);
	if($connection)
		{
    		$result=mysqli_query($connection,$query);
		}
	return $result;
}


?>

<?php

$query="INSERT INTO userinfo(Name,Email,Gender,Password)VALUES('$_SESSION[name]','$_SESSION[email]','$_SESSION[gender]','$_SESSION[password]')";
 executeNonQuery($query);

print_r($_SESSION);
		echo "<img src=$target_file>";
		$dd="../../../../";

?>