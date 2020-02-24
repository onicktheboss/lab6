<



  <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Step2</title>
 </head>
 <body>
 	<form action="db.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
if(isset($_POST["submit"]))
{


$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["Gender"] = $_POST["Gender"];
$_SESSION["password"]=$_POST["password"];

echo "Session variables are set.<br>";


}


?>



 		
 		


</form>

 
 </body>
 </html>