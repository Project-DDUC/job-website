
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "login";
    
    // Create connection
    $connect = mysqli_connect("localhost","root","","login");

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    //echo "Connected successfully";
   

?>
