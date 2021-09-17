<?php
if(isset($_GET['goto'])){
    switch($_GET['goto']){
        case "home":
            include("home.php");
            break;
        case "user":
            include("user.php");
            break;
        case "detailproduct":
            include("detailproduct.php");
            break;
        case "product":
            include("product.php");
            break;
        case "logout":
            include("logout.php");
            break;
        case "result":
            include("result.php");
            break;
        case "blog":
            include("blog.php");
            break;
        case "cart":
            include("cart.php");
            break;
        case "detaiblog":
            include("detaiblog.php");
            break;
        default:
        include("home.php");
    }
}else{
    include("home.php");
}
?>