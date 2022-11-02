<?php
        $username = $_POST['username'];
        $faculty_Id =$_POST['Faculty_Id'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $branch_type = $_POST['branch_type'];

        if(!empty($faculty_Id)  || !empty($username) || !empty($phone) || !empty($email) || !empty($password) || !empty($branch_type)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "canstudy";
       
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error'.mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From faculty_registration where email = ? Limit 1";
            $INSERT ="INSERT Into faculty_registration (faculty_Id,username,phone,email,password,branch_type) values(?, ?, ?, ?, ?, ?)";

            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("ssisss",$faculty_Id,$username,$phone,$email,$password,$branch_type);
                $stmt->execute();
               {
                    echo "<script> location.href='fa_table.php'; </script>";    
                }
            $stmt->close();
            $conn->close();
            }
        } else {
        echo"All field are required";
        die();
    }
?>