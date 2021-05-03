<?php
session_start();
include("../functions.php");
check_session_id();


if(
  !isset($_SESSION['username']) || $_SESSION['username']=='' ||
  !isset($_POST['mission_goal']) || $_POST['mission_goal']=='' ||
  !isset($_POST['mission']) || $_POST['mission']=='' ||
  !isset($_POST['deadline']) || $_POST['deadline']==''
){
  exit('ParamError');
}


$name = $_SESSION['username'];
$mission_goal = $_POST['mission_goal'];
$mission = $_POST['mission'];
$deadline = $_POST['deadline'];

 // DB接続
$pdo = connect_to_db();         

$sql = 'INSERT INTO mission_table(id, name, mission, mission_goal, deadline, created_at, updated_at) 
        VALUES(NULL, :name, :mission, :mission_goal, :deadline, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
// バインド変数に格納（セキュリティ）
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //数値だった場合、INT(INTEGER:整数)
$stmt->bindValue(':mission', $mission, PDO::PARAM_STR);
$stmt->bindValue(':mission_goal', $mission_goal, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR); 

$status = $stmt->execute(); // SQLを実行



if ($status==false) {
  $error = $stmt->errorInfo(); // データ登録失敗次にエラーを表示 exit('sqlError:'.$error[2]);
  } else {
  // 登録ページへ移動
    header('Location:mission_read.php');
  }
