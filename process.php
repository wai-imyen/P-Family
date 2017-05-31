<?php
@session_start();

if (isset($_SESSION['login_name']) && isset($_SESSION['login_user_id'])) {
	
	$name =$_SESSION['login_name'];
	$id = $_SESSION['login_user_id'];
}


?>

<!DOCTYPE html >

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>P_Family - 寵物認領養平台</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!---->


<style>

  
  body
	{
		margin: 0px;
		padding: 0px;
		background: #3ACDCE;
		font-family: 'Source Sans Pro', sans-serif,微軟正黑體;
		font-size: 12pt;
		font-weight: 600;
		color: #444444;

	}
	hr {
		border:0; height:1px; background-color:#d4d4d4;
		color:#d4d4d4	
	}
</style>

</head>
<body >

<div id="btn_top">
<?php include_once 'top_menu.php';?>
</div>

<div id="page" class="container">
	
	<?php include_once 'menu.php';?>


	<div id="main">
		<div id="banner">
			

		</div>


		<div id="welcome">
			<div class="title">
				<img src="images/icon-dog.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
				<h3 style="display: inline; color:#0a7079">認養流程</h3>
				<hr>
				
			</div>
		
		</div>


		
			<div class="content">
				<img src="images\process.jpg"  alt="Process" width="790" height="1200">
			</div>
			
		
		
	</div>
</div>
		<?php include_once 'footer.php';?>
</body>
</html>
