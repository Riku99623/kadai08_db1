<?php

$uri = $_SERVER['REQUEST_URI'];

if(strpos($uri, 'imageDetail.php') !== false){
   $imageId = $_GET['id'];
   $sql = "SELECT * FROM gs_bm_table WHERE id =" . $imageId;

   $sth = $pdo->prepare($sql);
   $sth->execute();
   $data['image'] = $sth->fetch();

}else{
$sql = "SELECT * FROM gs_bm_table ORDER BY indate DESC";

$sth = $pdo->prepare($sql);
$sth->execute();
$data = $sth->fetchAll();
}


return $data;