<?php
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $branch_type = $_POST['branch_type'];

        if(!empty($username) || !empty($phone) || !empty($email) || !empty($password) || !empty($branch_type)){
        $host = "127.0.0.1:3308";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "canstudy";
       
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error'.mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From registration where email = ? Limit 1";
            $INSERT ="INSERT Into registration (username,phone,email,password,branch_type) values(?, ?, ?, ?, ?)";

            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("sisss",$username,$phone,$email,$password,$branch_type);
                $stmt->execute();
               {
                    echo "<script> location.href='ISfacsel.html'; </script>";    
                }
            $stmt->close();
            $conn->close();
            }
        } else {
        echo"All field are required";
        die();
    }
?>