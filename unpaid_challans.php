
<html>
<head>
  <style>
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
<body>
  <div class="container">
    <h1>Unpaid Challans</h1>
    <h2>Here is the result 😎</h2>
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
    $sql = "select * from unpaid_challans";
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
