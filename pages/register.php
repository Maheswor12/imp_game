<link rel="stylesheet" href="css/style.css">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <img src="css/images/twitter.png"  alt="Mahesh">  Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook">   <img src="css/images/facebook.png" alt="Mahesh" >   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="registeraction.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/user.png"  alt="Mahesh">  </span>
		 </div>
        <input name="firstname" class="form-control" placeholder="First Name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/user.png"  alt="Mahesh">  </span>
		 </div>
        <input name="lastname" class="form-control" placeholder="Last Name" type="text" required>
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/email.png"  alt="Mahesh"> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/phone.png"  alt="Mahesh">  </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+977</option>
		    <option value="1">+047</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="number" class="form-control" placeholder="Phone Number" type="number" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/user.png"  alt="Mahesh">  </span>
		 </div>
        <input name="username" class="form-control" placeholder="User Name" type="text" required>
    </div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/lock.png"  alt="Mahesh">  </span>
		</div>
        <input class="form-control" placeholder="Create Password" type="password" name="password" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="css/images/lock.png"  alt="Mahesh">  </span>
		</div>
        <input class="form-control" placeholder="Repeat Password" type="password" required>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="form_name" value="register" > Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="index.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->


