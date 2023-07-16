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
	<title>TechCart Shop - Product Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo|Inter|Lexend|Tangerine|Helvetica|Poppins">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha2-dist/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="Productdetails.css">
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
		    <div class="dropdown">
				<i class="fa fa-user" style="font-size:25px;margin: 40px 0px 0px 40px;"></i>
			    <i class="arrow down"></i></button>
			    <div class="dropdown-content">
			       	<a href="#">Name</a>
			        <a href="#">Edit Profile</a>
			        <a href="#">Change password</a>
			        <a href="index.html">logout</a>
			    </div>
		    </div>
		</div>
	</header>

	<div class="contact">
		<h2>Product Details</h2>
	</div>

	<div class="cont">
		<div class="main">
			<div class="fsect">
				<select>
					<option>Gaming Laptop</option>
					<option>Professional Laptop</option>
					<option>Creators Laptop</option>
				</select>
			</div>
			<div class="subc">
				<div class="subc1">
					<div class="laptop" id="slider">
						<div class="wrapper">
							<figure>
						   <img src="photos/asus2.jpg" height="340" width="340" align="center">
						   <img src="photos/asus1_1.jpg" height="340" width="340" align="center">
						   <img src="photos/asus1_2.jpg" height="340" width="340" align="center">
						   <img src="photos/asus1_3.jpg" height="340" width="340" align="center">
						   <img src="photos/asus1_4.jpg" height="340" width="340" align="center">
						   <img src="photos/asus1_5.jpg" height="340" width="340" align="center">
						   </figure>
						</div>
					</div>		
				</div>
				
				<div class="subc2">
					<table cellpadding="10" cellspacing="0" width="100%">
						<tr>
                        <?php
                        $sql = "SELECT * FROM addproduct";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){?>
							<td>Name:</td>
							<td><?php echo $row['pname'];?></td>
						</tr>
						<tr>
							<td>Brand:</td>
							<td><?php echo $row['pbrand'];?></td>
						</tr>
						<tr>
							<td>Price:</td>
							<td><?php echo $row['pprice'];?></td>
						</tr>
					</table>
                    <?php }}?>
				</div>
				<div class="subc3">
					<input type="button" name="buy" value="Buy">
					<input type="button" name="addtoc" value="Add to Cart">
				</div>
			</div> 
			<div class="detail">
				<h2>Specifications</h2>
				<table cellpadding="10" cellspacing="0" width="50%">
					<tr>
                    <?php
                        $sql = "SELECT * FROM product";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){?>
						<td><b>RAM:</b></td>
						<td><?php echo $row['pram'];?></td>						
					</tr>
					<tr>
						<td><b>Processor:</b></td>
						<td><?php echo $row['pprocessor'];?></td>
					</tr>
					<tr>
						<td><b>Generation:</b></td>
						<td><?php echo $row['pgeneration'];?></td>
					</tr>
					<tr>
						<td><b>Storage:</b></td>
						<td><?php echo $row['pstorage'];?></td>
					</tr>
				</table>
                <?php }}?>
			</div>
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