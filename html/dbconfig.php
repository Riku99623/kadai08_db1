<?php

//エラー表示
ini_set("display_errors", 1);

try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=    ;charset=utf8;host=localhost',' ','');
  } catch (PDOException $e) {
  exit('DBError:'.$e->getMessage());
}