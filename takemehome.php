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
		<link href="default2.css" rel="stylesheet" type="text/css" media="all" />
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
		</style>
		<style>
		input[type=text], select {
		width: 30%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		}
		#divf {
		border-radius: 5px;
		background-color: ;
		padding: 20px;
		}
		#header
			{
				position: relative;
				float: left;
				width: 300px;
				padding: 0em 0em;
				margin-left: -5px;
				
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
				<div id="petsPpage">
					<div class="title">
						<h3>帶我回家</h3>
						<hr>
					</div>
				</div>
				<div class="allpets">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#animal1">Dog</a></li>
						<li><a data-toggle="tab" href="#animal2">Cat</a></li>
						<li><a data-toggle="tab" href="#animal3">Hamsters</a></li>
						<li><a data-toggle="tab" href="#animal4">Rabbit</a></li>
						<li><a data-toggle="tab" href="#animal5">Others</a></li>
					</ul>
					<div class="tab-content">
						<div id="animal1" class="tab-pane fade in active">
							<h3>Dog</h3>
							<div class="col">
								<div class="col-md-4">
									<a href="#dog" class="thumbnail">
										<ul>
											<li><h4>發現時間: </h4></li>
											<li><h4>地點: </h4></li>
											<li><h4>性別: </h4></li>
											<li><h4>發現者姓名: </h4></li>
											<li><h4>電話: </h4></li>
											<li><h4>備註: </h4></li>
										</ul>
										<hr>
										<img src="images/snoopy.png" alt="Pulpit Rock" style="width:150px;height:150px">
									</a>
									
								</div>
							</div>
							<div class="col">
								<div class="col-md-4">
									<a href="#dog" class="thumbnail">
										<ul>
											<li><h4>發現時間: </h4></li>
											<li><h4>地點: </h4></li>
											<li><h4>性別: </h4></li>
											<li><h4>發現者姓名: </h4></li>
											<li><h4>電話: </h4></li>
											<li><h4>備註: </h4></li>
										</ul>
										<hr>
										<img src="images/snoopy.png" alt="Pulpit Rock" style="width:150px;height:150px">
									</a>
									
								</div>
							</div>
							<div class="col">
								<div class="col-md-4">
									<a href="#dog" class="thumbnail">
										<ul>
											<li><h4>發現時間: </h4></li>
											<li><h4>地點: </h4></li>
											<li><h4>性別: </h4></li>
											<li><h4>發現者姓名: </h4></li>
											<li><h4>電話: </h4></li>
											<li><h4>備註: </h4></li>
										</ul>
										<hr>
										<img src="images/snoopy.png" alt="Pulpit Rock" style="width:150px;height:150px">
									</a>
									
								</div>
							</div>
						</div>
						<div id="animal2" class="tab-pane fade">
							<h3>Cat</h3>
							<div class="col">
								<div class="col-md-4">
									
									<a href="#cat" class="thumbnail">
										<ul>
											<li><h4>發現時間: </h4></li>
											<li><h4>地點: </h4></li>
											<li><h4>性別: </h4></li>
											<li><h4>發現者姓名: </h4></li>
											<li><h4>電話: </h4></li>
											<li><h4>備註: </h4></li>
										</ul>
										<hr>
										<img src="images/cat.png" alt="Pulpit Rock" style="width:150px;height:150px">
									</a>
								</div>
							</div>
							
						</div>
						<div id="animal3" class="tab-pane fade">
							<h3>Hamster</h3>
							<div class="col-md-4">
								<a href="#hamster" class="thumbnail">
									<ul>
										<li><h4>發現時間: </h4></li>
										<li><h4>地點: </h4></li>
										<li><h4>性別: </h4></li>
										<li><h4>發現者姓名: </h4></li>
										<li><h4>電話: </h4></li>
										<li><h4>備註: </h4></li>
									</ul>
									<hr>
									<img src="images/hamster2.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
								</a>
							</div>
						</div>
						
						<div id="animal4" class="tab-pane fade">
							<h3>Rabbit</h3>
							<div class="col-md-4">
								<a href="#rabbit" class="thumbnail">
									<ul>
										<li><h4>發現時間: </h4></li>
										<li><h4>地點: </h4></li>
										<li><h4>性別: </h4></li>
										<li><h4>發現者姓名: </h4></li>
										<li><h4>電話: </h4></li>
										<li><h4>備註: </h4></li>
									</ul>
									<hr>
									<img src="images/rabbit2.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
								</a>
							</div>
							
						</div>
						<div id="animal5" class="tab-pane fade">
							<h3>Others</h3>
							<div class="col-md-4">
								<a href="#others" class="thumbnail">
									<ul>
										<li><h4>發現時間: </h4></li>
										<li><h4>地點: </h4></li>
										<li><h4>性別: </h4></li>
										<li><h4>發現者姓名: </h4></li>
										<li><h4>電話: </h4></li>
										<li><h4>備註: </h4></li>
									</ul>
									<hr>
									<img src="images/others.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="petsdetailPage" class="container">
			<div class="petsinfor">
				<h3>基本資料</h3>
				<hr>
			</div>
			
			
			<div id="dog" class="row">
				<div class="row-md-4">
					<a href="" class="thumbnail">
						<ul>
							<li><h4>姓名: </h4></li>
							<li><h4>年齡: </h4></li>
							<li><h4>性別: </h4></li>
							<li><h4>絕育: </h4></li>
							<li><h4>地區: </h4></li>
							<li><h4>健康狀況: </h4></li>
							<li><h4>聯絡人: </h4></li>
							<li><h4>聯絡電話: </h4></li>
							<li><h4>性格&注意事項: </h4></li>
						</ul>
						<br>
						<button type="button" onclick="alert('去看看領養程序吧!!')"><h5>　我要領養　</h5></button>
						<hr>
						<img src="images/snoopy.png" alt="Pulpit Rock" style="width:150px;height:150px">
					</a>
					
				</div>
			</div>
			<div id = "cat" class="row">
				<div class="row-md-4">
					<a href="" class="thumbnail">
						<ul>
							<li><h4>姓名: </h4></li>
							<li><h4>年齡: </h4></li>
							<li><h4>性別: </h4></li>
							<li><h4>絕育: </h4></li>
							<li><h4>地區: </h4></li>
							<li><h4>健康狀況: </h4></li>
							<li><h4>聯絡人: </h4></li>
							<li><h4>聯絡電話: </h4></li>
							<li><h4>性格&注意事項: </h4></li>
						</ul>
						<br>
						<button type="button" onclick="alert('去看看領養程序吧!!')"><h5>　我要領養　</h5></button>
						<hr>
						<img src="images/cat.png" alt="Pulpit Rock" style="width:150px;height:150px">
					</a>
					
				</div>
			</div>
			<div id = "hamster" class="row">
				<div class="row-md-4">
					<a href="" class="thumbnail">
						<ul>
							<li><h4>姓名: </h4></li>
							<li><h4>年齡: </h4></li>
							<li><h4>性別: </h4></li>
							<li><h4>絕育: </h4></li>
							<li><h4>地區: </h4></li>
							<li><h4>健康狀況: </h4></li>
							<li><h4>聯絡人: </h4></li>
							<li><h4>聯絡電話: </h4></li>
							<li><h4>性格&注意事項: </h4></li>
						</ul>
						<br>
						<button type="button" onclick="alert('去看看領養程序吧!!')"><h5>　我要領養　</h5></button>
						<hr>
						<img src="images/hamster2.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
					</a>
					
				</div>
			</div>
			<div id = "rabbit" class="row">
				<div class="row-md-4">
					<a href="" class="thumbnail">
						<ul>
							<li><h4>姓名: </h4></li>
							<li><h4>年齡: </h4></li>
							<li><h4>性別: </h4></li>
							<li><h4>絕育: </h4></li>
							<li><h4>地區: </h4></li>
							<li><h4>健康狀況: </h4></li>
							<li><h4>聯絡人: </h4></li>
							<li><h4>聯絡電話: </h4></li>
							<li><h4>性格&注意事項: </h4></li>
						</ul>
						<br>
						<button type="button" onclick="alert('去看看領養程序吧!!')"><h5>　我要領養　</h5></button>
						<hr>
						<img src="images/rabbit2.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
					</a>
					
				</div>
			</div>
			<div id = "others" class="row">
				<div class="row-md-4">
					<a href="" class="thumbnail">
						<ul>
							<li><h4>姓名: </h4></li>
							<li><h4>年齡: </h4></li>
							<li><h4>性別: </h4></li>
							<li><h4>絕育: </h4></li>
							<li><h4>地區: </h4></li>
							<li><h4>健康狀況: </h4></li>
							<li><h4>聯絡人: </h4></li>
							<li><h4>聯絡電話: </h4></li>
							<li><h4>性格&注意事項: </h4></li>
						</ul>
						<br>
						<button type="button" onclick="alert('去看看領養程序吧!!')"><h5>　我要領養　</h5></button>
						<hr>
						<img src="images/others.jpg" alt="Pulpit Rock" style="width:150px;height:150px">
					</a>
					
				</div>
			</div>
		</div>
	</div>
	<div id="loginpage" class="container">
		<div id="login">
			<div id="logo">
				<br>
				<img src="images/dog1.png" alt="11" style="width:70%;height:70%;" />
				<h1><a href="">Login</a></h1>
				<div>
					
					<form action="">
						
						<legend>會員登入</legend>
						<ul>
							<li><h4>帳號: </h4><input type="text" name="id" ></li>
							<br>
							<li><h4>密碼: </h4><input type="text" name="password" ></li>
							<br><br>
							<button type="button" onclick="alert('登入成功!')"><h4>　登入　</h4></button>
							<button><h4><a href="#signUPpage">　註冊　</a></h4></button>
							
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="signUPpage" class="container">
		<div id="signup">
			<div id="logo">
				<br>
				<img src="images/dog1.png" alt="11" style="width:70%;height:70%;" />
				<h1><a href="">Sign Up</a></h1>
				<div>
					
					<form action="">
						
						<legend>會員註冊</legend>
						<ul>
							<li><h4>姓名: </h4><input type="text" name="name" ></li>
							<br>
							<li><h4>身分證字號: </h4><input type="text" name="IDnumber" ></li>
							<br>
							<li><h4>帳號: </h4><input type="text" name="id" ></li>
							<br>
							<li><h4>密碼: </h4><input type="text" name="password" ></li>
							<br>
							<li><h4>確認密碼: </h4><input type="text" name="password" ></li>
							<br>
							
							<br><br>
							<button  type="button" onclick="alert('成功加入會員!')"><h4>　加入會員　</h4></button>
							<button  ><h4><a href="#loginpage">　登入　</a></h4></button>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2>Pager</h2>
		<p>The .previous and .next classes align each link to the sides of the page:</p>
		<ul class="pager">
			<li class="previous"><a href="#">Previous</a></li>
			<li class="next"><a href="#">Next</a></li>
		</ul>
	</div>
	<?php include_once 'footer.php';?>
</body>
</html>