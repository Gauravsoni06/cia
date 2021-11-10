<?php
$con=new mysqli('localhost','root','','stuinfo');

if(!$con){
    die(mysqli_error($con));
}
?>