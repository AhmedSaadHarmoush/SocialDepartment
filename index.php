<?php date_default_timezone_set("Africa/Cairo"); 
session_start();?>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet"> 
    <link href="css/jquery-ui-1.10.4.custom.css" type="text/css"rel="stylesheet">
    <title>Lectures</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="js/script.js" type="text/javascript"></script>
</head>

<?php ob_start(); 
include_once 'view/view_side.php'; ?>  
 
<div class="warpper">
    <?php include_once 'view/view_nav.php';?> 
    <?php
    
     if (isset($_GET['page']))
    {
        $url="controller/".$_GET['page'].".php";
        if (is_file($url))
        { 
            if($url=="controller/list.php"){
                echo '<div class="main-body">';
        include_once 'view/main_body.php';
        echo '</div> '; 
            }else{
            include   $url;
            }
        }
        else{
            echo "<h3>Requested file not found</h3>";
        }
    }else{
        echo '<div class="main-body">';
        include_once 'view/main_body.php';
        echo '</div> ';
    }
    if(!empty($success)){
            echo '<div class="alert alert-success">'.$success.'</div>';
        }
       ob_end_flush();; ?>
</div>
        <div style="clear:both"></div>
</div><!-- End main wrapper -->  
