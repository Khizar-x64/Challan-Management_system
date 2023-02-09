
<html>
<head>
  <style>
    input {
outline: 3px solid transparent;
  font-size: 16px;
  font-size: max(16px, 1em);
  font-family: inherit;
  padding: 0.25em 0.5em;
  background-color: #C4C3BF;
  border: 2px solid var(--input-border);
  border-radius: 4px;
}

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 40px;
    }
    h1 { color: #702587;
       font-family: 'Helvetica Neue', 
       sans-serif; font-size: 75px; 
       font-weight: bold; 
       letter-spacing: -1px;
        line-height: 1; 
        text-align: center; }


h2 { color: #265C0E;
   font-family: 'Open Sans', 
   sans-serif; font-size: 40px; 
   font-weight: 150; line-height: 32px; 
   margin: 0 0 72px; 
   text-align: center; }

   h3 { color: #3F3E7A;
   font-family: 'Helvetica Neue', 
   sans-serif; font-size: 15px; 
   font-weight: bold;
   text-align: left; }
th { color: #14205C; 
  font-family: 'Helvetica Neue', 
  sans-serif; font-size: 20px; 
  line-height: 24px;
   margin: 0 0 24px; 
   text-align: justify; 
   text-justify: inter-word; }
   td { color: #202224; 
  font-family: 'Helvetica Neue', 
  sans-serif; font-size: 15px; 
  line-height: 24px;
   margin: 0 0 24px; 
   text-align: justify; 
   text-justify: inter-word; }
    table, th {
      border: 1px solid;
      width: 70%;
      font-family: 'Open Sans';
      font-size: 15px;
      text-align: left;
} 
table {
	border-collapse: collapse;
    font-family: Tahoma, Geneva, sans-serif;
}
table td {
	padding: 15px;
}
table thead td {
	background-color: #54585d;
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
	border: 1px solid #54585d;
}
table tbody td {
	color: #636363;
	border: 1px solid #dddfe1;
}
table th {
	padding: 15px;
}
table thead th {
	background-color: #FFFFE3;
	color: #ffffff;
	font-weight: bold;
	font-size: 13px;
	border: 1px solid #54585d;
}
table tbody th {
	color: #636363;
	border: 1px solid #dddfe1;
}
table tbody tr {
	background-color: #f9fafb;
}
table tbody tr:nth-child(odd) {
	background-color: #ffffff;
}
  </style>

</head>
<form action="update_driver_address.php" method="post">
  <div class="form-group">
    <label for="cnic"><h3>CNIC:</h3></label>
    <input type="text" class="form-control" id="cnic" name="cnic" required>
  </div>
  <div class="form-group">
    <label for="new_address"><h3>New Address:</h3></label>
    <input type="text" class="form-control" id="new_address" name="new_address" required>
  </div>
  <button type="submit" class="btn btn-primary"><h3>Submit</h3></button>
</form>


<body>
  <div class="container">
    <h1>Update Driver Address </h1>
    <h2>Here is the result 🏡🐞🦂</h2>

    <table>
    <?php
     include'Connect.php';
     
     $cnic = $_POST['cnic'];
     $Adress=$_POST['Adress'];
     $sql = "CALL update_driver_address('$cnic','$Adress')";

$result = mysqli_query($con, $sql);
$cc="Address updated successfully";
$cp="Error updating address: ";
if ($result)
  {
    echo'
    <h1>'.$cc.'</h1>';
  }

else 
  {
    echo'
    <h1>'.$cp.'</h1>';
  }
?>
<table>
<th>Fname</th>&nbsp;&nbsp;
  <th>Lname</th>&nbsp;&nbsp;
  <th>CNIC</th>&nbsp;&nbsp;
  <th>Phone</th>&nbsp;&nbsp;
  <th>Adress</th>&nbsp;&nbsp;
  <th>DOB</th>&nbsp;&nbsp;&nbsp;
<?php
include'Connect.php';

$sql = "SELECT *FROM Driver";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0)
     {
       while ($row = mysqli_fetch_assoc($result)) 
        {
          
          $fn = $row['Fname'];
          $ln = $row['Lname'];
          $cnic = $row['CNIC'];
          $ph = $row['Phone'];
          $ad = $row['Adress'];
          $dob = $row['DOB'];

          echo'
          
          <tr>
          <br>
          <td>'.$fn.  '</td>&nbsp;&nbsp;
          <td>'.$ln.  '</td>&nbsp;&nbsp;
          <td>'.$cnic.  '</td>&nbsp;&nbsp;
          <td>'.$ph.  '</td>&nbsp;&nbsp;
          <td>'.$ad.  '</td>&nbsp;&nbsp&#160;
          <td>'.$dob.  '</td>&nbsp;&nbsp;&#160;&#160;
          <td>
          </br>      
          </tr>';
        }
        echo "</table>";
     }
   else 
     {
       echo "No Driver found";
     }
?>

</div>
    </table>
  </div>
</body>
</html>
