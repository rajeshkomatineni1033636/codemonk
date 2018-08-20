<?php
//print_r($_REQUEST);
$FIRST_NAME=$_POST['firstname'];
$LAST_NAME=$_POST['lastname'];
$EMAIL=$_POST['email'];
$PASSWORD=$_POST['password'];
//echo $FIRST_NAME;
//CURLhttp://127.0.0.1:8000/signup/?first_name=$FIRST_NAME&last_name=$LAST_NAME&email=$EMAIL&password=$PASSWORD


$ch = curl_init('127.0.0.1:8000/signup/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_POSTFIELDS, "first_name=$FIRST_NAME&last_name=$LAST_NAME&email=$EMAIL&password=$PASSWORD");
$result = curl_exec($ch);


// also get the error and response code
$errors = curl_error($ch);
$response = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);
//print_r("SIGNUP SUCCESS")
//header( "Location: http://www.domain.com/user.php" ); /* Redirect browser */
if($FIRST_NAME !=''&& $LAST_NAME !=''&& $EMAIL !=''&& $PASSWORD !='')
{
//  To redirect form on a particular page
	echo $result;
	echo '<form name="sign" action="index.php" >';
echo '<button type="submit" >Go Back</button>';
echo '</form>';
//header("Location:index.html");
}
else{
	echo "Please fill all fields.....!!!!!!!!!!!!";
}

//var_dump($errors);
//var_dump($response);





?>