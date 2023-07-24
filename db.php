<?php 

//create database
$con = new mysqli("", "root");

if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS weeb_shop";
if($con->query($sql) === TRUE){
    echo "Database created successfully ";
}else{
    echo "Error creating database: " . $con->error;
}


//create table
$con = mysqli_connect("", "root", "", "weeb_shop");

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    _email VARCHAR(50) NOT NULL,
    _password VARCHAR(25) NOT NULL
)";

if($con->query($sql) === TRUE){
    echo "Table 'users' created successfully";
}else{
    echo "Error creating table: " . $con->error;
}

$sql = "INSERT INTO users(_email, _password)VALUES(
    'hello@gmail.com', 'pw'
)";

$sql = "INSERT INTO users(_email, _password)VALUES(
    'weeb@gmx.de', 'password'
)";

$sql = "INSERT INTO users(_email, _password)VALUES(
    'ayaya@yahoo.net', 'mypassword'
)";

$con->close();

