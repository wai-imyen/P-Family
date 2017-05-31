<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，因為此檔案放在 admin 裡，要找到 db.php 就要回上一層 ../php 裡面才能找到
require_once 'db.php';
//如過有 $_SESSION['is_login'] 這個值，以及 $_SESSION['is_login'] 為 true 都代表已登入
if(isset($_SESSION['is_login']) && $_SESSION['is_login'])
{
//直接轉跳到 index.php 後端首頁
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>P_Family - 寵物領養平台</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    
    <link rel="shortcut icon" href="../images/favicon.ico">

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
      
    </style>
  </head>
  <body>
    <!-- 頁首 -->
    <?php
      //無需選單
    //include_once 'menu.php';
    ?>
    <!-- 網站內容 -->
    <center>
    <div id="loginpage" class="container">
      <div id="login">
        <div >
          
          <a href="index.php"><img src="images/dog1.png" alt="" style="width:46%;height:46%;" /></a>
          <h1><a>Login</a></h1>

          <div>

            <hr>
            <form  class="login">
             
                <h4>帳號: </h4><input type="text" class="form-control" style="width:200px;"name="username" id="username"  placeholder="請輸入您的帳號" required>
                
                <h4>密碼: </h4><input type="password" class="form-control" style="width:200px;" name="password" id="password"  placeholder="請輸入您的密碼" required>
                <br><br>
                <button type="submit" class="btn btn-default">　登入　</button>
                <a href="register.php" ><button type="button" style="color:black;" class="btn btn-default">　註冊　</button></a>
                
            </form>
            
          </div>
        </div>
      </div>
    </div>
    </center>
    <!-- 在表單送出前，檢查確認密碼是否輸入一樣 -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    //當文件準備好時，
    $(document).on("ready", function() {
    //當表單 sumbit 出去的時候
    $("form.login").on("submit", function(){
    //使用 ajax 送出 帳密給 verify_user.php
     $.ajax({
    type : "POST",
    url : "verify_user.php", 
    data : {
    un : $("#username").val(), //使用者帳號
    pw : $("#password").val() //使用者密碼
    },
    dataType : 'html' //設定該網頁回應的會是 html 格式
    }).done(function(data) {
    //成功的時候
    console.log(data);
    if(data == "yes")
    {
    //註冊新增成功，轉跳到登入頁面。
    window.location.href = "index.php"; //因為目前的 login.php 跟後端的 index.php 首頁在同一資料夾，所以直接叫他就好
    }
    else
    {
    alert("登入失敗，請確認帳號密碼");
    }
    
    }).fail(function(jqXHR, textStatus, errorThrown) {
    //失敗的時候
    alert("有錯誤產生，請看 console log");
    console.log(jqXHR.responseText);
    });
      //回傳 false 為了要阻止 from 繼續送出去。由上方ajax處理即可
    return false;
            });
    });
    </script>
    <!-- 頁底 -->
    <br><br>
    <?php
    include_once 'footer.php';
    ?>
  </body>
</html>