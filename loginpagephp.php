<?php
   $user = $_POST['user'];
   $password = $_POST['password'];
   echo '<script>alert("Welcome")</script>';
   $conn = new mysqli('localhost,', 'root','','Login');
    if($conn->connect_error){
        die('Conection Failed :' .$conn->connect_error);

    }
    else{
        $stmt = $conn->prepare("Insert into registraition (user,password)
         values(?,?)");
         $stmt ->bind_param("ss", $user,$password) ;
         $stmt->execute();
         echo "Registration Sucefull";
         $stmt->close();
         $conn->close();
    }

?>

