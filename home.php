<?php
include('dbconnection.php');
?>
<!DOCTYPE html> 
<html> 
<head> 
	<link rel="stylesheet" href="home.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
		$(".hide").hide();
		$(".drop").on("click", function(){
			$(".hide").toggle();
			$(".drop").css({"background-color": "lightblue"});
			});
		});
	</script>
</head> 

<body>  
	<div id="dd"> 
	
		<div>
			<?php
				include "dbconnection.php";
				$q = "select * from phonebook";
				$res = $conn->query($q);
				while($row = $res->fetch_assoc()){
			?>
			<div class="drop">
				<p><?php echo $row['name']?><?php echo " ".$row['last']?><span><i id="arrow" class="fa fa-arrow-down" aria-hidden="true"></i></span></p>
				<div class="hide">
					<div class="button">
					<a href="edit-contact.php?edit=<?php echo $row['id'] ?>" class="edit">Edit</a>
					<a href="remove-contact.php?delete=<?php echo $row['id'] ?>" class="remove">Remove</a>
					</div>
					<div class="mbl_email">
						<i class="fa fa-phone-square" aria-hidden="true"></i><?php echo "+91 ".$row['mobile'] ?>
						<i class="fa fa-envelope" aria-hidden="true"></i><?php echo " ".$row['email'] ?>
					    <i class="fa fa-globe" aria-hidden="true"></i><?php echo $row['country']?><br>
						<i class="fa fa-dot-circle-o" aria-hidden="true"></i><?php echo $row['state']?>
						<i class="fa fa-thumb-tack" aria-hidden="true"></i><?php echo $row['number']?>
						
					</div>
				</div>
			</div>

			<?php }?>
		</div>
		<div class="add-contact">
			<a href="add-contact.php"><img src="Plus-Symbol.jpg" alt="Add-contact-symbol" width="40px" height="40px"></a>
		</div>
	</div>	
</body> 

</html> 