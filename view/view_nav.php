<?php
include_once './controller/loggedin.php';
?>

<nav class="navs">
                <div class="floatRight mob-menu">
                    <i class="icon-menu"></i>
                </div>
                <ul class="nav1">
                    <li class="headerbtn active">
                       <a href="<?php echo $_SERVER["PHP_SELF"]?>">Home</a> 
                    </li>
                    <?php if(loggedIn()==TRUE){?>
            <li class="headerbtn floatRight"><a href="?page=logout">Log out</a></li>
            <li class=" headerbtn"><a href="?page=action">+ Add Lectures <?php echo $_SESSION["name"];?></a></li>
            <li class=" headerbtn"><a href="?page=action">+ Add Subject </a></li>
            <?php }else { ?>   

            <li class="headerbtn floatRight"><a href="?page=login">Login</a></li>
                <?php } ?>
                    
                </ul>
            </nav>