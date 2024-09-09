<?php

$uri = $_SERVER['REQUEST_URI'];

if(strpos($uri, 'imageDetail.php') !== false){
   $imageId = $_GET['id'];
   $sql = "SELECT * FROM tablename WHERE id =" . $imageId;

   $sth = $pdo->prepare($sql);
   $sth->execute();
   $data['image'] = $sth->fetch();

}else{
$sql = "SELECT * FROM tablename ORDER BY indate DESC";

$sth = $pdo->prepare($sql);
$sth->execute();
$data = $sth->fetchAll();
}


return $data;