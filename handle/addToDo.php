<?php

require_once '../App.php';

if($request->hasPost($request->post("submit"))){
$title=$request->clean($request->post("title"));
// echo $title;
$validation->validate("title",$title,["Required","Str"]);
$errors = $validation->getErrors();
// var_dump($errors);
if(empty($errors)){
  $stm= $conn->prepare("insert into todo (`title`) values(:title)");
  $stm->bindParam(":title",$title,PDO::PARAM_STR);
  $out=$stm->execute();
//   echo $out;
  if($out){
        $session->set("success","data inserted successfully");
        $request->header("../index.php");
  }else{
       $session->set("errors","errors");
       $request->header("../index.php");
  }
}else{
    $session->set("errors",$errors);
    $request->header("../index.php");
}

}else{
    $request->header("../index.php");
}