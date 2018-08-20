<?php
 
 session_start();

$email = $_SESSION['email'];

$name = $_GET['name'];

//print_r($_GET);


$ch = curl_init('127.0.0.1:8000/vote/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS, "email=$email&voter_name=$name");
$result = curl_exec($ch);



// echo $result;

	header("Location:index.php?$result");	

// if($result == 'VotedSuccessfully'){
// 	header("Location:index.php?$result");	
// }else{
// 	header("Location:index.php?$result");	
// }


?>