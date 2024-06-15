<?php include 'config.php';?>
<html>
<head>
<title>Insert</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,h1{
  font-family: "Amatic SC", sans-serif
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
</head>
<body>
<div class="w3-container" style="background-color:#090c83">
 <h1 style="color:white" class="w3-header w3-center"><a href="index.php" style="text-decoration: none">Indian Institute of Technology, Dharwad</a></h1>
</div>

<ul>
  <li><a class="active w3-hover-blue" href="index.php">Home</a></li>
  <li><a onclick="document.getElementById('id01').style.display='block' " class="w3-hover-purple" style="width: auto;"><i class="fa fa-plus"></i>Add Vendor</a>
</li>
  
  <li><a href="#about" class=" w3-hover-red">About</a></li>
</ul>


<a href="comp.php">
    <button type="button" name="back" class="w3-button w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
</a>
<form action="" method="post"> 
<center>
<table style="margin-top:-250px">
<tr><td>Invoice Date:</td><td> <input type="date" name="invoicedate" required></td></tr><br>
<!--<tr><td>Vendor Name:</td><td><input type="text" name="vendorname" required></td></tr><br>
<tr><td>Vendor Address:</td><td><input type="text" name="vendoraddress" required></td></tr><br>
<tr><td>Vendor Contact:</td><td><input type="text" name="vendorcontact" required></td></tr><br>-->
<tr><td>Vendor Name:</td><!--<td><input type="text" name="vendorname" id="vendorname" required></td>-->
<td>
  <select name="dropdown" style="width: 240px;text-align: center;">
    <?php
      $sql = "SELECT `vendorname` FROM `vendor` ";
      $query=mysqli_query($db,$sql);
      while($vend=mysqli_fetch_array($query,MYSQLI_ASSOC)){
        echo "<option>".$vend['vendorname']."</option>";
      }
      ?>
  </select>
</td></tr>
<tr><td>Particulars:</td><td><input type="text" name="particulars" required></td></tr><br>
<tr><td>Make:</td><td><input type="text" name="make" required></td></tr><br>
<tr><td>Model:</td><td><input type="text" name="model" required></td></tr><br>
<tr><td>Configuration:</td><td><input type="text" name="configuration" required></td></tr><br>
<tr><td>Serial Number:</td><td><input type="text" name="serialnumber" required></td></tr><br>

<tr><td>Operating System:</td><td>
	<select name="operatingsystem">
      <option value="Windows" selected>Windows</option>
      <option value="Ubuntu">Ubuntu</option>
      <option value="Windows/Ubuntu">Windows/Ubuntu</option>
    </select></td></tr><br>
<tr><td>Installed:</td><td><input type="checkbox" name="ms" value="install"> MS Office <input type="checkbox" name="av" value="install"> Anti Virus <input type="checkbox" name="pdf" value="install"> PDF Reader <input type="checkbox" name="rar" value="install"> Win RAR <input type="checkbox" name="brsr" value="install"> Browser </td></tr>
<tr><td>Department:</td><td><input type="text" name="department" required></td></tr><br>
<tr><td>Location:</td><td><input type="text" name="location" required></td></tr><br>
<tr><td>Faculty/Staff:</td><td><input type="text" name="name" required></td></tr><br>
<tr><td>Remarks:</td><td><input type="text" name="remarks"></td></tr><br>
</table><br>
<button type="submit" class="w3-button w3-purple w3-hover-blue w3-round-xlarge" name="submit">Submit</button><input type="reset" class="w3-button w3-purple w3-hover-blue w3-round-xlarge">
</center>
</form>
</body>
</html>
<?php
  include 'config.php';
 if(isset($_POST['submit'])){
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $invoice=$_POST['invoicedate'];
  $vname=$_POST['dropdown'];
  #vaddress=$_POST['vendoraddress'];
  #$vcontact=$_POST['vendorcontact'];
  $particular=$_POST['particulars'];
  $make=$_POST['make'];
  $model=$_POST['model'];
  $config=$_POST['configuration'];
  $serialnum=$_POST['serialnumber'];
  $os=$_POST['operatingsystem'];
  if(isset($_POST['ms'])){
  	$ms=$_POST['ms'];
  }
  else{
  	$ms="";
  }
  if(isset($_POST['av'])){
  	$av=$_POST['av'];
  }
  else{
  	$av="";
  }
  if(isset($_POST['pdf'])){
  	$pdf=$_POST['pdf'];
  }
  else{
  	$pdf="";
  }
  if (isset($_POST['rar'])) {
  	$rar=$_POST['rar'];
  }
  else{
  	$rar="";
  }
  if(isset($_POST['brsr'])){
  	$brsr=$_POST['brsr'];
  }
  else{
  	$brsr="";
  }
  $vdr="SELECT `vendoraddress`, `vendorcontact` FROM `stock` WHERE `vendorname`='$vname' ";
  $as=mysqli_query($db,$vdr);
  $ass=mysqli_fetch_array($as,MYSQLI_ASSOC);
  $vaddress=$ass['vendoraddress'];
  $vcontact=$ass['vendorcontact'];
  
  $dep=$_POST['department'];
  $location=$_POST['location'];
  $facultystaff=$_POST['name'];
  $remark=$_POST['remarks'];

  $query="INSERT INTO `stock`(`invoicedate`,`vendorname`,`vendoraddress`,`vendorcontact`,`particulars`,`make`,`model`,`configuration`,`serialnumber`,`operatingsystem`,`msoffice`,`antivirus`,`pdfreader`,`winrar`,`browser`,`department`,`location`,`facultystaff`,`remarks`) VALUES ('$invoice','$vname','$vaddress','$vcontact','$particular','$make','$model','$config','$serialnum','$os','$ms','$av','$pdf','$rar','$brsr','$dep','$location','$facultystaff','$remark') ";

#  $sql = "INSERT INTO `stockprinter` (`serial`, `assetnumber`, `invoicedate`, `vendorname`, `vendoraddress`, `vendorcontact`, `particulars`, `make`, `model`, `configuration`, `serialnumber`, `department`, `location`, `name`, `remarks`) VALUES (NULL, \'asfag\', \'gsfj\', \'fsdhfj\', \'jgyfe\', \'ucvbjqw\', \'vdsjcuy\', \'fvyefqu\', \'vdsief\', \'vcsuif\', \'fsduif\', \'fsduf\', \'feyuif\', \'efwiuf\', \'fuewf\')";
  $rslt=mysqli_query($db,$query);	 	
}
echo "<h3 style=\"color:red\"><center>Your Entry is Saved...</center><h3>";
}
?>