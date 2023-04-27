<?php 
// namespace php\oop_project\To_Do_List\classes\Validation;

use php\oop_project\To_Do_List\classes\Validation\Validator_Interface;


class Str implements Validator_Interface{
    public function check($key,$value){
        if(is_numeric($value)){
            echo "$key must be string";
        }else{
            return false;
        }
    }

}

?>