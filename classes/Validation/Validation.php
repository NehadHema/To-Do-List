<?php 

namespace php\oop_project\To_Do_List\classes\Validation;
// require_once 'Required.php';
class Validation{
    private $errors=[];
    public function validate($key,$value,$rules){
        foreach($rules as $rule){
            $object = new $rule;
           $error= $object->check($key,$value);
           if($error != false){
            $this->errors[]=$error;
           }
        }
    }

    public function getErrors(){
        return $this->errors;
    }
}
?>