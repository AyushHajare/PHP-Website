<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wpsem6";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$pid = $_GET['id'];
$query = "SELECT * FROM addproduct where UID = '".$pid."'";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TechCart Shop - Add Product</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo|Inter|Lexend|Tangerine|Helvetica|Poppins">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha2-dist/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="addp.css">
	<link rel="stylesheet" type="text/css" href="addpresponsive.css">
</head>
<body>
	<header>
		<div class="heads">
			<a href="index.html"><img src="photos/logo2.jpg" class="img1"></a>
			<h1>Techcart Shop</h1>
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

	<section>
		<div class="log">
			<center>
				<div class="tab">
					<h2 style="text-align: center;font-size: 35px; font-weight: bold; padding: 25px; color: mintcream;">Edit Product</h2>
					<table align="center" cellpadding="15">
						<form action="action.php" method="post" enctype="multipart/form-data">
							<tr>
								<td><label>Enter Name:</label></td>
								<td><input type="text" name="pname" value = "<?php echo $row['pname']?>"></td>
							</tr>
							<tr>
								<td><label>Enter Category:</label></td>
                                <?php $options = $row['pcategory'];?>
								<td><select name="category" value = "<?php echo $row['pcategory'];?>">
								<option value="Gaming Laptop" <?php if($options == "Gaming Laptop") echo 'selected = "selected"';?>>Gaming Laptop</option>
								<option value="Professional Laptop" <?php if($options == "Professional Laptop") echo 'selected = "selected"';?>>Professional Laptop</option>
								<option value="Creators Laptop" <?php if($options == "Creators Laptop") echo 'selected = "selected"';?>>Creators Laptop</option>
								<option value="High Profile Laptop" <?php if($options == "High Profile Laptop") echo 'selected = "selected"';?>>High Profile Laptop</option>
								</select></td>
							</tr>
							<tr>
								<td><label>Enter Description</label></td>
								<td><textarea rows="4" name="description" placeholder="Enter Your Laptop Description Here...." ><?php echo $row['pdescription']; ?></textarea></td>
							</tr>
							<tr>
								<td><label>Enter Price:</label></td>
								<td><input type="text" name="price" value = "<?php echo $row['pprice']?>"></td>
							</tr>
							<tr>
								<td><label>Upload Product Image</label></td>
								<td><input type="file" id="productimg" name="imgnew" value = "<?php echo $row['img1']?>">
                                <input type = "hidden" name = "id" value = "<?php echo $pid; }?>"></td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="edit" value="Update Product"></td>
							</tr>
						</form>
					</table>
				</div>
			</center>
		</div>

	</section>

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