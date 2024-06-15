<?php
  include('config.php');
   ?>
   <?php
   $query= mysqli_query($db,"select serial,invoicedate,vendorname,vendoraddress,vendorcontact,particulars,make,model,configuration,serialnumber,operatingsystem,msoffice,antivirus,pdfreader,winrar,browser,department,location,facultystaff,remarks from stock");
   #$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
  ?>
  <html>
  <title>View</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
  table{
    margin-left:10%;
    margin-right: 20%;
    border-collapse: collapse;
    width:60%;
  }
  th{
  background-color: #39F1DC;
  }
  table,th,td{
    border:1px solid black;
    padding:3px;
  }
  td,td{
    text-align: center;
    padding: 8px;
    border: 1px solid black;
  }
  /*tr:nth-child(even){
    background-color: #f2f2f2
  }*/
  </style>
  <body>
    <div class="w3-container" style="background-color:#090c83">
    <h1 style="color:white" class="w3-header w3-center"><a href="index.php" style="text-decoration: none">Indian Institute of Technology, Dharwad</a></h1>
    <!--<h1 class="w3-header w3-center"><a href="www.iitdh.ac.in" style="text-decoration:none">IIT Dharwad</a></h1>-->
    </div>
    <a href="comp.php">
    <button type="button" name="back" class="w3-button w3-hover-blue"><i class="fa fa-arrow-left"></i>Back</button><!-- Back Button-->
</a>
<center>
  <form action="" method="post" style="margin-top:5%">
    <input type="text" placeholder="Enter a String" name="searchword">
    <select name="searchtype">
      <option value="serial">Serial</option>
      <option value="invoicedate">Invoice Date</option>
      <option value="vendorname">Vendor Name</option>
      <option value="vendoraddress">Vendor Address</option>
      <option value="vendorcontact">Vendor Contact</option>
      <option value="particulars">Particulars</option>
      <option value="make">Make</option>
      <option value="model">Model</option>
      <option value="configuration">Configuration</option>
      <option value="serialnumber">Serial Number</option>
      <option value="operatingsystem">Operating System</option>
      <option value="msoffice">MS Office</option>
      <option value="antivirus">Anti Virus</option>
      <option value="pdfreader">PDF Reader</option>
      <option value="winrar">Win Rar</option>
      <option value="browser">Browsers</option>
      <option value="department">Department</option>
      <option value="location">Location</option>
      <option value="facultystaff">Faculty/Staff</option>
      <option value="remarks">Remarks</option>
    </select>
    <input type="submit" name="" value="Search">
  </form>
</center>
  <div class="w3-responsive">
    <table>
      <tr>
        <th rowspan="2">Serial</th><th rowspan="2">Invoice Date</th><th colspan="3">Vendor Details</th><th rowspan="2">Particulars</th><th rowspan="2">Make</th><th rowspan="2">Model</th><th rowspan="2">Configuration</th><th rowspan="2">Serial Number</th><th rowspan="2">Operating System</th><th colspan="5">Basic Softwares Installed</th><th colspan="3">Used By</th><th rowspan="2">Remarks</th>
      </tr>
  <tr>
    <th>Name</th><th>Address</th><th>Contact Number</th><th>MS Office</th><th>AntiVirus</th><th>PDF Reader</th><th>WinRAR</th><th>Browser</th><th>Department</th><th>Location</th><th>Faculty/Staff</th>
  </tr>
  
  <?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $opvalue=$_POST['searchtype'];
  $searchsearch=$_POST['searchword'];
   #echo "$opvalue";
  $search=mysqli_query($db,"select serial,invoicedate,vendorname,vendoraddress,vendorcontact,particulars,make,model,configuration,serialnumber,operatingsystem,msoffice,antivirus,pdfreader,winrar,browser,department,location,facultystaff,remarks from stock where $opvalue='$searchsearch' ");
if(empty($searchsearch)){
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    echo "<tr><td>".$row['serial']."</td><td>".$row['invoicedate']."</td><td>".$row['vendorname']."</td><td>".$row['vendoraddress']."</td><td>".$row['vendorcontact']."</td><td>".$row['particulars']."</td><td>".$row['make']."</td><td>".$row['model']."</td><td>".$row['configuration']."</td><td>".$row['serialnumber']."</td><td>".$row['operatingsystem']."</td><td>".$row['msoffice']."</td><td>".$row['antivirus']."</td><td>".$row['pdfreader']."</td><td>".$row['winrar']."</td><td>".$row['browser']."</td><td>".$row['department']."</td><td>".$row['location']."</td><td>".$row['facultystaff']."</td><td>".$row['remarks']."</td></tr>";
  }
}
else{ 
  while($row=mysqli_fetch_array($search,MYSQLI_ASSOC)){
    echo "<tr><td>".$row['serial']."</td><td>".$row['invoicedate']."</td><td>".$row['vendorname']."</td><td>".$row['vendoraddress']."</td><td>".$row['vendorcontact']."</td><td>".$row['particulars']."</td><td>".$row['make']."</td><td>".$row['model']."</td><td>".$row['configuration']."</td><td>".$row['serialnumber']."</td><td>".$row['operatingsystem']."</td><td>".$row['msoffice']."</td><td>".$row['antivirus']."</td><td>".$row['pdfreader']."</td><td>".$row['winrar']."</td><td>".$row['browser']."</td><td>".$row['department']."</td><td>".$row['location']."</td><td>".$row['facultystaff']."</td><td>".$row['remarks']."</td></tr>";
  }  
 }
}
  ?>
 
  </table>
  </div>
</body>
</html>