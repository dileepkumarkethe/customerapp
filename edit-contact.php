<?php
	include "dbconnection.php";
	if(isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$q = "select * from phonebook where id=$id";
		$res = $conn->query($q);
		$row = $res->fetch_assoc();
	}

	if(isset($_POST['update'])) {
		$id = $_GET['edit'];

		$name = $_POST['name'];
		$last = $_POST['last'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];

		$q = "update phonebook set name='$name', last='$last', mobile='$mobile', email='$email' where id=$id";
		if($conn->query($q)) {
			echo "<script>window.location.href='home.php';</script>";
   	 		exit;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>CUSTOMER</title>
	<link rel="stylesheet" href="edit-contact.css">
</head>
<body>
<form action="edit-contact.php?edit=<?php echo $_GET['edit'] ?>" method="POST">
<div id="add">
	<p id="h"><b>CUSTOMER-APP</b></p>
	<div id="add1">
		<i class="fa fa-arrow-left" id="ar"></i><?php echo " Edit contact"?><br><br>
		<?php echo "Name"?><br>
		<input type="text" name="name" placeholder="Name" class="a1" value="<?php echo $row['name'] ?>">
		<br><br>
		<?php echo "Last Name"?><br>
		<input type="text" name="last" placeholder="Last Name" class="a1" value="<?php echo $row['last'] ?>">
		<br><br>
		<?php echo "Email"?><br>
		<input type="email" name="email" placeholder="abc@gmail.com" class="a2" value="<?php echo $row['email'] ?>">
		<br><br>
		<?php echo "Mobile Number" ?> <br>
		<input type="text" min="10" name="mobile" placeholder="+91 xxxxxxxxx" value="<?php echo $row['mobile'] ?>" class="a2" >
		<br>
		<br> 

		<input type="submit" name="update" value="Update" id="a3">
	</div>
</div>
</form>
</body>
</html>