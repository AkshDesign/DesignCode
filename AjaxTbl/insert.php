<?php

    include ('dbcon.php');

    $fname = $_POST['name'];
    $mail = $_POST['mail'];
    $dob = $_POST['dob'];
    $cont = $_POST['numb'];
    $gender = $_POST['gender'];

    $query = "insert into registertable values (null,'$fname','$mail','$dob','$cont','$gender')";

    $run = mysqli_query($con,$query);

    if ($run)
    {
        echo "Data Inserted";
    }
    else
    {
        echo "Error";
    }
?>