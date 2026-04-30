<?php
$conn = mysqli_connect("localhost","root","","images");
if (!$conn){
    die ("connection failed");
}
echo ("kam hogya");
?>