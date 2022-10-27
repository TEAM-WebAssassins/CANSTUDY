<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'canstudy');

if(isset($_POST['submit']))
{
        $faculty_Id = $_POST['faculty_Id'];
        $username = $_POST['username'];
        $sem = $_POST['sem'];
        $sub = $_POST['sub'];
        $module1 = $_POST['module1'];
        $module2 = $_POST['module2'];
        $module3 = $_POST['module3'];
        $module4 = $_POST['module4'];
        $module5 = $_POST['module5'];

    $query ="INSERT INTO isefaculty_upload (`faculty_Id`,`username`,`sem`,`sub`,`module1`,`module2`,`module3`,`module4`,`module5`) VALUES('$faculty_Id','$username','$sem','$sub','$module1','$module2','$module3','$module4','$module5')";
    $query_run = mysqli_query($connection, $query);
            
    if($query_run)
    {
        echo '<script> alert("Data saved")</script>';
        header('Location: fa_table.php');   
    }
    else
    {
        echo '<script> alert("Data not saved")</script>';
    }
}
?>