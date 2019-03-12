
<script src="http://<?=$_SERVER['HTTP_HOST'];?>/updated_lms/css/jquery.js"></script>
 <script src="http://<?=$_SERVER['HTTP_HOST'];?>/updated_lms/css/js/bootstrap.js"></script>
 <!-- for sweet alert -->
 <script src="http://<?= $_SERVER['HTTP_HOST']; ?>/updated_lms/css/sweetalert.min.js"></script>
<script src="http://<?= $_SERVER['HTTP_HOST']; ?>/updated_lms/css/feather.min.js"></script>

 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<script>

$(document).ready(function(){         
    $('#employe').submit(function(event){
        //alert('document id ready');    
        event.preventDefault();
        var formData = $('#employe').serialize();              
        $.ajax({
          type:"post",
          url:"process.php",
          data: formData,
          dataType: "text",
          success: function(response){

            if (response === 'success') {
                    swal('Department', 'You have successfully added the Employee.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=<?php echo $_GET['page'];?>');
                    });
                } else if (response === 'failed') {
                    swal('Department', 'We could not add the Employee to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=<?php echo $_GET['page'];?>');
                    });
                }
          }
        });
    });
    $('#members').submit(function(event){
        //alert('document id ready');    
        event.preventDefault();
        var formData = $('#members').serialize();              
        $.ajax({
          type:"post",
          url:"process.php",
          data: formData,
          dataType: "text",
          success: function(response){

            if (response === 'success') {
                    swal('Department', 'You have successfully added the Members.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=<?php echo $_GET['page'];?>');
                    });
                } else if (response === 'failed') {
                    swal('Department', 'We could not add the Members to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=<?php echo $_GET['page'];?>');
                    });
                }
          }
        });
    });
  });
  //for retrieve
  $(document).ready(function(){
         
         //alert('document id ready');    
         $.ajax({
           type:"GET",
           url:"process.php?page=<?php echo $_GET['page'];?>",
           success: function(html){
             $("#table_data").html(html);
           }
         });
     });

     //for delete
$(document).ready(function(){
$('#delete').click(function(e){
e.preventDefault();
var url= this.href;
  alert(url);
  swal({
  title: 'Are you sure?',
  text: "It will permanently deleted !",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function() {
  
  $.ajax({
  type:"GET",
  url: url,
  success:function(response){
    //console.log(response);
    if (response === 'deleted') {
                    swal('Department', 'You have successfully delete the subject.',
                        'success', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=subject');
                    });
                } else  {
                    swal('Department', 'We could not delete the subject to the database',
                        'error', {
                            timer: 2000,
                            button: false
                        }).then(function() {
                          window.location.replace('index.php?page=subject');
                    });
                } 

  }
});
})
  
});



});
    </script>