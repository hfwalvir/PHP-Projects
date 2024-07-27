<?php
  $name=$_POST["txtName"];
  $fname=$_POST["txtFName"];
  $gender = $_POST["rdoGender"];
  $cnic = $_POST["txtCnic"]; 
  $religion =$_POST["txtReligion"];
  $country = $_POST["country"]; 

?>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="cssSTyle.css">
</head>
<body>
    <div class="header">
<h1> CV Creator Website</h1>
</div>

<div class = "nav">
    <ul class = "topnav">
         <li><a href="#" class="active">Home</a></li>
         <li><a href="#"> CV</a></li>
         <li><a href="#"> Portfolio</a></li>
         <li><a href="#"> Biodata</a></li>
         <li><a class="right"><a href="#" >About</a></li>
</ul>
</div>

<div class="bodyArea">
    <h2> Provide user info </h2>
    <form name="cvPersonalData" action="bioData2.php" method="POST">
    <table>
       <th>Biodata Information </th>
       <tr>
          <td> Email:<td> <input type="text" name="txtEmail" required>
          </td>
      </tr>
      <tr>
    <td>Contact: </td>
    <td> <input type="text" name="txtContact" required>
</td>
</tr>
<tr>
    <td>Address:</td>
    <td> <input type="text" name="txtAddress">
</tr>
<tr>
<td><input type="submit" name="submit">
</tr>
</table> 
<input type="hidden" name="txtName" value="<?php echo $name; ?>">
<input type="hidden" name="txtFName" value="<?php echo $fname; ?>">
<input type="hidden" name="txtGender" value="<?php echo $gender; ?>">
<input type="hidden" name="txtReligion" value="<?php echo $religion; ?>">
<input type="hidden" name="txtCnic" value="<?php echo $cnic; ?>">
<input type="hidden" name="txtCountry" value="<?php echo $country; ?>">

</form>

