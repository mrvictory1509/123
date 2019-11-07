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
		<div class="navb">
			<ul>
				<?php
		          include 'ConnectorSQL.php';
		            $querycategory = "SELECT categoryid, categoryname FROM category";
		            $total = pg_query($connection,$querycategory);
		            if (pg_num_rows($total) > 0) {
		            // output data of each row
		            while($rowcategory = pg_fetch_assoc($total)) {
		              $categoryid = $rowcategory['categoryid'];
		              $categoryname = $rowcategory['categoryname'];
		          ?>
		         <li><a href="ATNdetail.php?categoryid=<?= $categoryid; ?>"><?= $categoryname; ?></a></li>
		       <?php }} ?>
			</ul>
		</div>	
		<div >
			<?php
       include 'ConnectorSQL.php';
       $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
       $perpage = isset($_GET['per-page']) && $_GET['per-page'] <= 16 ? (int)$_GET['per-page'] : 16;
       $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;
       $queryproduct = "SELECT productid, productname, unitprice, images, stock, manufacturer FROM product WHERE productname LIKE '%{$_GET['search']}%' ORDER BY productid DESC LIMIT 5";
       $result = pg_query($connection,$queryproduct);
       //pages
        $total = pg_fetch_assoc(pg_query($connection,"SELECT COUNT(*) as total"))['total'];
        $pages = ceil($total / $perpage);
         if (pg_num_rows($result) > 0) {
         // output data of each row
         while($rowproduct = pg_fetch_assoc($result)) {
           $productid = $rowproduct['productid'];
           $productname = $rowproduct['productname'];
           $unitprice = $rowproduct['unitprice'];
           $images = $rowproduct['images'];
           $stock = $rowproduct['stock'];
           $manufacturer = $rowproduct['manufacturer'];
         ?>
		<div class="item">
					<a href="Thongtinsanpham.php?productid=<?= $productid;  ?>"><div class="iimage"><img src="<?= $images; ?>" alt="">
					</div></a>
					<div class="Thongtin">	Product Name: <?= $productname; ?> <br> <br>
											Price: <?=$unitprice; ?> vnđ <br> <br>
					</div>
				</div>
				<?php
			}}
			?>
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

