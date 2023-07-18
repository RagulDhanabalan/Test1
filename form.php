$connection = mysqli_connect('localhost','root','','sql_injection');

if($connection){
    echo 'hi';
}