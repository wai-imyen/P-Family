<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'db.php';

//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once 'functions.php';

@session_start();

@$name =$_SESSION['login_name'];
@$id = $_SESSION['login_user_id'];

$petdata = get_pet_data($_GET['p']);
$userdata = get_user_data($petdata['master_id']);


switch ($petdata['sterilization']) {
        case 1:
          $sterilization = '是';
          break;
        
        default:
          $sterilization = '否';
          break;
          }

switch ($userdata['gender']) {
        case 'M':
          $gender = '男';
          break;
        
        default:
          $gender = '女';
          break;
      }
switch ($petdata['pet_gender']) {
        case 'M':
          $pet_gender = '男';
          break;
        
        default:
          $pet_gender = '女';
          break;
      }

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
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
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
		font-family: 'Source Sans Pro',sans-serif,微軟正黑體;
		font-size: 12pt;
		font-weight: 600;
		color:#0a7079;

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
			<div class="title row">
			<div class="col-md-10">
				<img src="images/icon-dog.png" style="width:30px;height:30px;margin-right:6px;margin-bottom:7px;">
				<h3 style="display: inline; color:#0a7079"><?php echo $petdata['pet_name']; ?>の基本資料</h3>
				</div>
				<div class="col-md-2">
				<button style="display: inline;color:#0a7079;" type="submit" class="btn btn-default" onclick="alert('去看看領養程序吧!!')">我要領養</button>
				
			</div>


			</div>
			<hr>
		
		</div>


		
			<div class="content">

				
				<div class="row">
				<div class="col-md-4"><img src="<?php echo "upload/main_pic/", $petdata['main_pic']; ?>" class="img-thumbnail" width="250" height="190"></div>
				<div class="col-md-4">
					
					<div class="row">姓名：<?php echo $petdata['pet_name']; ?></div>
					<br>
					<div class="row">性別：<?php echo $pet_gender; ?></div>
					<br>
					<div class="row">地區：<?php echo "北部"; ?></div>
					<br>
					<div class="row">聯絡人姓名：<?php echo $userdata['name']; ?></div>
					<br>
					<div class="row">信箱：<?php echo $userdata['email']; ?></div>
					<br>
					<div class="row">地址：<?php echo $userdata['address']; ?></div>
					
					
				</div>	
				<div class="col-md-4">
				
					<div class="row">年紀：<?php echo $petdata['pet_age']; ?></div>
					<br>
					<div class="row"><?php echo "絕育： ",$sterilization; ?></div>
					<br>
					<div class="row">健康狀況：<?php echo $petdata['healthy']; ?></div>
					<br>
					<div class="row">聯絡人性別：<?php echo $gender; ?></div>
					<br>
					<div class="row">電話：<?php echo $userdata['phone']; ?></div>
				</div>
				</div>
					
				<br>
					<div class="row">
						<br>
						<div class="col-md-12" style="height:100px;width:700px"><h4><strong><?php echo $petdata['pet_name']; ?>の個性與注意事項</strong></h4><p style="width:600px;line-height:30px;margin-left:30px"><?php echo $petdata['description']; ?></p></div>
					</div>
				
				<div>

					<?php 

					$life_pic=explode(", ",$petdata['life_pic']);

					$pic_count = count($life_pic);

					?>

					
						<br>
						<h4><strong><?php echo $petdata['pet_name']; ?>の生活照</strong></h4>
						<br>
						<center>
						<div class=" " style="width: 70%;height:70%;">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  			<!-- Indicators -->
			  				<ol class="carousel-indicators" >
			    				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    				<?php for($i=1 ;$i<$pic_count;$i++){

			    					echo "<li data-target='#myCarousel' data-slide-to='{$i}'></li>";
			    					
			    				}

			    				?>
			    				
			  				</ol>
			  				<!-- Wrapper for slides -->
			  				<div class="carousel-inner" role="listbox" >
			    				<div class="item active" >
			      					<img src=<?php echo "upload/life_pic/{$life_pic[0]}";?>>
			    				</div>
			    				<?php for($i=1 ;$i<$pic_count;$i++){
			    					echo "<div class='item'>";
			    					echo "<img  src='upload/life_pic/{$life_pic[$i]}'>";
			    					echo "</div>";
			    				}?>
			    				
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
						</div>
						</center>
				
					
				</div>



				
			</div>
			
		
		
	</div>
</div>	
		<?php include_once 'footer.php';?>

</body>
</html>