<?php 
//取得目前檔案的名稱。透過$_SERVER['PHP_SELF']先取得路徑
$current_file = $_SERVER['PHP_SELF'];
//echo $current_file; //查看目前取得的檔案完整
//然後透過 basename 取得檔案名稱，加上第二個參數".php"，主要是將取得的檔案去掉 .php 這副檔名稱
$current_file = basename($current_file );




switch ($current_file) {
	case 'process.php':
		$index = 1;
		break;
	case 'adopt.php':
	case 'petdata.php':
		$index = 2;
		break;
	case 'adopted.php':
		$index = 3;
		break;
	case 'notice.php':
		$index = 4;
		break;
	case 'lost.php':
		$index = 5;
		break;
	case 'found.php':
		$index = 6;
		break;
	case 'takemehome.php':
		$index = 7;
		break;
	default:
		$index = 0;
		break;


}
	
?>
<div id="header">
	<div id="logo">
		<img src="images/dog1.png"  style="width:70%;height:70%;" />
		
		<h1><a href="index.php">P_Family</a></h1>
		
		<?php
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'])

			{
				$name =$_SESSION['login_name'];
				$id = $_SESSION['login_user_id'];
				echo "<h5 style='margin-top:20px;color:#5a60ba;'><u >{$name} 歡迎登入</u>！</h5>";
			}
			else{
				
				
			}
		?>
		
		
	</div>
	<div id="menu" >
				
				<ul>
					<a href="process.php"><li><button class="button" <?php echo ($index == 1)?'id="current2"':'id="btn2"';?>>　認養流程　</button></li></a>
					<a href="adopt.php"><li><button  class="button" <?php echo ($index == 2)?'id="current2"':'id="btn2"';?>>　領養專區　</button></li></a>
					<a href="adopted.php"><li><button  class="button" <?php echo ($index == 3)?'id="current2"':'id="btn2"';?>>　送養專區　</button></li></a>
					<a href="notice.php"><li><button  class="button" <?php echo ($index == 4)?'id="current2"':'id="btn2"';?>>飼養注意事項</button></li></a>
					
					
					
				</ul>
				
	</div>
</div>


