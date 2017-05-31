<?php
session_start();

$name =$_SESSION['login_name'];
$id = $_SESSION['login_user_id'];


?>
<!DOCTYPE html >

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>P_Family - 寵物領養平台</title>
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
		font-weight: 300;
		color: #444444;

	}
	hr {
		border:0; height:1px; background-color:#d4d4d4;
		color:#d4d4d4	
	}

	.form-group{

		margin-top: 20px;

	}
	#btn2.btn.collapsed:after {
    content: "\e114";


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
				<h3 style="display: inline; color:#0a7079">寵物走失</h3>
				<hr>

			</div>
		
		</div>


		
			<div class="content" style="margin-left:98px;color:#0a7079 ">
				<img src="images/dog2.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
				  <h3 style="display: inline; ">走失寵物資料</h3>
				<form class="form-inline" role="form">
				<div class="form-group" >
				    <label for="cellphone">聯絡人姓名：</label>
				    <input type="cellphone" class="form-control" id="cellphone" >
				</div>
				<div class="form-group" style="margin-left:60px;">
				    <label for="cellphone">聯絡電話：</label>
				    <input  type="cellphone" class="form-control" id="cellphone">
				</div>
				
				</form>
				<form class="form-inline" role="form">
					<div class="form-group">
				      	<label for="gender">種類：</label>
				        <label class="radio-inline"> 
				          <input type="radio" name="optradio">狗
				        </label>
				        <label class="radio-inline">
				          <input type="radio" name="optradio">貓
				        </label>
				        <label class="radio-inline">
				          <input type="radio" name="optradio">鼠
				        </label>
				        <label class="radio-inline">
				          <input type="radio" name="optradio">兔
				        </label>
				        <label class="radio-inline">
				          <input type="radio" name="optradio">其他
				        </label>
				        <input type="name" class="form-control" style="width:100px;margin-left:7px;">
				        
				    </div>
				    
				</form>
				<form class="form-inline" role="form">
					<div class="form-group">
				      	<label for="gender">性別：</label>
				        <label class="radio-inline"> 
				          <input type="radio" name="optradio">男
				        </label>
				        <label class="radio-inline">
				          <input type="radio" name="optradio">女
				        </label>
				        
				    </div>

				</form>

				<form class="form-inline" role="form" >
				    <div class="form-group" >
				      <label for="name">走失時間：</label>
				      <input type="datetime-local" name="user_date" class="form-control"/>
				    </div>
				    
				 </form>
				  <form class="form-inline" role="form" >
					<div class="form-group" >
					  <label for="name">走失地點：</label>
					  <input type="name" class="form-control" style="width:350px"id="name" >
					</div>
				</form>
				<form role="form">
				      <div class="form-group" style="width:555px;">
				        <label for="comment">特徵及備註</label>
				        <textarea class="form-control" rows="5" id="comment"></textarea>
				      </div>
				</form>
					<label for="fileud">檔案上傳：</label>

				    <div class="row" style="margin-top:10px;">
				     <div class="col-md-4">
				      	<div class="thumbnail">
				      		<img src="images/dogpic.png"  class="img-thumbnail" id="pic">
				      		<h5 style="text-align:center;font-weight: 600;">走失寵物照片</h5>
				      <input type="file" name="upload[]" size="20" style="font-size: 12px;margin-top:10px;" />
				  		</div>
				  	</div>

				  	<br>
				  	<br>
				  	 <button style="margin-left:240px;margin-top:50px;color:#0a7079" type="submit" class="btn btn-default" onclick="alert('成功送出!')">確認送出</button>

				    
		


				
			</div>
			
		
		
	</div>
</div>
</div>

			<?php include_once 'footer.php';?>
</body>
</html>
