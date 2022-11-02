<?php
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($username)  || !empty($phone) || !empty($email) || !empty($password)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "canstudy";
       
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error'.mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From registration where email = ? Limit 1";
            $INSERT ="INSERT Into registration (username,phone,email,password) values(?, ?, ?, ?)";

            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("siss",$username,$phone,$email,$password);
                $stmt->execute();
               {
                    echo "<script> location.href='main.html'; </script>";    
                }
            $stmt->close();
            $conn->close();
            }
        } else {
        echo"All field are required";
        die();
    }
?>