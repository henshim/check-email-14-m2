<?php
function checkEmail($email){
    $parttern='/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    if (preg_match($parttern)){
        echo 'email valid<br>';
    }else{
        echo 'email invalid<br>';
    }
}

checkEmail('@gmail.com');
checkEmail('abc@hotmail.com');
