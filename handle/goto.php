<?php
require_once '../App.php';

if($request->hasPost($request->get("name"))&& $request->hasPost($request->get("id"))){

$name=$request->get("name");
$id=$request->get("id");

$stm= $conn->prepare("select `title` from todo where id =:id");
$stm->bindParam(":id",$id);
$stm->execute();
if($stm->rowcount()>0){
$stm=$conn->prepare("update todo set `status`=:name where id =:id");
$stm->bindParam(":name",$name);
$stm->bindParam(":id",$id);
$out= $stm->execute();

if($out){
    $session->set("success","data transfered succeessfuly");
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