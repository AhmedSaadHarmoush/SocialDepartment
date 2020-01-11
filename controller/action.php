<?php

if (!empty($error)) {
    echo' <div class="alert alert-warning">' . $error . 'register  </div> ';
}
if (!empty($success)) {
    echo '<div class="alert alert-success">' . $success . '</div>';
}
?>
<?php

include_once 'model/manage_lectures.php';
include_once 'model/manage_subjects.php';

$action = new manage_lectures();
$sub = new manage_subjects();

if (isset($_POST['add'])) {

    include_once './model/db_connect.php';


    $lecture['user_id'] = strip_tags($_SESSION['id']);
    $lecture['name'] = strip_tags($_POST['name']);
    if (empty($lecture['name']) ) {
        $error = "All fields required";
    }

    echo"<br>";

     $data = $action->new_lec($lecture);
     if($data>0){
        $id=$action->getId();
        $sub->add_count($id);
        echo("<script>location.href = '".$_SERVER["PHP_SELF"]."';</script>");
     }
}
if (isset($_POST['add_subject'])) {

    include_once './model/db_connect.php';

    $subject['name'] = strip_tags($_POST['name']);
    if (empty($subject['name']) ) {
        $error = "All fields required";
    }

    echo"<br>";

     $data = $sub->new_sub($subject);
     if($data>0){
         echo("<script>location.href = '".$_SERVER["PHP_SELF"]."';</script>");
     }
}

elseif (isset($_GET["page"]) && $_GET["action"] == "delete") {
    $id = $_GET["id"];
    $delete = $action->delete_lec($id);
    if ($delete > 0) {
        $success = "the lecture has been successfully deleted";
        echo("<script>location.href = '".$_SERVER["PHP_SELF"]."';</script>");
    }
} else {
    include_once './view/add_new.php';
}
?>
