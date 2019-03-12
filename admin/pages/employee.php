<?php
require_once 'includes/dbconnection.php';
if(isset($_GET['edit'])){
    $id =$_GET['edit'];
    $query = 'select * from employee where employee_id ='.$id;
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    
}
?>
<?php
if(isset($_POST['search'])){
  $search_term=mysqli_real_escape_string($conn, $_POST['search_term']);
 // echo  $search_term;
  $sql="SELECT * FROM employee WHERE username like  '{$search_term}%'";
 // echo $sql;  
  $query = mysqli_query($conn, $sql);

 //var_dump (mysqli_fetch_assoc($query)) ;
 while($row=mysqli_fetch_assoc($query)){
  echo 'username:  '.$row["username"];
  ?><br>
  <?php
  echo 'Password:  '.$row["password"];


  } 

}
?>
     <!-- <form action="" method="post">
     Search:<input type="text" name="search_term" >
     <input type="submit" name="search" value="Search">     
     </form> -->
      <form action="process.php" method="post">
      <input type="hidden" value="employee" name="form_name">
      <?php
          if(isset($_GET['edit'])){
              ?>
              <input type="hidden" name="id" value="<?php echo $row['employee_id'];?>">
              <?php
          }
          ?>
       <div class="form-group">
           <label for="exampleFormControlInput1">UserName</label>
           <input type="text" class="form-control" name="username" placeholder="Please Enter Sunject_code" required value="<?=(isset($_GET['edit']))?$row['username']:'';?>">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">Password</label>
           <input type="text" class="form-control" name=password  aria-describedby="emailHelp" placeholder="Please Enter Subject Title" required value="<?=(isset($_GET['edit']))?$row['password']:'';?>">
       </div>
        
       <button type="submit" class="btn btn-primary"><?=(isset($_GET['edit']))? 'update':'Create';?></button>
 
   </form>
    <br>
    <div id="table_data" >

</div>
