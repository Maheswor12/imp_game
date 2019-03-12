

<?php
if(!SESSION_START()){
    SESSION_START();
}
if(isset($_SESSION['role']) ==1){
$page_title = 'Game-admin'; 
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    //echo $page;
}else{
     $page='home';
}
// if($page=="members" || $page=="employee"){
// $table="users";    
// }


 require_once('../includes/header.php');
include('includes/navigation.php');
?>   
<?php
 require_once('../includes/footer.php'); 
}else{
 header('location:../pages/login.php'); 

}
?>