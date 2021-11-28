<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name=$_POST['name'];
        $work=$_POST['work'];
        $status="Assigned";

        $servername="localhost";
        $username="root";
        $password="";
        $database="workdata";
        $conn=mysqli_connect($servername, $username, $password, $database);
        if(!$conn)
        {
            die("Sorry we failed to connect! ".mysqli_connect_error());
        }
        $sql1="DBCC CHECKIDENT (mytable, RESEED, 0)";
        $result1=mysqli_query($conn, $sql1);
        //$sql2="ALTER TABLE `workassigned` AUTO_INCREMENT = $sql1+1;";
        //$result2=mysqli_query($conn, $sql2);
        $sql="INSERT INTO `workassigned` (`name`, `work`, `status`) VALUES ('$name', '$work', '$status');";
        $result=mysqli_query($conn, $sql);
        if(!$result)
        {
            echo '<div class="alert alert-danger" role="alert">
            <strong>Error! '.$work.'</strong> has been NOT been assigned to <strong>'.$name.'</strong> due to some technical issues
            </div>';
        }
        else
        {
            echo '<div class="alert alert-success" role="alert">
            <strong>Success! '.$work.'</strong> has been assigned to <strong>'.$name.'</strong>
            </div>';
        }
        header('Refresh: 4; URL=/Formphp/employee.php');
    }
    ?>