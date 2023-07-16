<?php
    //Connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wpsem6";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TechCart Shop - Categories</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo|Inter|Lexend|Tangerine|Helvetica|Poppins">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha2-dist/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="Category.css">
</head>
<body>
	<header>
		<div class="heads">
			<a href="index.html"><img src="photos/logo2.jpg" class="img1"></a>
			<h1>Techcart Shop</h1>
			<form action="">
		      <input type="text" placeholder="Search..." name="search">
		      <button type="submit" style="background-color: orange;"><i class="fa fa-search"></i></button>
		    </form>
		    <a href="cart.html"><i class="fa fa-shopping-cart" style="font-size:25px;margin: 40px 20px 0px 40px;"></i></a>
		    <a href="login.html"><i class="fa fa-user" style="font-size:25px;margin: 40px 0px 0px 40px;"></i></a>
		</div>
	</header>

	<div class="contact">
		<h2>Category</h2>
	</div>

	<div class="cont">
		<div class="main">
			<ul>
				<li><b>Gaming</b>

					<table cellpadding="15" cellspacing="0" width="100%">
                        <tr>
                        <?php
                        $sql = "SELECT * FROM addproduct WHERE pcategory = 'Gaming Laptop'";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){?>
                        
							<td align="center"><img src="newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td><?php }?>
							<!-- <td align="center"><img src="newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td>
							<td align="center"><img src="newproducts/"<?php echo $row['img1'];?> width="300" height="300"></td> -->
							<td align="center" rowspan="3"><a href="#">More <i class="fa fa-arrow-right"></i></td>
						</tr>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM addproduct WHERE pcategory = 'Gaming Laptop'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){?>
							<td align="center"><b><?php echo $row['pname'];?></b></td><?php }}?>
							<!-- <td align="center"><b><?php echo $row['pname'];?></b></td>
							<td align="center"><b><?php echo $row['pname'];?></b></td> -->
						</tr>
						<tr>
                            <?php
                            $sql = "SELECT * FROM addproduct WHERE pcategory = 'Gaming Laptop'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){?>
							<td align="center"><?php echo $row['pprice'];?></td><?php }}?>
							<!-- <td align="center"><?php echo $row['pprice'];?></td>
							<td align="center"><?php echo $row['pprice'];?></td> -->
						</tr>
					</table></li>
                    <?php }?>
                    

				<li><b>Professional</b>

                <table cellpadding="15" cellspacing="0" width="100%">
                        <tr>
                        <?php
                        $sql = "SELECT * FROM addproduct WHERE pcategory = 'Professional Laptop'";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){?>
                        
							<td align="center"><img src="newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td><?php }?>
							<!-- <td align="center"><img src="newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td>
							<td align="center"><img src="newproducts/"<?php echo $row['img1'];?> width="300" height="300"></td> -->
							<td align="center" rowspan="3"><a href="#">More <i class="fa fa-arrow-right"></i></td>
						</tr>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM addproduct WHERE pcategory = 'Professional Laptop'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){?>
							<td align="center"><b><?php echo $row['pname'];?></b></td><?php }}?>
							<!-- <td align="center"><b><?php echo $row['pname'];?></b></td>
							<td align="center"><b><?php echo $row['pname'];?></b></td> -->
						</tr>
						<tr>
                            <?php
                            $sql = "SELECT * FROM addproduct WHERE pcategory = 'Professional Laptop'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){?>
							<td align="center"><?php echo $row['pprice'];?></td><?php }}?>
							<!-- <td align="center"><?php echo $row['pprice'];?></td>
							<td align="center"><?php echo $row['pprice'];?></td> -->
						</tr>
					</table></li>
                    <?php }?>

				<li><b>Creators</b>

                <table cellpadding="15" cellspacing="0" width="100%">
                        <tr>
                        <?php
                        $sql = "SELECT * FROM addproduct WHERE pcategory = 'Creators Laptop'";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){?>
                        
							<td align="center"><img src="newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td><?php }?>
							<!-- <td align="center"><img src="newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td>
							<td align="center"><img src="newproducts/"<?php echo $row['img1'];?> width="300" height="300"></td> -->
							<td align="center" rowspan="3"><a href="#">More <i class="fa fa-arrow-right"></i></td>
						</tr>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM addproduct WHERE pcategory = 'Creators Laptop'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){?>
							<td align="center"><b><?php echo $row['pname'];?></b></td><?php }}?>
							<!-- <td align="center"><b><?php echo $row['pname'];?></b></td>
							<td align="center"><b><?php echo $row['pname'];?></b></td> -->
						</tr>
						<tr>
                            <?php
                            $sql = "SELECT * FROM addproduct WHERE pcategory = 'Creators Laptop'";
                            $result = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){?>
							<td align="center"><?php echo $row['pprice'];?></td><?php }}?>
							<!-- <td align="center"><?php echo $row['pprice'];?></td>
							<td align="center"><?php echo $row['pprice'];?></td> -->
						</tr>
					</table></li>
                    <?php }?>
			</ul>
		</div>
	</div>

	<center>
		<div class="follow">
			<h3 align="center">Follow US</h3>
			<div class="ico">
				<a href="#"><img src="photos/insta.jpg" height="60" width="60"></a>
			   	<a href="#"><img src="photos/facebook.jpg" height="60" width="60"></a>
			   	<a href="#"><img src="photos/twitt.png" height="60" width="60"></a>
			   	<a href="#"><img src="photos/whatsapp.png" height="60" width="60"></a>
			   	<a href="#"><img src="photos/linkedin.jpg" height="60" width="60"></a>
			</div>
		</div>
	</center>

	<footer>
		<h3>Copyright &copy; 2023 Techcart Shop</h3>
	</footer>

</body>
</html>