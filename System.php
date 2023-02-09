
<html>
<head>
  <style>

 button {
  color: #fff;
  padding: 15px 25px;
  border-radius: 100px;
  background-color: #4C43CD;
  background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%,
   transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%,
    rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
  font-weight: bold;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;

  cursor: pointer;
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
    <h1>WElcome  to Challan Management System</h1>
    <h2>Here are some options 😎</h2>
  </div>


      
    <form action="update_driver_address.php" method="post">
    <button type="update_driver_address" class="btn btn-primary"><h3>update_driver_address</h3></button>
    </form>


    <form action="vehicle_owners.php" method="post">
    <button type="vehicle_owners" class="btn btn-primary"><h3>vehicle_owners</h3></button>
    </form>


    <form action="unpaid_challans.php" method="post">
    <button type="unpaid_challans" class="btn btn-primary"><h3>unpaid_challans</h3></button>
    </form>


    <form action="unpaid_challans_count.php" method="post">
    <button type="unpaid_challans_count" class="btn btn-primary"><h3>unpaid_challans_count</h3></button>
    </form>


    <form action="OutstandingFines.php" method="post">
    <button type="OutstandingFines" class="btn btn-primary"><h3>OutstandingFines</h3></button>
    </form>


    <form action="IssueChallan.php" method="post">
    <button type="IssueChallan" class="btn btn-primary"><h3>IssueChallan</h3></button>
    </form>


    <form action="check_Paid_challans.php" method="post">
    <button type="check_Paid_challans" class="btn btn-primary"><h3>check_Paid_challans</h3></button>
    </form>


    <form action="get_challan_count_by_type.php" method="post">
    <button type="get_challan_count_by_type" class="btn btn-primary"><h3>get_challan_count_by_type</h3></button>
    </form>


    <form action="get_total_fine_amount.php" method="post">
    <button type="get_total_fine_amount" class="btn btn-primary"><h3>get_total_fine_amount</h3></button>
    </form>


    <form action="IssueChallan.php" method="post">
    <button type="IssueChallan" class="btn btn-primary"><h3>IssueChallan</h3></button>
    </form>

</body>
</html>
