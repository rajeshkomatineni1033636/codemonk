<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body, html {
    height: 100%;
    margin: 1;
}

.bg {
    /* The image used */
    background-image: url("alan.jpg");

    /* Full height */
    height: 100%; 
     min-height: 100%;
  min-width: 1024px;
    
  /* Set up proportionate scaling */
  width: 100%;
  height: auto;
    
  /* Set up positioning */
  position: fixed;
  top: 0;
  left: 0;


    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 15px 95px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
    border-radius: 30%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
 #limit {
        max-width: 500px;
    }
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
 
</style>
</head>
<body>
<div class="bg">
<h2 style="color:white;text-align: center;">ONLINE VOTING SYSTEM</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SignUp</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="registration_form.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="minion.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="firstname" required>
       <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lastname" required>
 <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">SignUp</button>
       
    </div>

   
  </form>
</div>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;float: center;margin-left: 320px;">Admin Login</button>


<div id="id03" class="modal2" style="display: none;">

  <form class="modal-content animate" action="adminlogin_form.php" method="POST">



    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="minion.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      
     <label for="email"><b>Admin Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Admin Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Admin Login</button>
       
    </div>

   
  </form>
</div>


<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;float: right;">Login</button>

    <?php
        $url = $_SERVER['REQUEST_URI'];
        $var = explode('?' , $url);
        
        if(isset($var[1])){
    ?>

    <div class="container">
  
      <div class="alert alert-success" style="
    color: red;
    font-size: 40px;
    width: 100%;
    font-weight: bold;
    height: 50%;
    text-align: center;
    /* background-color: #0000ff52; */
">
      <?php echo $message = urldecode($var[1]); ?>
      </div>
    </div>

    <?php        
        }
        
    ?>

<div id="id02" class="modal1" style="display: none;">

  <form class="modal-content animate" action="login_form.php" method="POST">



    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="minion.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      
     <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
       
    </div>

   
  </form>
</div>

</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>

</body>
</html>
