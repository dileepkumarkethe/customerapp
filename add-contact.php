<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="add-contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>CUSTOMER-APP</title>
	<link rel="shortcut icon" href="https://learncodeweb.com/demo/favicon.ico">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6724419004010752",
		enable_page_level_ads: true
	  });
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-131906273-1');
	</script>
	<script>
function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "get_district.php",
	data:'state_id='+val,
	success: function(data){
		$("#district-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
</head>
<body>
 
<form action="insertData.php" method="POST">
	<div id="add">
		<p id="h"><b>CUSTOMER-APP</b></p>
	<div id="add1">
		<i class="fa fa-arrow-left" id="ar"></i><?php echo " Add customer"?><br><br>
		<?php echo "First Name"?><br>
		<input type="text" name="name" placeholder="First Name" class="a1">
		<br><br>
		<?php echo "Last Name"?><br>
		<input type="text" name="last" placeholder="Last Name" class="a1">
		<br><br>
		<?php echo "Email"?><br>
		<input type="email" name="email" placeholder="abc@gmail.com" class="a2">
		<br><br>
		<?php echo "Mobile Number" ?> <br>
		<input type="number" min="10" name="mobile" placeholder="+91 xxxxxxxxx" class="a2">
		<br>
		<br>
		<?php echo "Country" ?> <br>
<select name="country" id="countries">
  <option value="India">India</option>
  <option value="Bangladesh">Bangladesh</option>
  <option value="Canada">Canada</option>
  <option value="Germany">Germany</option>
</select>

<div class="container-fluid" name="state">
  <!--center-->
  <div class="col-sm-8">
    <div class="row" style="margin-left: -45px;">
      <div class="col-xs-12">
		<form name="insert" action="" method="post">
  <table height="-124"  border="0">
  <tr>
  <br>
  <?php echo "State" ?> <br>
    <td width="73%"><select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
                    <option value="">Select</option>
                   								<?php $query =mysqli_query($con,"SELECT * FROM state");
while($row=mysqli_fetch_array($query))
{ ?>
<option name="StateName" value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
<?php
}
?>
                    </select></td>
  </tr>
</table>
<?php echo "Pincode" ?> <br>
		<input type="number" min="6" name="number" placeholder="xxxxxx" class="a2">
		<br>
		<br>
     </form>
 
      </div>
    </div>
</div>

<div name="picture">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo top banner -->
		<ins class="adsbygoogle"
			 style="display:block; height:115px;" 
			 
			 data-ad-client="ca-pub-6724419004010752"
			 data-ad-slot="6737619771"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	<div class="container">
		<div class="row justify-content-md-center">
		<div class="ml-2 col-sm-4">
			<div id="msg"></div>
			<form method="post" id="image-form" enctype="multipart/form-data" onSubmit="return false;">
				<div class="form-group" style="margin-bottom: -16rem;" >
					<input type="file" name="file" class="file">
					<div class="input-group my-3">
						<input type="text" class="form-control" disabled placeholder="Upload File" id="file">
						<div class="input-group-append">
							<button type="button" class="browse btn btn-primary">Browse...</button>
						</div>
					</div>
				</div>
				<div class="form-group">
					<img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Upload" class="btn btn-danger">
				</div>
			</form>
		</div>
		</div>
	</div>
	
	<div class="row">
		<div >
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- demo left sidebar -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-6724419004010752"
				 data-ad-slot="7706376079"
				 data-ad-format="auto"
				 data-full-width-responsive="true"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
	
	
		<input type="submit" name="submit" value="Save" id="a3">
	</div>	
	</div>
</form>
<!--Only these JS files are necessary--> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
		$(document).on("click", ".browse", function() {
		  var file = $(this)
			.parent()
			.parent()
			.parent()
			.find(".file");
		  file.trigger("click");
		});
		$('input[type="file"]').change(function(e) {
		  var fileName = e.target.files[0].name;
		  $("#file").val(fileName);
		
		  var reader = new FileReader();
		  reader.onload = function(e) {
			// get loaded data and render thumbnail.
			document.getElementById("preview").src = e.target.result;
		  };
		  // read the image file as a data URL.
		  reader.readAsDataURL(this.files[0]);
		});
		
		
		$(document).ready(function(e) {
		  $("#image-form").on("submit", function() {
			$("#msg").html('<div class="alert alert-info"><i class="fa fa-spin fa-spinner"></i> Please wait...!</div>');
			$.ajax({
			  type: "POST",
			  url: "ajax/action.ajax.php",
			  data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			  contentType: false, // The content type used when sending data to the server.
			  cache: false, // To unable request pages to be cached
			  processData: false, // To send DOMDocument or non processed data file it is set to false
			  success: function(data) {
				if (data == 1 || parseInt(data) == 1) {
				  $("#msg").html(
					'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Data updated successfully.</div>'
				  );
				} else {
				  $("#msg").html(
					'<div class="alert alert-info"><i class="fa fa-thumbs-up></i>Data updated successfully</div>'
				  );
				}
			  },
			  error: function(data) {
				$("#msg").html(
				  '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong.</div>'
				);
			  }
			});
		  });
		});
	</script>   

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>