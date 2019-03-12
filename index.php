
    <?php
    $page_title = "game";

    if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];
    }else{
    
        $page = 'home';
    }
    $page_title .= " - ".ucfirst($page);
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
    include 'pages/'.$page.'.php';
    ?>
    <?php
    require_once 'includes/footer.php';
    ?>

