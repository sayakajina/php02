<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

// データベース接続関数
function db_conn(){
    try {
      $db_name = "sayakajina_gs_db";    //データベース名
      $db_id   = "sayakajina";      //アカウント名
      $db_pw   = "sayaka0904";      //パスワード：XAMPPはパスワードなしMAMPのパスワードはroot
      $db_host = "localhost"; //DBホスト
      $db_port = "3306"; //XAMPPの管理画面からport番号確認
      $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host.';port='.$db_port.'', $db_id, $db_pw);
      return $pdo;//ここを追加！！
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}
