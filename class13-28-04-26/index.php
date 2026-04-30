<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
<h2>Student FORM</h2>
    
<form action="" method="POST">
    
   Name:<input type="text" name="sName"><br><br>
   Email:<input type="text" name="email"><br><br>
   Password:<input type="text" name="password"><br><br>
   <input type="submit" value="create" name="submit">
</form>
<?php
 include "db.php";
if(isset($_POST['submit'])){
$sName = $_POST['sName'];
$email = $_POST['email'];
$password = $_POST['password'];

//echo ("db Success!");

$query = "INSERT INTO student(name,email,password) VALUES ('$sName','$email','$password')";
if(mysqli_query($conn,$query)){
    echo("data insert successfully!");
}
else{
    
        echo("error");
}
}
?>
</body>
</html>