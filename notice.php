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
		font-weight: 500;
		color: #444444;

	}
	hr {
		border:0; height:1px; background-color:#d4d4d4;
		color:#d4d4d4	
	}
	dt,dd{

		margin-bottom: 7px;
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
				<h3 style="display: inline; color:#0a7079">飼養注意事項</h3>
				<br>
				<br>
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#dog">Dog</a></li>
					<li><a data-toggle="tab" href="#cat">Cat</a></li>
					<li><a data-toggle="tab" href="#hamsters">Hamsters</a></li>
					<li><a data-toggle="tab" href="#rabbit">Rabbit</a></li>
				</ul>
				<div class="tab-content">
					<div id="dog" class="tab-pane fade in active">
					<h3>Dogs</h3>
					<img src="images\dog2.jpg" class="img-rounded" alt="Dog" width="790" height="236">
					<div class="content" style="margin-left:50px;margin-top:30px;">
						<h4>一、基本要求</h4>
							<dl>
								<dt>每天陪伴狗狗</dt>
								<dd>　　- 狗狗是人類最好的朋友，每天撥空陪伴或帶牠去散步是必要的。</dd>
								<dt>要有經濟基礎</dt>
								<dd>　　- 狗狗的日常花費或定期檢查都是不小的開銷，有固定收入再養狗狗才是負責任的態度。</dd>
								<dt>有責任感</dt>
								<dd>　　- 寵物就像家人一樣，你是牠的一輩子。</dd>
								<dt>家人同意</dt>
								<dd>　　- 全家人都能夠接納狗狗，這樣狗狗才會幸福。</dd>
								<dt>住處能養狗</dt>
								<dd>　　- 有些公寓大樓不適合養狗，帶牠回家之前必須先評估住處狀況。</dd>
							</dl>			
						<h4>二、用具</h4>
							<dl>
								<dt>頸圈牽繩</dt>
								<dd>　　- 平常帶狗狗出去散步，必須要有適合狗狗的牽繩，才能確保狗狗的安全。</dd>
								<dt>飲食器具</dt>
								<dd>　　- 吃飯皇帝大，飲食器具要好好挑，根據狗狗的體型挑選適合的器具。</dd>
								<dt>清潔用具</dt>
								<dd>　　- 用來洗滌狗狗的飲食器具、窩。</dd>
								<dt>玩具</dt>
								<dd>　　- 狗狗喜歡的飛盤、球之類的玩具是一定要準備的唷!</dd>
								<dt>梳子、指甲剪</dt>
								<dd>　　- 定期幫狗狗梳理毛髮、剪指甲。</dd>
							</dl>
					</div>
				</div>
				<div id="cat" class="tab-pane fade">
      				<h3>Cats</h3>
      				<img src="images\cat.jpg" class="img-rounded" alt="Cat" width="790" height="236">
      				<div class="content" style="margin-left:50px;margin-top:30px;">
						<h4>一、基本要求</h4>
							<dl>
								<dt>貓咪年齡有差異</dt>
								<dd>　　- 成年貓咪比較獨立，適合新手或有孩子和老年人的家庭。</dd>
								<dd>　　- 幼貓比較活潑好動，需要費心照顧，適合有養貓經驗的人飼養。</dd>
								<dt>要有經濟基礎</dt>
								<dd>　　- 貓咪的日常花費或定期檢查都是不小的開銷，有固定收入再養貓咪才是負責任的態度。</dd>
								<dt>有責任感</dt>
								<dd>　　- 寵物就像家人一樣，你是牠的一輩子。</dd>
								<dt>家人同意</dt>
								<dd>　　- 全家人都能夠接納貓咪，這樣貓咪才會幸福。</dd>
								<dt>住處能養貓</dt>
								<dd>　　- 有些住處不適合養貓，帶牠回家之前必須先評估。</dd>
							</dl>			
						<h4>二、用具</h4>
							<dl>
								<dt>外出籠</dt>
								<dd>　　- 帶貓咪出門時，必須要有適合貓咪體型的外出籠，才能確保貓咪的安全。</dd>
								<dt>飲食器具</dt>
								<dd>　　- 吃飯皇帝大，飲食器具要好好挑，建議使用瓷碗或不銹鋼材質。</dd>
								<dt>清潔用具</dt>
								<dd>　　- 用來洗滌貓咪的飲食器具、窩。</dd>
								<dt>貓砂、貓砂盆、貓便鏟</dt>
								<dd>　　- 給貓咪一個隱密的空間解決大小便。</dd>
								<dt>貓抓板</dt>
								<dd>　　- 讓貓咪磨爪子，請勿使用巧拼。</dd>
								<dt>蚤梳、指甲剪</dt>
								<dd>　　- 定期幫貓咪梳理毛髮、剪指甲。</dd>
							</dl>
					</div>
    			</div>
    			<div id="hamsters" class="tab-pane fade">
     				<h3>Hamsters</h3>
      				<img src="images\hamster.jpg" class="img-rounded" alt="Hamster" width="790" height="236">
      				<div class="content" style="margin-left:50px;margin-top:30px;">
						<h4>一、基本要求</h4>
							<dl>
								<dt>每天陪伴</dt>
								<dd>　　- 每天陪老鼠玩一會兒，是增進感情的好方法。</dd>
								<dt>要有經濟基礎</dt>
								<dd>　　- 老鼠的日常花費或緊急治療都是不小的開銷，有固定收入再養老鼠才是負責任的態度。</dd>
								<dt>有責任感</dt>
								<dd>　　- 寵物就像家人一樣，你是牠的一輩子。</dd>
								<dt>家人同意</dt>
								<dd>　　- 全家人都能夠接納老鼠，這樣老鼠才會幸福。</dd>
							</dl>			
						<h4>二、用具</h4>
							<dl>
								<dt>適合的籠子</dt>
								<dd>　　- 每種老鼠的體型都不一樣，選擇適合的籠子，再帶牠回家。</dd>
								<dt>飲食器具</dt>
								<dd>　　- 吃飯皇帝大，必備鼠用飼料以及水壺。</dd>
								<dt>清潔用具</dt>
								<dd>　　- 用來洗滌貓咪的飲食器具、窩。</dd>
								<dt>墊料及啃木</dt>
								<dd>　　- 墊料可以使用木屑或紙巾，啃木可以讓老鼠紓解情緒。</dd>
							</dl>
						<h4>三、超級重要</h4>
							<dl>
								<dt>倉鼠絕對不能用水洗澡</dt>
								<dd>　　- 用水洗澡，倉鼠會嚇死，必須用鼠砂清潔。</dd>
							</dl>
					</div>
    			</div>
    			<div id="rabbit" class="tab-pane fade">
      				<h3>Rabbits</h3>
      				<img src="images\rabbit.jpg" class="img-rounded" alt="Rabbit" width="790" height="236">
      				<div class="content" style="margin-left:50px;margin-top:30px;">
						<h4>一、基本要求</h4>
							<dl>
								<dt>每天陪伴</dt>
								<dd>　　- 每天陪兔子玩一會兒，是增進感情的好方法。</dd>
								<dt>要有經濟基礎</dt>
								<dd>　　- 兔子的日常花費或緊急治療都是不小的開銷，有固定收入再養兔子才是負責任的態度。</dd>
								<dt>有責任感</dt>
								<dd>　　- 寵物就像家人一樣，你是牠的一輩子。</dd>
								<dt>家人同意</dt>
								<dd>　　- 全家人都能夠接納兔子，這樣兔子才會幸福。</dd>
							</dl>			
						<h4>二、用品</h4>
							<dl>
								<dt>適合的籠子</dt>
								<dd>　　- 選擇大而舒適的籠子，記得底部縫隙不能太大。</dd>
								<dt>飲食器具</dt>
								<dd>　　- 吃飯皇帝大，食盆必須防翻或固定的，兔子還需要草架。</dd>
								<dt>清潔用具</dt>
								<dd>　　- 用來洗滌貓咪的飲食器具、窩。</dd>
								<dt>磨牙用品</dt>
								<dd>　　- 兔子的牙齒若是太常會影響進食，購買適合的磨牙用品。</dd>
								<dt>兔糧、草</dt>
								<dd>請購買兔子專用糧食，吃草可以讓兔子磨牙、攝取營養。</dd>
							</dl>
					</div>
    			</div>
				<hr>

			</div>
		
		</div>


		
			
			
		
		
	</div>
</div>
</div>

		<?php include_once 'footer.php';?>
</body>
</html>