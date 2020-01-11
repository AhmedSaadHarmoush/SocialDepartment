<?php


include_once ('db_connect.php');
class manage_user 
{
    
    public $con;
    function __construct() {
     $connect= new db_connect();
     $this->con= $connect->connect();
    }
    function register($array){
        $con=  $this->con;
        $k=  implode(",",  array_keys($array));
        $v= "'".  implode("'".","."'", array_values($array))."'";
        $query="INSERT INTO users ($k) VALUES ($v)";
        $sql=  mysqli_query($con, $query);
        $num=  mysqli_affected_rows($con);
        return $num;
    }
    function login($user,$pass){
         $con=  $this->con;
         $query="SELECT * FROM users WHERE name='$user' AND pass='$pass'";
         $sql=  mysqli_query($con, $query);
        $num=  mysqli_affected_rows($con);
        return $num;
    }
    function user_check($user){
        $con=  $this->con;
         $query="SELECT * FROM users WHERE name='$user'";
         $sql=  mysqli_query($con, $query);
        $num=  mysqli_affected_rows($con);
        
        return $num;
    }
    function check_field($field,$data){
        $con=  $this->con;
         $query="SELECT id FROM users WHERE $field='$data'";
         $sql=  mysqli_query($con, $query);
        $num=  mysqli_affected_rows($con);
        
        return $num;
    }
    function getId($name){
        $con=  $this->con;
        $query="SELECT id FROM users WHERE name=$name";
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


?>
