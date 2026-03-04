<?php
$serverName = "localhost";
$userName = "root";
$password = "Root@1234";
$mydb = "userData";

//    connect the database 
$conn = new mysqli($serverName, $userName, $password, $mydb);

if ($conn->connect_error) {
    die("Database error:" . $conn->connect_error);
}

$sql = "CREATE TABLE  IF NOT EXISTS student(
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     firstName VARCHAR(50) NOT NULL,
     lastName  VARCHAR(50) NOT NULL,
     email VARCHAR(50) ,
     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     )";

// if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
//     $firstName=htmlspecialchars($_POST["FirstName"]);
//     $lastName=htmlspecialchars($_POST["Lastname"]);
//     $email=htmlspecialchars($_POST["email"]);


//     echo "firstName:",$firstName;
//     echo "lastName:",$lastName;
//     echo "email:",$email;
// }

if ($conn->query($sql) === True) {
    echo "table connected sucessfully";
} else {
    echo "Error creating table:" . $conn->connect_error;
}

$sql1 = "INSERT INTO student(firstName,lastName,email)
        VALUES ('Sudarshan','khatri','khatrisudarshan360@gmail.com'),
        ('John', 'Doe', 'john@example.com'),
('Mary', 'Moe', 'mary@example.com'),
('Julie', 'Dooley', 'julie@example.com')";

if ($conn->query($sql1) === True) {
    echo "Data inserted sucessfully!!!";
} else {
    echo "Error:", $conn->connect_error;
}

$conn->close();
