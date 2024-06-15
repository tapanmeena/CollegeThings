<?php
include "config.php";
 ?>
<html>
<title>Stock Entry</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
  background: url("images/2.jpg");
  background-size: cover;
}
.mar{
  margin-top: 20%;
}
.button-container form,
.button-container form div{
  display: inline;
}
.button-container button{
  display: inline;
  vertical-align: middle
}
/* Full-width input fields */
input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
    width: 40%;
    border-radius: 50%;
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
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
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
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color:#f9fafc;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #0080ff;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
<body>
  <div class="navbar">
  <a href="#home" class="w3-hover-blue">Home</a>
  <div class="dropdown">
    <button class="dropbtn w3-hover-pink">Vendor 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a onclick="document.getElementById('id01').style.display='block' " class="w3-hover-purple" style="width: auto;"><i class="fa fa-plus"></i>Add Vendor</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href="#about" class="w3-hover-purple">About</a>  
</div>

<!--<div class="w3-sidebar w3-bar-block w3-black"><h1>Stock Entry</h1></div>--><!--
<ul>
  <li><a class="active w3-hover-blue" href="index.php">Home</a></li>
  <li>
</li>
<li> <div class="w3-dropdown-hover">
    Hover Over Me!
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div></li>  
  <li><a href="#about" class=" w3-hover-red">About</a></li>
</ul>
-->
<div class="w3-container">
<h1 style="color:white" class="w3-header w3-center">Indian Institute of Technology, Dharwad</h1>
<!--<h1 class="w3-header w3-center"><a href="www.iitdh.ac.in" style="text-decoration:none">IIT Dharwad</a></h1>-->
</div>



<div id="id01" class="modal">  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <h2 style="color: blue;text-align:center;">Vendor Details</h2>
    <div class="container">
      <label><b>Name:</b></label><br>
      <input type="text" placeholder="Enter Name" name="vname" required><br>
      <label><b>Contact Number:</b></label><br>
      <input type="text" placeholder="Enter Number" name="vcontact" required><br>
      <label><b>Address:</b></label><br>
      <input type="text" placeholder="Enter Address" name="vaddress" required><br>
      <button name="subt" class="w3-button w3-round-xxlarge w3-blue w3-hover-purple">Submit</button>
  </form>
</div>
</div>
<center>

<div id="change" class="mar">
<div class="button-container">
  <form method="post" action="comp.php">
<div>
  <button type="submit" class="w3-button w3-hover-purple w3-black w3-round-xxlarge" id="comp">Computer</button>
</div>
</form>
<form method="post" action="print.php">
<div>
  <button type="submit" class="w3-button w3-hover-blue w3-black w3-round-xxlarge" id="printer">Printer/UPS</button>
</div>
</form>
</div>
</div>
</center>
</body>
<script type="text/javascript">
function f(){
  var x=getElementById('change');
}
</script>
</html>
<?php
if(isset($_POST['subt'])){
  $vnames=$_POST['vname'];
  $vcontacts=$_POST['vcontact'];
  $vaddresss=$_POST['vaddress'];
  $s = "INSERT INTO `vendor` (`vendorname`, `vendorcontact`, `vendoraddress`) VALUES ('$vnames','$vcontacts','$vaddresss') ";
  $rs=mysqli_query($db,$s);
}
?>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
