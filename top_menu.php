
<?php
	$page = '1';
	$title = "首頁";
	
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
	
	<a href="index.php?page=1"><button id=<?php if($page=='1'){echo "btn1";}else{echo "btn1";}?> class="button">首　頁</button></a>
	<button id="space" class="button">　</button>
</ul>