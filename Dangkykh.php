<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
			<div class="nava">
			<ul>
				<li><a href="https://designweb.herokuapp.com/ATN.php">Home</a></li>
				<li><a href="">Check Order</a></li>
				<li><a href="">Log in</a></li>
				<li><a href="https://designweb.herokuapp.com/Dangkykh.php">Register</a></li>
				<li><a href="https://designweb.herokuapp.com/admin.php">Admin</a></li>
			</ul>
			</div>
		 	<div class="banner">
		 		<div class="Home">
					<a href="https://designweb.herokuapp.com/ATN.php">ATN Shop</a>
				</div>
				<div class="Search">
					<div class="Search1">
						<form class="example" action="Search.php" method="get">
		  				<input type="text" placeholder="Search.." name="search">
		  				<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
		 	</div>
	</div>
	<div class="main">
		<div >
			<div >
				<table align="center" cellspacing="0" cellpadding="0" width="50%">
					<tr>
						<td><h1>Create an Account</h1></td>
						<td style="padding-left: 200px">You are already a member?<a href="https://designweb.herokuapp.com/Dangnhap.php">Log in</a> Here</td>
					</tr>
				</table>
			</div>
			<?php 
					$custid = $_POST['custid'];
					// insert dữ liệu
					$fullname = $_POST['fullname'];	
					$address = $_POST['address'];
					$postalcode = $_POST['postalcode'];
					$city = $_POST['city'];
					$country = $_POST['country'];
					$phone = $_POST['phone'];
					$fax = $_POST['fax'];
					$tendangnhap = $_POST['tendangnhap'];
					$password = $_POST['password'];
					$sql = "INSERT INTO customers(custid, fullname,  address, postalcode, city, country, phone, fax, tendangnhap, password)  VALUES ('$custid','$fullname','$address', '$postalcode',   '$city', '$country', '$phone', '$fax', '$tendangnhap','$password')";
					$sql1 ="SELECT * FROM customers WHERE custid =".$_POST['custid'];
					include 'ConnectorSQL.php';
					$row = pg_query($connection, $sql);
					if ($row) {
						$message = "Added customer information";
					echo "<script type='text/javascript'>alert('$message');</script>";
					}
							
			 ?>
			<div  class="dangky2" >
				<form action="" method="POST">
					
	 				<table  cellspacing="40" cellpadding="0" >
	 					<tr>
	 						<td>Customer Id <SPAN style="color: red">*</SPAN></td>
	 						<th colspan=""><input type="text" name="custid"required></th>
	 						<th></th>
	 						<td>User Name <SPAN style="color: red">*</SPAN></td> 
	 						<th><input type="text" name="username"required></th>

	 					</tr>
	 					<tr>
	 						<td>FullName <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="fullname"required></th>
	 						<th></th>
	 						<td>Password <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="password"required></th>
	 					</tr>

	 					<tr>
	 						<td>Address <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="address"required></th>
	 						<th></th>
	 						<td>Country <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="country"required></th>
	 					</tr>
	 					<tr>
	 						<td>City <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="city"required></th>
	 						<th></th>
	 						<td>Fax</td>
	 						<th><input type="text" name="fax"></th>
	 					</tr>
	 					<tr>
	 						<td>Phone <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="phone"required></th>
	 						<th></th>
	 					</tr>
	 					<tr><td colspan="5" > Please enter all product information!!! (<SPAN style="color: red">*</SPAN>)</td></tr>
	 					<tr>
	 						<th colspan="5" > <input type="submit" value="Đăng Ký" style=" background-color: #FF7302; text-decoration-color: #FFFFFF; width:25%; height: 30px" ></th>
	 					</tr>
	 				</table>
	 				</form>
			</div>
		</div>
	</div>	
	<div class="footer">
		<table  cellspacing="0" cellpadding="10" width= 100% align="center" >
			<tr >
			<th style="font-size: 17px; color:#FFFFFF"  >ANT_ TOP CHANNELS TO SHOP ONLINE!!!</th>
			<th  rowspan="2" style=" color:#FFFFFF" > ATN CO., LTD <br>
 													Business registration certificate: 245638792 - Date of issue: Oct 10, 2015, amended for the 9th time on Mar 15, 2019.<br>
 													Issuing agency: Business Registration Office - Hanoi Department of Planning and Investment.  <br>
 													Registered business address: 2nd Floor, 152 Nguyen Dinh Hoan, Cau Giay, Hanoi, Vietnam  <br>  <br><br>    @ATN 2019
 			</th>
			</tr>
			<tr >
				<td ><div align="center" style="padding-top:0%, width= 20px; color:#FFFFFF" >	
				</style>Buying goods online brings convenience, more diverse options and better services to consumers. That's why ATN Vietnam was launched with the desire to become the number 1 online shopping center in Vietnam, where you can choose everything to take care of your favorite toys .... All there in us!</div></td>	
			</tr>
		</table>
	</div>
</form>
</body>
</html>

