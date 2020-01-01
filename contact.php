<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="shoes";
    
    // Establish a connection
    $conn=mysqli_connect($host,$user,$pass,$db_name);
    
    if(isset($_POST['submit'])){
            $fname=htmlentities($_POST['name']);
            $email=htmlentities($_POST['email']);
            $phone=htmlentities($_POST['phone']);

    }

    $query="INSERT INTO customers(full_name,email,phone) VALUES('$fname','$email','$phone')";

    $result=mysqli_query($conn,$query);

    if($result){
        header("location:index.html");
    }else{
        echo "not successful";
    }
    

?>