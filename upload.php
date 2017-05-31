<?php
if(isset($_FILES['main_pic'])&&isset($_FILES['life_pic'])&&isset($_FILES['report_file'])){

	if($_FILES['main_pic']['error']>0){

	  exit("檔案上傳失敗！");//如果出現錯誤則停止程式

	}else{
		  move_uploaded_file($_FILES['main_pic']['tmp_name'],'upload/main_pic/'.$_FILES['main_pic']['name']);//複製檔案
		/*echo '<a href="main_pic/'.$_FILES['main_pic']['name'].'">upload/'.$_FILES['main_pic']['name'].'</a>';//顯示檔案路徑
		echo "檔案名稱: " . $_FILES["main_pic"]["name"]."<br/>";
		echo "檔案類型: " . $_FILES["main_pic"]["type"]."<br/>";
		echo "檔案大小: " . ($_FILES["main_pic"]["size"] / 1024)." Kb<br />";
		echo "暫存名稱: " . $_FILES["main_pic"]["tmp_name"];*/
		}
		?>
		<?php

		$life_pic_data="";
		$i=count($_FILES["life_pic"]["name"]);
		for ($j=0 ; $j<$i ; $j++)
		{

			  move_uploaded_file($_FILES["life_pic"]["tmp_name"][$j],'upload/life_pic/'.$_FILES['life_pic']['name'][$j]);
			  $life_pic[$j] = $_FILES["life_pic"]["name"][$j];
			  if ($j==0) {
			    $life_pic_data = $life_pic[$j];
			  }else{

			    $life_pic_data = $life_pic_data.", ".$life_pic[$j];
			  }
		  

		 
		}
		?>
		<?php

		$a=count($_FILES["report_file"]["name"]);
		for ($b=0 ; $b<$a ; $b++)
		{

			if(move_uploaded_file($_FILES["report_file"]["tmp_name"][$b],'upload/report_file/'.$_FILES['report_file']['name'][$b]) )
			{

				}
			else
			{
			//echo "<script>alert('成功送出！');</script>";
				}
		}
}
?>