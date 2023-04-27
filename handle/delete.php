<?php
require_once '../App.php';

if($request->hasPost("id")){
$id=$request->get("id");
$stm= $conn->prepare("select `title` from todo where id =:id");
$stm->bindParam(":id",$id);
$stm->execute();
if($stm->rowcount()>0){
$stm=$conn->prepare("delete from todo where id =:id");
$stm->bindParam(":id",$id);
$out= $stm->execute();

if($out){
    $session->set("success","data deleted succeessfuly");
    $request->header("../index.php");
}else{
    $session->set("errors",["not founded"]);
    $request->header("../index.php");
}

}else{
    $session->set("errors",["errors"]);
    $request->header("../index.php");
}

}else{
    $request->header("../index.php");
}