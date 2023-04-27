<?php 

// namespace php\oop_project\To_Do_List\classes\Validation;

use php\oop_project\To_Do_List\classes\Validation\Validator_Interface;
require_once 'Validator_Interface.php';

class Required implements Validator_Interface{
    public function check($key,$value){
        if(empty($value)){
            echo "$key is required";
        }else{
          return false;
        }
    }

}
?>