<?php
$conn = new mysqli("localhost","root","","social_media_project");

if($conn->connect_error){
 die("DB Connection Failed");
}
?>