<?php
$server = "localhost";
$username = "root";
$pass = "";
$dbname = "sql-injection";

$connection = mysqli_connect($server,$username,$pass,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['userName']) && !empty($_POST['userPassword'])){
        $uname =  $_POST['userName'];
        $upass = $_POST['userPassword'];
        $mobile = $_POST['phone'];

        $sql = "INSERT INTO user values('','$uname','$upass','$mobile')";

        $run = mysqli_query($connection,$sql);

        if($connection){
            echo "Data added successfully";
        }
        else{
            echo "Data does not added";
        }
    }
    else{
        echo "Please fill all the fields !" . $connection->connect_error;
    }
}
?>