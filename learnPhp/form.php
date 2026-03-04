<?php
   $serverName="localhost";
   $userName="root";
   $password="Root@1234";
   $mydb="userData";

//    connect the database 
    $conn=new mysqli($serverName,$userName,$password,$mydb);

    if($conn->connect_error){
        die("Database error:".$conn->connect_error);
    }

    $sql="CREATE TABLE  IF NOT EXISTS student(
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     firstName VARCHAR(50) NOT NULL,
     lastName  VARCHAR(50) NOT NULL,
     email VARCHAR(50) ,
     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     )";
    
    if($conn->query($sql)===True){
        echo "table connected sucessfully";
    }else{
        echo "Error creating table:" .$conn->connect_error;
    }

    $conn->close();
?>