<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'db.php';
//定義一個 $datas 陣列變數，準備要放查詢的資料
$datas = array();
//將查詢語法當成字串，記錄在$sql變數中
$sql = "SELECT * FROM `pets`;";
//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
$result = mysqli_query($_SESSION['link'], $sql);
if($result){
if(mysqli_num_rows($result) > 0){
//取得的量大於0代表有資料
//while迴圈會根據查詢筆數，決定跑的次數
//mysqli_fetch_assoc 方法取得 一筆值
while ($row = mysqli_fetch_assoc($result)){
$datas[] = $row;
}
}
mysqli_free_result($result);

}
else{
echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($$_SESSION['link']);
}
if (empty($datas))
{

echo "查無資料";
}

?>
<?php
@session_start();

if (isset($_SESSION['login_name']) && isset($_SESSION['login_user_id'])) {
    
    $name =$_SESSION['login_name'];
    $id = $_SESSION['login_user_id'];
  }

$adopt_page= '1'; 
$p_data = 1;  //資料頁數
$grid = 6;  //每頁格數

if(isset($_GET['adopt_page'])){
    $adopt_page = $_GET['adopt_page'];
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
        font-family:  'Source Sans Pro',sans-serif,微軟正黑體;
        font-size: 12pt;
        font-weight: 300;
        color: #444444;
        height: auto;
      }
      hr {
      border:0; height:1px; background-color:#d4d4d4;
        color:#d4d4d4
      }
      .btn.dropdown-toggle:after {
    content: "";
    }
    .form-group{
      display: inline-table;
      margin-right: 13px;
    }
    .box {
        padding: 1em 0em;
        
        text-align: center;
        border-radius: 0px 0px 6px 6px;
      }
      .thumbnail{
        background-color: #eaeef1;
      }
      .thumbnail:hover{
        background-color: #c0e5ff;
    
      }
      #readmore{
        margin-bottom:15px;
      }
      #adopt{
        width:150px;
        height:150px;
        margin-top: 10px;
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
            <h3 style="display: inline; color:#0a7079">領養專區</h3>
            <hr >
          </div>
          
        </div>
        
        <div class="title">
          
          
          <div class="form-group">
            <label for="region">地區：</label>
            <select  class="form-control" id="region"style="width:150px" >
              <option>全部</option>
              <option>北部</option>
              <option>中部</option>
              <option>南部</option>
              <option>東部</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="region">種類：</label>
            <select  class="form-control" id="region"style="width:150px" >
              <option>全部</option>
              <option>狗</option>
              <option>貓</option>
              <option>老鼠</option>
              <option>其他</option>
            </select>
          </div>
          
          
          <div class="form-group">
            <label for="region">年紀：</label>
            <select  class="form-control" id="region"style="width:150px" >
              <option>全部</option>
              <option>幼年</option>
              <option>成年</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="region">性別：</label>
            <select  class="form-control" id="region"style="width:150px" >
              <option>全部</option>
              <option>男</option>
              <option>女</option>
              
            </select>
          </div>
          <div class="form-group">
            <br>
            <button class="btn btn-default" style="margin-left:15px;margin-top:4px ;font-size: 14px;">搜尋</button>
          </div>
          <br>
          <br>
          
          
          <div class="row">
          <?php foreach ($datas as $key => $row): ?>
            <?php switch ($row['pet_gender']) {
            case 'M':
            $gender = '男';
            break;
            
            default:
            $gender = '女';
            break;
            }?>

            <?php 

              if ($key >= $grid){
              
                $p_data = floor($key/$grid) +1;}
              
            ?>

            <?php if($adopt_page==$p_data):?>
              <div class="col-md-4">
                <center>
                <div class="thumbnail">
                  <img src=<?php echo "upload/main_pic/",$row['main_pic'];?>  class="img-thumbnail" id="adopt">
                  <h5 style="text-align:center;"><?php echo "名字: ",$row['pet_name'];?> </h5>
                  <h5 style="text-align:center;"><?php echo "年齡: ",$row['pet_age'];?></h5>
                  <h5 style="text-align:center;"><?php echo "性別: ",$gender;?></h5>
                  <a href="petdata.php?p=<?php echo $row['pet_id']; ?>"><button type="button" class="btn btn-info btn-md" id="readmore" >Read More</button> </a>
                  
                </div>
                </center>

              </div>

            <?php endif?>

            <?php endforeach; ?>
    

            </div>
            <br>
            <center>
            <ul class="pagination">
              <?php 

              for($i=1;$i<=floor($key/$grid)+1;$i++){
                if ($adopt_page == $i) {
                  $active = "active";
                }else{
                  $active = "";
                }

                echo "<li class='{$active}'><a href='adopt.php?adopt_page={$i}'>{$i}</a></li>";
              }
              

              ?>

            </ul>
            </center>
          
          
          
        </div>
        
      </div>
    </div>
    <?php
    //結束mysql連線
    mysqli_close($_SESSION['link']);
    ?>

    <?php include_once 'footer.php';?>
  </body>
</html>