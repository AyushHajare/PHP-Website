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
	<link rel="stylesheet" type="text/css" href="ProductManagement.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
    <style>
        .tab a{
            color:orange;
        }
        .tab a:hover{
            color:black;
        }
    </style>
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
		<h2>Products</h2>
	</div>

	<div class="cont">
		<div class="main">
			<div class="butt">
				<button value="Add Product"><a href="Addproduct.html">Add Product</a></button>
			</div>
			<div class="drop">
				<select>
					<option disabled>Select Category--</option>
					<option>Gaming Laptop</option>
					<option>Professional Laptop</option>
					<option>Creators Laptop</option>
				</select>
			</div>
			<div class="tab">
				<table cellpadding="15" cellspacing="0" width="100%">
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Category</th>
						<th>Description</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
					<!-- <tr>
						<td><img src="photos/gaming1.jpg" width="300" height="300"></td>
						<td><b>Acer Nitro 5 Creators Laptop</b></td>
						<td>Creators</td>
						<td>Acer Nitro 5 Creators Laptop AMD Ryzen™ 7 7735HS Octa-core Processor- (8GB/ 512 GB SSD/NVIDIA GeForce RTX 3050 4GB Graphics/Windows 11 Home) AN515-47 with 39.6 Cm (15.6 Inch) IPS Display</td>
						<td>₹1,84,999.00</td>
						<td><button value="edit">Edit</button><button value="delete">Delete</button></td>
					</tr> -->
					<tbody id = "tablebody" class"p-5">
                        <?php
                        $sql = "SELECT * FROM addproduct";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){?>
                            <tr>
                                <td><img src = "newproducts/<?php echo $row['img1'];?>" width="300" height="300"></td>
                                <td><?php echo $row['pname'];?></td>
                                <td><?php echo $row['pcategory'];?></td>
                                <td><?php echo $row['pdescription'];?></td>
                                <td><?php echo $row['pprice'];?></td>
                                <td><button value="edit"><a href="edit.php?id=<?php echo $row['UID'];?>">Edit</a></button><button value="delete"><a href="action.php?id=<?php echo $row['UID'];?>&delete=1">Delete</button></td>
                            </tr>
                            <?php }
                        }?>
                            </tbody>
				</table>
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