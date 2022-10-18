<?php
$con = mysqli_connect("localhost","root","","clientms");
if($con -> connect_errno){
    die("connection failed:".$con -> connect_errno);
}
// echo "connection successful";
?>