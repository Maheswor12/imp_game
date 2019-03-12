<?php
if(!session_start()){
    session_start();
}
require_once "admin/includes/dbconnection.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$query="select * from users where username='$username' and password='$password'";
//echo $query;
$result=mysqli_query($conn, $query);
//var_dump ($result);
$row= mysqli_fetch_assoc($result);
if($row){
    $_SESSION['role']=$row['role'];
    $_SESSION['uid'] = $row['user_id']; 
if($row['role']==1){
    header("location:admin/index.php");
}else if($row['role']==2){
    header("location:employee/index.php");
} else{
     header("location:login.php?type=error");

}
}
$smarty->display('templates/insert.tpl');
?>