<nav class="navbar navbar-expand-lg fixed-top nav-menu">
    <a href="#" class="navbar-brand text-light">
    <span class="h2 font-weight-bold">Hak<span class="h1  font-weight-bold">3</span>rz</span>

    </a>
    <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target=#myNavbar>
    <div class= "bg-light line1">
    </div>
    <div class= "bg-light line2">
    </div>
    <div class= "bg-light line3">
    </div>
    </button>
    <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="myNavbar">
    <ul class="navbar-nav">
    <li class="nav-item <?=($page=="home")?'active':'';?>">
    <a href="index.php?page=home" class="nav- m-2 menu-item">Home</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav- m-2 menu-item">Mission</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav- m-2 menu-item">Collection</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav- m-2 menu-item">Gallery</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav- m-2 menu-item">Customers</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav- m-2 menu-item">Pricing</a>
    </li>
    <li class="nav-item">
    <a href="#" class="nav- m-2 menu-item">Contact</a>
    </li>
    <li class="nav-item <?=($page=="login")?'active':'';?>">
    <a href="index.php?page=login" class="nav- m-2 menu-item">Login</a>
    </li>
    </ul>
    
    </div>
    </nav>