<?php


include_once ('db_connect.php');
class manage_subjects {

    public $con;

    public function __construct() {
        include_once ('db_connect.php');
        $connect = new db_connect();
        $this->con = $connect->connect();
    }
    function new_sub($name){
        $con = $this->con;
        $query = "INSERT INTO subjects(name) VALUES ($name)";
        try {
            $sql = mysqli_query($con, $query);

             $num=mysqli_affected_rows($con);
           //mysqli_errno($con);
        } catch (Exception $exc) {
            $exc->getMessage();
        }
        return $num;
    }
    function list_sub(){
        $con = $this->con;
         $query = "SELECT * FROM subjects ";
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
    function delete_sub($id) {
        $con = $this->con;
        $query = "DELETE FROM subjects WHERE id=$id";
        $sql = mysqli_query($con, $query);
        $num = mysqli_affected_rows($con);
        return $num;
    }
    function add_count($id){
        $con = $this->con;
        $count = "SELECT * FROM subjects WHERE id=$id";
        $count++;
        $query = "UPDATE subjects SET nol='$count' WHERE id=$id";
        $sql = mysqli_query($con, $query);
        $num = mysqli_affected_rows($con);
        return $num;
    }
    }
    