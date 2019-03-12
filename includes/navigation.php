<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
    <a class="text-primary" href="#">PlayerUnknown's Battlegrounds</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?=($page=="home")?'active':'';?> ">
                <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" active>
                <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" active>
                <a class="nav-link" href="#">Directory<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" active>
                <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item <?=($page=="login")?'active':'';?>">
                <a class="nav-link" href="index.php?page=login">Login<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>