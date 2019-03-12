<?php
require_once 'admin/includes/dbconnection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['form_name']=='register'){
        
            extract($_POST);
         

        $query = "INSERT INTO `users`( `firstname`, `lastname`, `email`, `number`, `username`, `password`, `role`) VALUES  ('$firstname','$lastname','$email','$number','username','password',1)";
        $result=mysqli_query($conn, $query);
        if($result){
            header("location:pages/register.php");
        }else{
            header("location:pages/.php");
        }
    }
}

?>