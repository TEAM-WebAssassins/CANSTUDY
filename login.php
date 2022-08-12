<?php
$usn = $_POST['usn'];
$password = $_POST['password'];
$conn = new mysqli("127.0.0.1:3308","root","","canstudy");
if($conn->connect_error){
    die("Failed to connect :".$conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from registration where usn = ?");
    $stmt->bind_param("s",$usn);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data =$stmt_result->fetch_assoc();
        if($data['password'] === $password)
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
             }
}
?>