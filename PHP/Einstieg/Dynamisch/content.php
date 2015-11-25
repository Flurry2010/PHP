<section>
    <div>
        <p>Content</p>
    </div>
    <?php

    //    if($_GET['page']=='home')
    //    require 'pages/home.php';
    //
    //    if($_GET['page']=='lists')
    //    require 'pages/lists.php';
    //
    //    if($_GET['page']=='table')
    //    require 'pages/table.php';

    //    switch($_GET["page"]){
    //        case "home": require('pages/home.php');
    //            break;
    //        case "lists": require('pages/lists.php');
    //            break;
    //        case "table": require('pages/table.php');
    //            break;
    //        default: require_once("index.html");
    //            break;
    //    }

    require 'pages/' . $currentPage . '.php';


    ?>

</section>