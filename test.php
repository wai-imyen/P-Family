<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
						<form action="" method="post" enctype="multipart/form-data">
							<label for="fileud">檔案上傳：</label>
							<div class="row" style="margin-top:10px;">
								<div class="col-md-2">
									<div class="thumbnail">
										<img src="images/dogpic.png"  class="img-thumbnail" id="pic">
										<h5 style="text-align:center;font-weight: 600;">寵物大頭照</h5>
										<input type="file" name="file"  id ="file" size="20" style="font-size: 12px;margin-top:10px;" />

									</div>
								</div>
								<div class="col-md-2">
									<div class="thumbnail">
										<img src="images/life.png"  class="img-thumbnail" id="pic">
										<h5 style="text-align:center;font-weight: 600;">寵物生活照</h5>
										<input type="file" name="upload" size="20" style="font-size: 12px;margin-top:10px;"multiple/>
									</div>
								</div>
								<div class="col-md-2">
									<div class="thumbnail">
										<img src="images/document.png"  class="img-thumbnail" id="pic">
										<h5 style="text-align:center;font-weight: 600;">寵物檢查報告</h5>
										<input type="file" name="upload" size="20" style="font-size: 12px;margin-top:10px;"multiple/>
									</div>
								</div>
								
							</div>
<button style="margin-left:232px;color:#0a7079" type="submit" name="submit" class="btn btn-default" >確認送出</button>
</form>

</body>
</html>
	<?php include_once 'upload.php';?>