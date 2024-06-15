<?php
include 'config.php';
?>
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



<a href="print.php">
  <button type="button" name="back" class="w3-button w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
</a>
<form action="" method="post"> 
<center>
<table style="margin-top:-250px">
<tr><td>Assest Number:</td><td><input type="text" name="assetnumber" required></td></tr><br>
<tr><td>Invoice Date:</td><td> <input type="date" name="invoicedate" required></td></tr><br>
<tr><td>Vendor Name:</td><!--<td><input type="text" name="vendorname" id="vendorname" required></td>-->
<td>

<select name="dropdown" style="width: 240px;text-align: center;">
  <?php
  $sql = "SELECT `vendorname` FROM `vendor`";
  $query=mysqli_query($db,$sql);
 while($ven=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    echo "<option>".$ven['vendorname']."</option>";
  }
?>
<!--
    <option value="">None</option>
    <option value="text1">text1</option>
    <option value="text2">text2</option>
    <option value="text3">text3</option>
    <option value="text4">text4</option>-->
</select>
</td></tr>
<tr><td>Particulars:</td><td><input type="text" name="particulars" required></td></tr><br>
<tr><td>Make:</td><td><input type="text" name="make" required></td></tr><br>
<tr><td>Model:</td><td><input type="text" name="model" required></td></tr><br>
<tr><td>Configuration:</td><td><input type="text" name="configuration" required></td></tr><br>
<tr><td>Serial Number:</td><td><input type="text" name="serialnumber" required></td></tr><br>
<tr><td>Department:</td><td><input type="text" name="department" required></td></tr><br>
<tr><td>Location:</td><td><input type="text" name="location" required></td></tr><br>
<tr><td>Name:</td><td><input type="text" name="name" required></td></tr><br>
<tr><td>Remarks:</td><td><input type="text" name="remarks"></td></tr><br>
</table><br>
<button type="submit" class="w3-button w3-purple w3-hover-blue w3-round-xlarge" name="submit">Submit</button>
</center>
</form>
</body>
<!--
<script type="text/javascript">
    var mytextbox = document.getElementById('vendorname');
    var mydropdown = document.getElementById('dropdown');

    mydropdown.onchange = function(){
          mytextbox.value = mytextbox.value  + this.value; //to appened
         //mytextbox.innerHTML = this.value;
    }
</script>-->
</html>
<?php
 if(isset($_POST['submit'])){
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $asset=$_POST['assetnumber'];
  $invoice=$_POST['invoicedate'];
  $vname=$_POST['dropdown'];
  echo "$vname";
#  $vaddress=$_POST['vendoraddress'];
#  $vcontact=$_POST['vendorcontact'];
  $particular=$_POST['particulars'];
  $make=$_POST['make'];
  $model=$_POST['model'];
  $config=$_POST['configuration'];
  $serialnum=$_POST['serialnumber'];
  $dep=$_POST['department'];
  $location=$_POST['location'];
  $name=$_POST['name'];
  $remark=$_POST['remarks'];
  $vdr="SELECT `vendoraddress`, `vendorcontact` FROM `stockprinter` WHERE `vendorname`='$vname' ";
  $as=mysqli_query($db,$vdr);
  $ass=mysqli_fetch_array($as,MYSQLI_ASSOC);
  $vaddress=$ass['vendoraddress'];
  $vcontact=$ass['vendorcontact'];
  #echo "yes";
  #echo $vname, $vaddress, $vendorcontact;
  #echo "no";

  $query="INSERT INTO `stockprinter`(`assetnumber`,`invoicedate`,`vendorname`,`vendoraddress`,`vendorcontact`,`particulars`,`make`,`model`,`configuration`,`serialnumber`,`department`,`location`,`name`,`remarks`) VALUES ('$asset','$invoice','$vname','$vaddress','$vcontact','$particular','$make','$model','$config','$serialnum','$dep','$location','$name','$remark')";

  #  $sql = "INSERT INTO `stockprinter` (`serial`, `assetnumber`, `invoicedate`, `vendorname`, `vendoraddress`, `vendorcontact`, `particulars`, `make`, `model`, `configuration`, `serialnumber`, `department`, `location`, `name`, `remarks`) VALUES (NULL, \'asfag\', \'gsfj\', \'fsdhfj\', \'jgyfe\', \'ucvbjqw\', \'vdsjcuy\', \'fvyefqu\', \'vdsief\', \'vcsuif\', \'fsduif\', \'fsduf\', \'feyuif\', \'efwiuf\', \'fuewf\')";
  $rslt=mysqli_query($db,$query);   
}
echo "<h3 style=\"color:red\"><center>Your Entry is Saved...</center><h3>";
}
?>