<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_REQUEST['username'];
   $pass=$_REQUEST['pass'];
    $uid="admin";
$p="admin123";

if($uid==$id && $p==$pass){
    include('admin.html');
}
}


?>