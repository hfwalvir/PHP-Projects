<?php
//Data from cv_creator.php
  $name=$_POST["txtName"];
  $fname=$_POST["txtFName"];
  $gender = $_POST["txtGender"];
  $cnic = $_POST["txtCnic"]; 
  $religion =$_POST["txtReligion"];
  $country = $_POST["txtCountry"]; 
  //Data from bioData.php
  $email =$_POST['txtEmail'];
  $contact =$_POST['txtContact'];
  $add =$_POST['txtAddress'];

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
    <form name="cvPersonalData" action="finalCv.php" method="POST">
    <table>
       <th>Professional Information </th>
       <tr>
          <td> School <td> <input type="text" name="txtSchool" required>
          </td>
          <td> <input type="date" name="dataSchool">
</td>
      </tr>
      <tr>
          <td> College <td> <input type="text" name="txtCollege" required>
          </td>
          <td> <input type="date" name="dataCollege">
</td>
      </tr>
      <tr>
          <td> University <td> <input type="text" name="txtUniversity" required>
          </td>
          <td> <input type="date" name="dataUniv">
</td>
      </tr>
<td><input type="submit" name="submit">
</tr>
</table>
<input type="hidden" name="txtName" value="<?php echo $name; ?>">
<input type="hidden" name="txtFName" value="<?php echo $fname; ?>">
<input type="hidden" name="txtGender" value="<?php echo $gender; ?>">
<input type="hidden" name="txtReligion" value="<?php echo $religion; ?>">
<input type="hidden" name="txtCnic" value="<?php echo $cnic; ?>">
<input type="hidden" name="txtCountry" value="<?php echo $country; ?>">
//from biodata.php
<input type="hidden" name="txtEmail" value="<?php echo $email; ?>">
<input type="hidden" name="txtContact" value="<?php echo $contact; ?>">
<input type="hidden" name="txtAddress" value="<?php echo $add; ?>">

</form>
</div

