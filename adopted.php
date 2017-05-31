<?php
	//載入 db.php 檔案，讓我們可以透過它連接資料庫
	require_once 'db.php';
	@session_start();

	if (isset($_SESSION['login_name']) && isset($_SESSION['login_user_id'])) {
		
		$name =$_SESSION['login_name'];
		$id = $_SESSION['login_user_id'];
	}
	

	if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']){
		$required = '';
	}
	else{
		$required = 'required'; 
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
				height: auto;
			}
			hr {
				border:0; height:1px; background-color:#d4d4d4;
					color:#d4d4d4
			}
			.form-group{
				margin-top: 20px;
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
						<h3 style="display: inline; color:#0a7079">送養專區</h3>
						
						<hr>
						<?php if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']):?>
							<h4 style=" color:red;">＊ 請登入帳戶，方可使用此功能！</h4>
							
						<?php endif?>
						
					</div>
					
				</div>
				
				<div class="content" style="margin-left:98px;color:#0a7079 ">
					
					<form  action="" method="post" enctype="multipart/form-data">
						<div class="container" >
							
							<div class="container" style="margin-top:30px;">
								<img src="images/dog2.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
								<h3 style="display: inline; color:#0a7079;">送養寵物資料</h3>
								
								
								<div class="form-inline">
									<div class="form-group" >
										<label for="pet_name">名字：</label>
										<input type="pet_name" class="form-control" id="pet_name" placeholder="Enter Pet's name"  name="pet_name" <?php echo "{$required}";?>>
									</div>
									<div class="form-group" style="margin-left:90px;">
										<label for="gender">性別：</label>
										<label class="radio-inline">
											<input type="radio" name="pet_gender" id="pet_gender " checked="true" value="M">男
										</label>
										<label class="radio-inline">
											<input type="radio" name="pet_gender" id="pet_gender" value="F">女
										</label>
										
									</div>
								</div>
								<div class="form-inline">
									<div class="form-group" >
										<label for="pet_age">年齡：</label>
										<input type="pet_age" class="form-control" id="pet_age" placeholder="Enter Age" name="pet_age">
									</div>
									<div class="form-group" style="margin-left:90px;">
										<label for="sterilization">絕育：</label>
										<label class="radio-inline">
											<input type="radio" name="sterilization" checked="true" value=1>是
										</label>
										<label class="radio-inline">
											<input type="radio" name="sterilization" value=0>否
										</label>
										
									</div>
									
								</div>
								
								
								<div class="form-inline">
									<div class="form-group">
										<label for="region">地區：</label>
										<select  class="form-control" name="region"style="width:160px"  >
											<option>北部</option>
											<option>中部</option>
											<option>南部</option>
											<option>東部</option>
										</select>
									</div>
									<div class="form-group" style="margin-left:90px;">
										<label for="region">種類：</label>
										<select  class="form-control" name="pet_class"style="width:100px" >
											<option value="狗">狗</option>
											<option value="貓">貓</option>
											<option value="鼠">鼠</option>
											<option value="其他">其他</option>
										</select>
									</div>
									
								</div>
								
								<div class="form-inline">
									<div class="form-group"　>
										<label for="health">健康狀況：</label>
										<input style="width:471px;" type="address" class="form-control" name="healthy" placeholder="Please describe the health status" name="health">
									</div>
								</div>
								<div >
									<div class="form-group" style="width:555px;">
										<label for="other">個性與其他注意事項：</label>
										<textarea class="form-control" rows="5" id="other" name="description"></textarea>
									</div>
								</div>
								<br>
								
								<label for="fileud">檔案上傳：</label>
								<div class="row" style="margin-top:10px;">
									<div class="col-md-2">
										<div class="thumbnail">
											<img src="images/dogpic.png"  class="img-thumbnail" id="pic">
											<h5 style="text-align:center;font-weight: 600;">寵物大頭照</h5>
											<input type="file" name="main_pic"  id ="main_pic" size="20" style="font-size: 12px;margin-top:10px;" <?php echo "{$required}";?>/>

										</div>
									</div>
									<div class="col-md-2">
										<div class="thumbnail">
											<img src="images/life.png"  class="img-thumbnail" id="pic">
											<h5 style="text-align:center;font-weight: 600;">寵物生活照</h5>
											<input type="file" name="life_pic[]" id="life_pic[]" size="20" style="font-size: 12px;margin-top:10px;"multiple <?php echo "{$required}";?>/>
										</div>
									</div>
									<div class="col-md-2">
										<div class="thumbnail">
											<img src="images/document.png"  class="img-thumbnail" id="pic">
											<h5 style="text-align:center;font-weight: 600;">寵物檢查報告</h5>
											<input type="file" name="report_file[]" id="report_file[]" size="20" style="font-size: 12px;margin-top:10px;"multiple/>
										</div>
									</div>
									
								</div>
								
								
								<br>
								<br>
								
								<?php if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']):?>
									<button style="margin-left:232px;color:#0a7079" type="buttom" class="btn btn-default" onclick="alert('請登入帳戶！')">確認送出</button>
								<?php else:?>
									<button style="margin-left:232px;color:#0a7079" type="submit" name="submit" class="btn btn-default" >確認送出</button>
								<?php endif?>
								
							</div>
							
							
						</form>
						<?php include_once 'upload.php';?>

						<?php
							if(isset($_POST['pet_name'])&&isset($_POST['pet_age'])&&isset($_POST['pet_gender'])
								&&isset($_POST['pet_class'])&&isset($_POST['healthy'])&&isset($_POST['sterilization'])
								&&isset($_POST['description'])){
								
							$pet_name = $_POST['pet_name'];
							$pet_age = $_POST['pet_age'];
							$pet_gender = $_POST['pet_gender'];
							$pet_class = $_POST['pet_class'];
							$healthy = $_POST['healthy'];
							$sterilization = $_POST['sterilization'];
							$description = $_POST['description'];
							$crate_date = date("Y-m-d H:i:s");
							$main_pic = $_FILES['main_pic']['name'];

							//$life_pic[] = $_FILES["life_pic"]["name"] ;
						
							$sql = "INSERT INTO `pets` (`pet_name`, `pet_age`, `pet_gender`, `pet_class`, `healthy`, `sterilization`, `description`, `main_pic`, `crate_date`, `master_id`, `life_pic`)
									VALUE ('{$pet_name}', '{$pet_age}', '{$pet_gender}', '{$pet_class}', '{$healthy}', '{$sterilization}', '{$description}', '{$main_pic}', '{$crate_date}', {$id}, '{$life_pic_data}');";
							
							
							//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
							$result = mysqli_query($_SESSION['link'], $sql);
							if(mysqli_affected_rows($_SESSION['link']) > 0)
							{
								echo "<script>alert('成功送出！');</script>";
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
						
						</div> <!--contain end-->
						
						
						
					</div>
					
				</div>
			</div>
			<?php include_once 'footer.php';?>
		</body>
	</html>