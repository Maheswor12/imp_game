<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">

      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Administrator</a>
      <form action="" method="post"  class="form-control form-control-dark w-100">
      <input  class="form-control-dark" type="text" placeholder="Search" aria-label="Search"  name="search_term">
      <input type="submit" name="search" value="Search" class="btn btn-primary">
      </form>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="signout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?=($page=="home")?'active':'';?>" href="index.php?page=home">

                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="employee")?'active':'';?>" href="index.php?page=employee">
                  <span data-feather="file"></span>
                  Employee
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=($page=="members")?'active':'';?>" href="index.php?page=members">
                  <span data-feather="shopping-cart"></span>
                  Members
                </a>
              </li>
           
             
             
             
            </ul>

          </div>
        </nav>
        
       
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         <?php include 'pages/'.$page.'.php';?>
        </main>
      </div>
    </div>
