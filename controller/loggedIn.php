<?php
function loggedIn(){
    if(isset($_SESSION["name"])){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
?>

