 <?php
//print_r($_REQUEST);
 
 session_start();

$email = $_SESSION['email'];


$ch = curl_init('127.0.0.1:8000/voters_list/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch,CURLOPT_POSTFIELDS, "email=$EMAIL&password=$PASSWORD");
$result = curl_exec($ch);

// echo $result;

$res = explode(',', $result);

$count = count($res);
// echo $count;
// print_r($res);
?>


<table style="width:100%;">
  <!--<tr>
    <th>Firstname</th>
    <th>Button</th>
  </tr>-->

	<?php 
		for ($i =0; $i <= $count-2; $i++){
		// foreach ($res as $key => $value) {
			  echo "<tr>";
			    //echo "<td style='border:2px;'>Jill</td>";
			    echo "<td style='border:2px;'>$res[$i]</td>";
			    echo "<td><a href='votesave.php?name=$res[$i]'><input type=\"button\" class=\"btn\" value=\"Vote \"/></a></td>";
			  echo "</tr>";
		}
	?>


</table>