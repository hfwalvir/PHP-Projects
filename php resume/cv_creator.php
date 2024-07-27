
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
    <form name="cvPersonalData" action="bioData.php" method="POST">
    <table>
       <th>Personal Information </th>
       <tr>
          <td> Name:<td> <input type="text" name="txtName" required>
          </td>
      </tr>
      <tr>
    <td>Father's Name: </td>
    <td> <input type="text" name="txtFName" required>
</td>
</tr>
<tr>
    <td> Gender: </td>
<td> <input type="radio" name=rdoGender value="Male" required> Male 
<input type="radio" name=rdoGender value="Female" required> Female 
</td>
</tr>
<tr>
    <td>CNIC:</td>
    <td> <input type="text" name="txtCnic">
</td>
</tr>
<tr>
    <td>Religion: </td>
    <td><input type="text" name="txtReligion">
</tr>
<tr>
    <td>Country: </td> 
    <td> <select name="country">
     <option>Pakistan</option>
     <option>Malaysia</option>
     <option>India</option>
     <option>China</option>
</select>
</tr>
<tr>
    <td>
</td>
</tr>
</table>
<input type="submit" name="submit">
</form>
</div>


