<?php 
namespace php\oop_project\To_Do_List\classes\Validation;

use php\oop_project\To_Do_List\classes\Validation\Required;
use php\oop_project\To_Do_List\classes\Validation\Str;
use php\oop_project\To_Do_List\classes\Validation\Validation;

interface Validator_Interface{
    public function check($key,$value);
}
?>