<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "rentomojo";
$conn = new mysqli($serverName,$username,$password,$dbname);

$q = "create table phonebook(
    id int(100) primary key auto_increment,
    name varchar(50) not null,
    last varchar(50) not null,
    mobile BIGINT(50) not null,
    email varchar(100) not null,
    country varchar(50) not null,
    state varchar(50) not null,
    number varchar(50) not null
    
)";
$res = $conn->query($q);
// $q1 = "insert into customer(name,city,credit_score)values('Siddu','Jalandhar',6)";
// $conn->query($q1);

?>