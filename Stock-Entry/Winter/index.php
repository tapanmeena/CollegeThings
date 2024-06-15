<?php
include "config.php";
 ?>

<html>
<title>Stock Entry</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
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
</style>
<body style="background-color:d3d3d3">
<!--<div class="w3-sidebar w3-bar-block w3-black"><h1>Stock Entry</h1></div>-->
<div class="w3-container" style="background-color:#090c83">
<h1 style="color:white" class="w3-header w3-center">Indian Institute of Technology, Dharwad</h1>
<!--<h1 class="w3-header w3-center"><a href="www.iitdh.ac.in" style="text-decoration:none">IIT Dharwad</a></h1>-->
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
