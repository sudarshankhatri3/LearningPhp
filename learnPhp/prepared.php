<?php
 $serverName="localhost";
 $userName="root";
 $password="Root@1234";
 $dbname="userData";

 $conn=new mysqli($serverName,$userName,$password,$dbname);

 if($conn->connect_error){
    echo "Error :".$conn->connect_error;
 }

 $sql="INSERT INTO student(firstName,lastName,email) VALUES(?,?,?)";
 $stmt=$conn->prepare($sql);
 if($stmt){
    $stmt->bind_param("sss",$firstName,$lastName,$email);

    $firstName="syam";
    $lastName="khatri";
    $email="khatirus@gmail.com";
    $stmt->execute();


    $firstName="laxxu";
    $lastName="khatri";
    $email="laxxu@gmail.com";
    $stmt->execute();

    
 }


 $conn->close();
 echo "all happen";


?>