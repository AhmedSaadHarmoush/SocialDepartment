<?php
ob_start();
session_destroy();
setcookie("name", "", time()-3600);

 ob_end_flush();;
echo("<script>location.href = '".$_SERVER["PHP_SELF"]."';</script>");
?>
