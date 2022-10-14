<?php

    include ('dbcon.php');

    $query = "select * from registertable";
    $result = mysqli_query($con,$query);
    $arr= array();

         while ($row = mysqli_fetch_array($result))
            {
                $msgDetails=array(
                            "id" => $row[0],
                            "name" => $row[1],
                            "mail" => $row[2],
                            "dob" => $row[3],
                            "numb" => $row[4],
                            "gender" => $row[5],
                            "Edit" => "<button type='button' id='abc' class='btn btn-primary btnedit'><span style='display: none;'>$row[0];</span>Edit</button>",
                            "delete" => "<button type='button' class='btn btn-primary btndelete'><span style='display: none;'>$row[0];</span>Delete</button>"
                            ); 
                array_push($arr, $msgDetails);   
            }           
            $arr = json_encode($arr);    
            echo "$arr";
           
?>
