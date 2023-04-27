<?php
require_once '../App.php';

if($request->hasPost($request->post("submit")) && $request->hasPost("id")){
$id=$request->get("id");
$title= $request->clean($request->post("title"));

$validation->validate("title",$title,["Required","Str"]);
$errors=$validation->getErrors();
if(empty($errors)){
$stm= $conn->prepare("select `title` from todo where id =:id");
$stm->bindParam(":id",$id);
$stm->execute();
if($stm->rowcount()>0){
$stm=$conn->prepare("update todo set `title`=:title where id =:id");
$stm->bindParam(":title",$title);
$stm->bindParam(":id",$id);
$out= $stm->execute();
if($out){
    $session->set("success","data updated succeessfuly");
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
    $session->set("errors",$errors);
    $request->header("../edit.php?id=$id");
}
}else{
    $request->header("../index.php");
}