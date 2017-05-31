<?php
	@session_start();
	require_once 'db.php';
	//session_destroy();
?>
<!DOCTYPE html >
<html >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>P_Family - 寵物認領養平台</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="/static/default.css">
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
				font-family:  sans-serif,微軟正黑體;
				font-size: 12pt;
				font-weight: 300;
				color: #444444;
			}
			hr {
				border:0; height:1px; background-color:#d4d4d4;
					color:#d4d4d4
			}
		</style>
	</head>
	<body >
		
		<div class="container" >
			<center>
			<a href="index.php"><img src="images/dog1.png" alt="" style="width:30%;height:30%;" /></a>
			<h1 style="color:#0a7079 ">Register</h1>
			<hr>
			</center>
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-sm-offset-4" >
					<form class="form-horizontal" method="post">
						<div class="form-group">
							<label for="username" class="col-sm-2 control-label">帳號：</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="username" name="username" placeholder="請輸入您的帳號" required>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">密碼：</label>
							<div class="col-sm-4">
								<input type="password" class="form-control" id="password" name="password"placeholder="請輸入您的密碼" required>
							</div>
						</div>
						<div class="form-group">
							<label for="password2" class="col-sm-2 control-label">確認密碼：</label>
							<div class="col-sm-4">
								<input type="password" class="form-control" id="password2" placeholder="請再次輸入您的密碼" required>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">會員名稱：</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="name" name="name" placeholder="請輸入您的會員名稱" required>
							</div>
						</div>
						<div class="form-group" >
							<label for="gender" class="col-sm-2 control-label">性別：</label>
							<div class="col-sm-4 ">
								
								<label class="radio-inline" >
									<input type="radio" name="gender" checked="true" value="M" required>男
								</label>
								<label class="radio-inline" style="margin-left:15px;">
									<input type="radio" name="gender" value="F" required>女
								</label>
							</div>
						</div>
						<div class="form-group" >
							<label for="birthday" class="col-sm-2 control-label">出生日期：</label>
							<div class="col-sm-4">
								<input type="date" name="birthday" class="form-control"/ required>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">信箱：</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" name="email" placeholder="請輸入您的信箱" required>
							</div>
						</div>
						<div class="form-group">
							<label for="phone" class="col-sm-2 control-label">電話：</label>
							<div class="col-sm-4" >
								<input type="text" class="form-control" id="phone" name="phone" placeholder="請輸入您的電話" required>
							</div>
						</div>
						<div class="form-group">
							<label for="address" class="col-sm-2 control-label">地址：</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="address" name="address" placeholder="請輸入您的地址" required>
							</div>
						</div>
						
						
						
						<br>
						<div class="form-group" >
							<div class="col-sm-offset-2 col-sm-10" style="margin-left:120px;">
								<button type="submit" class="btn btn-default">　註冊　</button>
								<a href="login.php"><button type="button" class="btn btn-default">　登入　</button></a>
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br>
		<?php
			if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['name'])
				&&isset($_POST['gender'])&&isset($_POST['email'])&&isset($_POST['phone'])
				&&isset($_POST['address'])&&isset($_POST['birthday'])){
				
			$username = $_POST['username'];
			$password = $_POST['password'];
			$name = $_POST['name'];
			$gender = $_POST['gender'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$birthday = $_POST['birthday'];
			$register_date = date("Y-m-d H:i:s");
			
		
			$sql = "INSERT INTO `user` (`username`, `password`, `name`, `gender`, `email`, `phone`, `address`, `birthday`,`register_date`)
					VALUE ('{$username}', '{$password}', '{$name}', '{$gender}', '{$email}', '{$phone}', '{$address}', '{birthday}', '{$register_date}');";
			
			
			//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
			$result = mysqli_query($_SESSION['link'], $sql);
			if(mysqli_affected_rows($_SESSION['link']) > 0)
			{
				echo "<script>alert('註冊成功！');</script>";

			$new_id = mysqli_insert_id($_SESSION['link']);
			//echo "執行成功，新增後的 id 為 {$new_id}";
			}
			elseif(mysqli_affected_rows($_SESSION['link']) == 0)
			{
			echo "無資料新增";
			}
			else
			{
			echo  "<br>{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
			}
			
			}
			mysqli_close($_SESSION['link']);
		
		?>
		<?php include_once 'footer.php';?>
	</body>
</html>