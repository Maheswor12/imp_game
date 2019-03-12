
<?php 
$page_title = "Game-login";
?>      
<header>    
        <div class="container login-cont">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form class="form" action="loginaction.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password"  class="form-control" required>
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-info btn-md">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </header> 
    <?php
?>