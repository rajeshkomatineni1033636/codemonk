<?php
session_start();
//print_r($_REQUEST);
echo $EMAIL=$_POST['email'];
echo $PASSWORD=$_POST['password'];
 

$_SESSION['email'] = $EMAIL;

$ch = curl_init('127.0.0.1:8000/admin_login/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS, "email=$EMAIL&password=$PASSWORD");
$result = curl_exec($ch);	


// also get the error and response code
$errors = curl_error($ch);
$response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// echo $result; exit;

curl_close($ch);
if($EMAIL !=''&& $PASSWORD !='')
{
// echo $result;exit;
if($result == 'loginSuccess'){
	header("Location:admindashboard.php");
}else{
header("Location:index.php?$result");	
}
 
// echo '<form name="sign" action="index.php" >';
// echo '<button type="submit" >Go Back</button>';
// echo '</form>';
 
}
else
{
echo "Please fill all fields.....!!!!!!!!!!!!";
}
?>