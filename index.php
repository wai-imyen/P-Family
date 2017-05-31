
<?php
session_start();

if (isset($_SESSION['login_name']) && isset($_SESSION['login_user_id'])) {
	
	$name =$_SESSION['login_name'];
	$id = $_SESSION['login_user_id'];
}

$page= '1';	
if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case '1':
				$title = "首頁";
				break;
			case '2':
				$title = "聯絡我們";
				break;
			case '3':
				$title = "開發者";
				break;
			default:
				$title = "不存在的網頁";
				break;
		}
	}

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
				height: 800px;

			}
		label{
			margin-top: 10px;
		}

		.about li{
			margin-top: 10px;
		
		}

			
		</style>
	</head>
	<body >
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
		<div id="btn_top" >

			<ul>
				<a href="index.php?page=3"><button id=<?php if($page=='3'){echo "current";}else{echo "btn1";}?> class="button">開發者</button></a>
				<a href="index.php?page=2"><button id=<?php if($page=='2'){echo "current";}else{echo "btn1";}?> class="button">聯絡我們</button></a>
				<?php
					if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
					{
						echo "<a href='logout.php'><button id='btn1' class='button' onclick=alert('已登出!')>登　出</button></a>";
					}
					else{
						echo "<a href='login.php'><button id='btn1' class='button'>註冊 / 登入</button></a>";
					}
				?>
				
				<a href="index.php?page=1"><button id=<?php if($page=='1'){echo "current";}else{echo "btn1";}?> class="button">首　頁</button></a>
				<button id="space" class="button">　</button>
			</ul>

		</div>
		
		<div id="page" class="container">

			<?php include_once 'menu.php';?>

			<?php if($page==1):?>
			<div id="main" style="color:#0a7079 ">
				<center>
				<div id="banner" style="width:95%;height:95%;">
					<br>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/banner2.jpg" >
							</div>
							<div class="item">
								<img src="images/banner1.jpg">
							</div>
							<div class="item">
								<img src="images/banner3.jpg" >
							</div>
							
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						
					</div>
					</center>
					<div id="welcome">
						<div class="title">
							<img src="images/icon-dog.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
							<h3 style="display: inline; color:#0a7079">網站介紹</h3>
							<hr>
						</div>
						
					</div>
					
					<div >
						
						<p>這是一個提供寵物認養、送養的平台，我們提倡以領養代替購買，以結紮代替撲殺。</p>
						<p>讓需要被認養的寵物能夠找到屬於自己的家！</p>
						
						<br>
						<p>本網站提供以下幾個服務：</p>
						<div style="margin-left:35px;">
							<ul style="list-style-type:square">
								<li style="margin-bottom:10px;">
								<strong>認養流程：</strong>提供完整的認養流程說明，讓您順利抱回屬於您的可愛寵物！</li>
								<li style="margin-bottom:10px;">
								<strong>領養專區：</strong>此區為待領養的寵物們，讓您找到適合您的寵物。</li>
								<li style="margin-bottom:10px;">
								<strong>送養專區：</strong>將您想送養的寵物於此區填寫資料，幫助他找到適合的主人。</li>
								<li style="margin-bottom:10px;">
								<strong>飼養注意事項：</strong>提供各類寵物飼養的注意事項等資訊，讓寵物得到安心的照顧。</li>
								<li style="margin-bottom:10px;"><strong>走失協尋</strong></li>
								<ul style="list-style-type:circle">
									<li style="margin-bottom:10px;margin-left:25px;">
									<strong>寵物走失：</strong>填寫您所走失的寵物資料，讓您能盡快找回您的小孩。</li>
									<li style="margin-bottom:10px;margin-left:25px;">
									<strong>寵物招領：</strong>填寫您所發現要招領寵物的資料，讓他能盡快找到主人回家。</li>
									<li style="margin-bottom:10px;margin-left:25px;">
									<strong>帶我回家：</strong>此區為走失待領回的寵物們，快來這找找有沒有您的寵物吧。</li>
								</ul>
							</ul>
						</div>
						
						
						
					</div>
					
					
				</div>
			</div>
			<?php elseif($page==2):?>
			<div id="main" id="contact">
				<div id="banner">
					
				</div>
				<div id="welcome">
					<div class="title">
						<img src="images/icon-dog.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
						<h3 style="display: inline; color:#0a7079">聯絡我們</h3>
						<hr>
					</div>
					
				</div>
				<!-- 留言處 -->
				<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-6">
						<h3 style="text-align: center;">留言板 </h3>
						<form action="" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token()}}">
							<label for="messager">姓名：</label>
							<input type="text" name="messager" class="form-control" placeholder="請輸入您的名稱">
							
							<label for="messager">主旨：</label>
							<input type="text" name="subject" class="form-control"placeholder="請輸入留言主旨">
							<label for="messager">內容：</label>
							<textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="請輸入留言內容"></textarea>
							<input type="submit" class="btn btn-default pull-right" id="submit" value='送出'  style="margin-top:10px" onclick="alert('成功送出留言！')">
							<!-- <input type="button" id="show" value="show" onclick="showMsg()"> -->
						</form>
					</div>
				</div>
				</div>
				
				
				
				
			</div>
			
			<?php elseif($page==3):?>
			<div id="main">
				<div id="banner">
					
				</div>
				<div id="welcome">
					<div class="title">
						<img src="images/icon-dog.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
						<h3 style="display: inline; color:#0a7079">開發者簡介</h3>
						<hr>
					</div>
					
				</div>

				<div class="panel panel-success   " style="margin-top:50px">
					<div class="container about">
						<div class="row">
							<div class="col-sm-offset-1 col-sm-3">
								<img class="img-thumbnail" src="images/yen.jpg" alt="" width=80% style="margin-top:10px;margin-bottom:10px;">
							</div>
							<div class="col-sm-6" style="margin-top:20px">
								<ul>
										<li>姓名：陳語晏 ( Yen )</li>
										<li>學校：臺灣科技大學</li>
										<li>系級：資訊管理系 三年級</li>
										<li>信箱：yen841215@gmail.com</li>
										<li>Facebook：陳語晏</li>
										<li>聯絡地址：NTUST</li>
								</ul>
							</div>
						</div>

						
					</div>
				</div>

				<br><br><br><br><br><br><br><br>
					
						
						
						
					</div>
				</div>
				<?php else:?>
				<h2>此網頁不存在！</h2>
				<?php endif;?>
			</div>
		</div>
		<?php include_once 'footer.php';?>
	</body>
</html>