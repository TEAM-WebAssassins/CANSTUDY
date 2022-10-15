<?php
        $username = $_POST['username'];
        $usn = $_POST['usn'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $branch_type = $_POST['branch_type'];

        if(!empty($username) || !empty($usn) || !empty($phone) || !empty($email) || !empty($password) || !empty($branch_type)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "canstudy";
       
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error'.mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From student_registration where email = ? Limit 1";
            $INSERT ="INSERT Into student_registration (username,usn,phone,email,password,branch_type) values(?, ?, ?, ?, ?, ?)";

            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("ssisss",$username,$usn,$phone,$email,$password,$branch_type);
                $stmt->execute();
                do{
                    if(preg_match("/IS/i",$usn, $match)){
                        echo "<script> location.href='IS_page2.html'; </script>";
                    }
                    break;
                    if(preg_match("/CS/i",$usn, $match)){
                        echo "<script> location.href='CS_page2.html'; </script>";  
                    }
                    break;
                    if(preg_match("/EC/i",$usn, $match)){
                        echo "<script> location.href='EC_page2.html'; </script>";   
                    }
                    break;
                    if(preg_match("/ME/i",$usn, $match)){
                        echo "<script> location.href='MEC_page2.html'; </script>"; 
                    }
                    break;
                    if(preg_match("/AI/i",$usn, $match)){
                        echo "<script> location.href='AI_page2.html'; </script>"; 
                    }
                    break;
                    if(preg_match("/CG/i",$usn, $match)){
                        echo "<script> location.href='CSD_page2.html'; </script>";    
                    }
                    break;
                    if(preg_match("/CB/i",$usn, $match)){
                        echo "<script> location.href='CSB_page2.html'; </script>";   
                    }
                    break;
                }while(TRUE);
            $stmt->close();
            $conn->close();
            }
        }
?>