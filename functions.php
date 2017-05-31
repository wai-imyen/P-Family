<?php 
@session_start();

/**
 * 取得竉物資料
 */
function get_pet_data($pet_id){
	$result = null;

	$sql = "SELECT * FROM `pets` WHERE `pet_id` = $pet_id;";	

	//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
	$query = mysqli_query($_SESSION['link'], $sql);

	//如果請求成功
	if($query){
		 //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
		if(mysqli_num_rows($query)==1){

			$result = mysqli_fetch_assoc($query);
		}

		mysqli_free_result($query);

	}

	else
	{
	  echo "{$sql} 語法執行失敗，錯誤訊息：" ,mysqli_error($_SESSION['link']);
	}

	//回傳結果
	return $result;

}

function get_user_data($user_id){
	$result = null;

	$sql = "SELECT * FROM `user` WHERE `user_id` = $user_id;";	

	//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
	$query = mysqli_query($_SESSION['link'], $sql);

	//如果請求成功
	if($query){
		 //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
		if(mysqli_num_rows($query)==1){

			$result = mysqli_fetch_assoc($query);
		}

		mysqli_free_result($query);

	}

	else
	{
	  echo "{$sql} 語法執行失敗，錯誤訊息：" ,mysqli_error($_SESSION['link']);
	}

	//回傳結果
	return $result;

}


/**
 * 檢查資料庫有無該使用者名稱
 */
function verify_user($username, $password)
{
  //宣告要回傳的結果
  $result = null;
  //先把密碼用md5加密
  //$password = md5($password);
  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `user` WHERE `username` = '{$username}' AND `password` = '{$password}'";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query)
  {
    //使用 mysqli_num_rows 回傳 $query 請求的結果數量有幾筆，為一筆代表找到會員且密碼正確。
    if(mysqli_num_rows($query) == 1)
    {
      //取得使用者資料
      $user = mysqli_fetch_assoc($query);
      
      //在session李設定 is_login 並給 true 值，代表已經登入
      $_SESSION['is_login'] = TRUE;
      //紀錄登入者的id，之後若要隨時取得使用者資料時，可以透過 $_SESSION['login_user_id'] 取用
      $_SESSION['login_user_id'] = $user['user_id'];
      $_SESSION['login_name'] = $user['name'];
       
      //回傳的 $result 就給 true 代表驗證成功
      $result = true;
    }
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}



?>