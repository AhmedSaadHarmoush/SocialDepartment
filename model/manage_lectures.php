<?php


include_once ('db_connect.php');
class manage_lectures {

    public $con;

    public function __construct() {
        include_once ('db_connect.php');
        $connect = new db_connect();
        $this->con = $connect->connect();
    }
    function new_lec($array){
        $con = $this->con;
        $keys = implode(",", array_keys($array));
        $valuees = "'" . implode("'" . "," . "'", array_values($array)) . "'";
        $query = "INSERT INTO files VALUES (NULL," . "$valuees)";
        try {
            $sql = mysqli_query($con, $query);

             $num=mysqli_affected_rows($con);
           //mysqli_errno($con);
        } catch (Exception $exc) {
            $exc->getMessage();
        }
        return $num;
    }
    function list_lec($subject_id){
        $con = $this->con;
         $query = "SELECT * FROM files WHERE ( subject_id='$subject_id' ) ";
         $sql = mysqli_query($con, $query);
         $num = mysqli_affected_rows($con);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $row[$i] = mysqli_fetch_array($sql);
            }
            return $row;
        }
        else
            return $num ;
    }
    function delete_lec($id) {
        $con = $this->con;
        $query = "DELETE FROM files WHERE id=$id";
        $sql = mysqli_query($con, $query);
        $num = mysqli_affected_rows($con);
        return $num;
    }
    function getId(){
        $con = $this->con;
        $query = "SELECT max(id) FROM files";
        $sql = mysqli_query($con, $query);
        $num = mysqli_affected_rows($con);
        if ($num > 0) {
            for ($i = 0; $i < $num; $i++) {
                $row[$i] = mysqli_fetch_array($sql);
            }
            return $row;
        }
        else
            return $num ;
    }
    }
    