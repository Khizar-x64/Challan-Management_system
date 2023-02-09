
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
<form action="IssueChallan.php" method="post">
  <div class="form-group">
    <label for="Challan_Ticket"><h3>Challan Ticket:</h3></label>
    <input type="text" class="form-control" id="Challan_Ticket" name="Challan_Ticket">
  </div>
  <div class="form-group">
    <label for="CNIC"><h3>CNIC:</h3></label>
    <input type="text" class="form-control" id="CNIC" name="CNIC">
  </div>
  <div class="form-group">
    <label for="Voilation_type"><h3>Voilation Type:</h3></label>
    <input type="text" class="form-control" id="Voilation_type" name="Voilation_type">
  </div>
  <div class="form-group">
    <label for="Fine_amount"><h3>Fine Amount:</h3></label>
    <input type="text" class="form-control" id="Fine_amount" name="Fine_amount">
  </div>
  <div class="form-group">
    <label for="Rule_Num"><h3>Rule Number:</h3></label>
    <input type="text" class="form-control" id="Rule_Num" name="Rule_Num">
  </div>
  <div class="form-group">
    <label for="Payment"><h3>Payment:</h3></label>
    <input type="text" class="form-control" id="Payment" name="Payment">
  </div>
  <div class="form-group">
    <label for="_Date"><h3>Date:</h3></label>
    <input type="date" class="form-control" id="_Date" name="_Date">
  </div>
  <div class="form-group">
    <label for="Location"><h3>Location:</h3></label>
    <input type="text" class="form-control" id="Location" name="Location">
  </div>
  <div class="form-group">
    <label for="issuedbyOfficerNo"><h3>Issued By Officer Number:</h3></label>
    <input type="text" class="form-control" id="issuedbyOfficerNo" name="issuedbyOfficerNo">
  </div>
  <button type="submit" class="btn btn-primary"><h3>Submit</h3></button>
</form>



<body>
  <div class="container">
    <h1>Challan Input </h1>
    <h2>Here is the result 👮‍♀️🚨🚔</h2>

    <table>
    <?php
     include'Connect.php';
     $Challan_Ticket = $_POST['Challan_Ticket'];
     $CNIC = $_POST['CNIC'];
     $Voilation_type = $_POST['Voilation_type'];
     $Fine_amount = $_POST['Fine_amount'];
     $Rule_Num = $_POST['Rule_Num'];
     $Payment = $_POST['Payment'];
     $Date = $_POST['_Date'];
     $Location = $_POST['Location'];
     $issuedbyOfficerNo = $_POST['issuedbyOfficerNo'];
 
     $sql = "CALL IssueChallan('$Challan_Ticket', '$CNIC', '$Voilation_type', $Fine_amount,
      $Rule_Num, '$Payment', '$Date', '$Location', '$issuedbyOfficerNo')";
 
     if (mysqli_query($con, $sql)) {
         echo "New record created successfully";
     } else {
         echo "Error: " ;
     }
 ?>
 </h1>';
  }
?>
<table>
      
      <th>Fname</th>&nbsp;&nbsp;
      <th>Lname</th>&nbsp;&nbsp;
      <th>Challan_Ticket</th>&nbsp;&nbsp;
      <th>Voilation_type</th>&nbsp;&nbsp;
      <th>Fine_amount</th>&nbsp;&nbsp;
      <th>Date   </th>&nbsp;&nbsp;&nbsp;
      <th>Location</th>&nbsp;&nbsp;&nbsp;
      <th>issuedbyOfficerNo</th>&nbsp;&nbsp;&nbsp;
      <?php
      include'Connect.php';
      $sql = "select * from challan";
      $result = mysqli_query($con,$sql);
      if($result){
          while ($row = mysqli_fetch_assoc($result)){
            
              $fn = $row['Fname'];
              $ln = $row['Lname'];
              $ct = $row['Challan_Ticket'];
              $vt = $row['Voilation_type'];
              $fa = $row['Fine_amount'];
              $date = $row['_Date'];
              $loca = $row['Location'];
              $io=$row['issuedbyOfficerNo'];
  
              echo'
              
              <tr>
              <br>
              <td>'.$fn.  '</td>&nbsp;&nbsp;
              <td>'.$ln.  '</td>&nbsp;&nbsp;
              <td>'.$ct.  '</td>&nbsp;&nbsp;
              <td>'.$vt.  '</td>&nbsp;&nbsp;
              <td>'.$fa.  '</td>&nbsp;&nbsp&#160;
              <td>'.$date.  '</td>&nbsp;&nbsp;&#160;&#160;
              <td>'.$loca.  '</td>&nbsp;&nbsp;
              <td>'.$io.  '</td>&nbsp;&nbsp;
              <td>
              </br>      
              </tr>';
          }
      }    
    ?>
      </table>
  </div>
</body>
</html>
