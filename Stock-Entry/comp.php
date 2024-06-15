<html>
<title>Computer</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mar{
  margin-top: 10%;
}
body{
  background: url("images/2.jpg");
  background-size: cover;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.button-container form,
.button-container form div{
  display: inline;
}
.button-container button{
  display: inline;
  vertical-align: middle
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
<body>
	<ul>
  <li><a class="active w3-hover-blue" href="index.php">Home</a></li>
  <li><a onclick="document.getElementById('id01').style.display='block' " class="w3-hover-purple" style="width: auto;">Add Vendor</a>
</li>
   <li><a href="#about" class=" w3-hover-red">About</a></li>
</ul>

<!--<div class="w3-sidebar w3-bar-block w3-black"><h1>Stock Entry</h1></div>-->
<div class="w3-container">
<h1 style="color:white" class="w3-header w3-center">Indian Institute of Technology, Dharwad</h1>
<!--<h1 class="w3-header w3-center"><a href="www.iitdh.ac.in" style="text-decoration:none">IIT Dharwad</a></h1>-->
</div>


<a href="index.php">
    <button type="button" name="back" class="w3-button w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
</a>
<center>
<div id="change" class="mar">
<div class="button-container">
  <form method="post" action="viewcomp.php">
<div>
    <button type="submit" class="w3-button w3-hover-purple w3-black w3-round-xxlarge" id="comp">View</button>
</div>
</form>
<form method="post" action="entercomp.php">
<div>
    <button type="submit" class="w3-button w3-hover-blue w3-black w3-round-xxlarge" id="printer">Enter Value</button>
  </div>
  </form>
</div>
</div>
</center>
</body>
</html>
