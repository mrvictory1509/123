<!DOCTYPE html>
<html>
<head>
	<title>Edit Information of Product</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<div class="nava">
			<ul>
				<li><a href="https://designweb.herokuapp.com/ATN.php">Back to the customer interface</a></li>
			</ul>
		</div>
		<div class="banner">
		 		<div class="Home">
		 			<p>Admin Interface</p>
					<a href="https://designweb.herokuapp.com/ATN.php">ATN Shop</a>
				</div>
				<div class="Search">
					<div class="Search1">
						<form class="example" action="/action_page.php">
		  				<input type="text" placeholder="Search.." name="search">
		  				<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
		 </div>
	</div>
	<div class="main">
		<div >
			<div   style="width:60%; margin: auto;" >
				<h1>Edit Information of Product</h1>
			</div>
			<div  class="dangky2">
				<?php 
					require_once('./ATNconnector.php');
					$conn = new ATNconnector();
					$sql = "Select * From product where Productid =".$_GET['id'];
					$rows = $conn->runQuery($sql);
				 ?>
				 <?php foreach ($rows as $key) { ?>
				 	<form action="admin.php" method="get">
	 				<table  cellspacing="40" cellpadding="0" >
	 					<tr>
	 						<td>Product Id <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Productid" value="<?php echo $key['Productid'] ?>" readonly></th>
	 						<th></th>
	 						<td>Product Name <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Productname" value="<?php echo $key['Productname'] ?>"></th>
	 					</tr>
	 					<tr>
	 						<th></th>
	 						<td>Price <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Unitprice" value="<?php echo $key['Unitprice'] ?>"></th>
	 					</tr>
	 					<tr>
	 						<td>Image <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Images" value="<?php echo $key['Images'] ?>"></th>
	 						<th></th>
	 						<td>Số lượng sản phẩm còn lại trong kho <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Stock" value="<?php echo $key['Stock'] ?>"></th>
	 					</tr>
	 					<tr>
	 						<td>Category Id <SPAN style="color: red">*</SPAN></td>
	 						<th><input type="text" name="Categoryid" value="<?php echo $key['Categoryid'] ?>"></th>
	 					</tr>
	 					<tr><td colspan="5" > Please enter all product information (<SPAN style="color: red">*</SPAN>)</td></tr>
	 					<tr>
	 						<th colspan="3" > <input type="submit" value="Sửa đổi" style=" background-color: #FF7302; text-decoration-color: #FFFFFF; width:25%; height: 30px"></th>
	 						<th colspan="2" > <a href="https://designweb.herokuapp.com/admin.php"><input type="button" value="Trở lại" style=" background-color: #FF7302; text-decoration-color: #FFFFFF; width:25%; height: 30px"></a></th>
	 					</tr>
	 				</table>
	 			</form>
				 <?php } ?>
				
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
</body>
</html>
</html>
