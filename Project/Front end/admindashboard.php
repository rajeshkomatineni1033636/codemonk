<?php

 
 session_start();

$email = $_SESSION['email'];


$ch = curl_init('127.0.0.1:8000/admin_board/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch,CURLOPT_POSTFIELDS, "email=$EMAIL&password=$PASSWORD");
$result = curl_exec($ch);

echo $result;

echo "<br>";

echo "<br>";
echo "<br>";

?>



<a href='index.php'><input type="button" class="btn" value="Back"/></a>


