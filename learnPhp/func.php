<?php
    function greet($name){
       echo "my name is $name";
    }

    greet("sudarshan khatri");

    $greet=function ($age){
        return "my age is $age";
    };
    echo $greet(34);
    $data=[1,2,3,4,5,5,6,7,8,9];
    $result=array_map(fn($num)=>$num+2,$data);
    print_r($result);


?>