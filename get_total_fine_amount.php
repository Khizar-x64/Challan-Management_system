
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
<form action="get_total_fine_amount.php" method="post">
    <label for="cnic"><h3>Enter CNIC:</h3></label>
    <input type="text" name="cnic" id="cnic">
   <!--  <input type="submit" value="Submit"> -->
</form>

<body>
  <div class="container">
    <h1>Total FIne </h1>
    <h2>Here is the result 📱</h2>

    <table>
    <?php
     include'Connect.php';
     
     $cnic = $_POST['cnic'];
     $sql = "CALL get_total_fine_amount('$cnic')";

$result = mysqli_query($con, $sql);
$cp="NO Fine Found";
if (mysqli_num_rows($result) > 0)
{
  $cc;
  
  while ($row = mysqli_fetch_assoc($result)) {
    $cc=$row['total_fine'];
    
  }
  echo'
  <h1>'.$cc.'</h1>';
}

else 
{
    echo'
    <h1>'.$cp.'</h1>';
}
?>

    </table>
  </div>
</body>
</html>
