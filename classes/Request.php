<?php 
namespace php\oop_project\To_Do_List\classes;
class Request{

    public function get($key=null){
        return isset($_GET[$key])?$_GET[$key]:null;
    }

    public function post($key=null){
        return isset($_POST[$key])?$_POST[$key]:null;
    }

    public function hasPost($key){
        return isset($key);
    }

    // clean
    public function clean($key){
        return trim(htmlspecialchars($key));
    }
    public function header($file){
        header("location:$file");
    }
    public function methodCheck(){
        return $_SERVER['REQUEST_METHOD'];
    }
   
}


?>