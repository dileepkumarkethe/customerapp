<?php

//Fetch values from the form
if(isset($_POST["submit"]))
{
    include "dbconnection.php";
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $last=$_POST['last'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $number=$_POST['number'];
   
    
    $q = "insert into phonebook(name,last,mobile,email,country,state,number)values('$name','$last','$mobile','$email','$country','$state','$number')";
    $res = $conn->query($q);
    if($res)
    {
        header("Location:home.php");
    }
}
?>