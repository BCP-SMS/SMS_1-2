<?php

$con = mysqli_connect("localhost", "root", "", "db_test");

if (!$con) {
    die('Connection Failed'. mysqli_connect_error());
}




if (isset($_POST['addData'])) {
     
        $idNum      = mysqli_real_escape_string($con, $_POST['idNum']) ;
        $fname      = mysqli_real_escape_string($con, $_POST['fname']) ;
        $mname      = mysqli_real_escape_string($con, $_POST['mname']) ;
        $lname      = mysqli_real_escape_string($con, $_POST['lname']);
        $course     = mysqli_real_escape_string($con, $_POST['course']);
        $status     = 1;
        // $violation  = mysqli_real_escape_string($con, $_POST['viol']);
        
        if ($idNum == NULL || $fname == NULL || $mname == NULL || $lname == NULL || $course == NULL )
        {
            $res = [
                'status' => 422,
                'message' => 'All fields are mandatory'
            ];
            echo json_encode($res);
            return;
        }

        $query = "INSERT INTO `podms_profiling` (`id_number`,`first_name`,`middle_name`,`last_name`,`course`,`status`) VALUES ('$idNum','$fname','$mname','$lname','$course','$status')";
            $query_run = mysqli_query($con, $query);
            if ($query_run){
                $res = [
                    'status' => 200,
                    'message' => 'Data Added Successfully'
                ];
                echo json_encode($res);
                return;
            }else {

                $res = [
                    'status' => 500,
                    'message' => 'Data Creation Failed'
                ];
                echo json_encode($res);
                return;
            
 
        }
    
    }





if (isset($_POST['sanctionData'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $viol_level = mysqli_real_escape_string($con, $_POST['offense']);
    $violation = mysqli_real_escape_string($con, $_POST['level']);
    if ($violation =='otherMinor') {
        $violation = mysqli_real_escape_string($con, $_POST['specifiedMinor']);
      }elseif ($violation =='otherMajor'){
             $violation = mysqli_real_escape_string($con, $_POST['specifiedMajor']);
    }elseif ($violation =='otherGra'){
            $violation = mysqli_real_escape_string($con, $_POST['specifiedGra']);
          }



    if ($violation == NULL) {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE `podms_profiling` SET `violation_level` = '$viol_level' , `violation`='$violation' , `status` = '3' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $query2 = "INSERT INTO `podms_records` SELECT * FROM `podms_profiling` WHERE `id` = '$id'";
        $query_run2 = mysqli_query($con, $query2);
        if ($query_run2) {
            $query3 = "DELETE FROM podms_profiling WHERE `id` = '$id'";
            $query_run3 = mysqli_query($con, $query3);

            if ($query_run2) {
                $res = [
                    'status' => 200,
        
                    'message' => 'Data Update Successfully'
        
                ];
                echo json_encode($res);
                header("./profiling.php");
                return;
            }else {
                $res = [
                    'status' => 500,
        
                    'message' => 'Data Not Updated',
        
        
                ];
                echo json_encode($res);
                return;
            } 

        }
        
    }

}




if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $query = "SELECT * FROM podms_profiling WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $row = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,

            'message' => 'Data Fetch Successfully by id',

            'data' => $row
        ];
        echo json_encode($res);
        return;
    }else {
        $res = [
            'status' => 404,

            'message' => 'Id Not Found',


        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_POST['delete_data'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $query = "DELETE FROM reports WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,

            'message' => 'Data Deleted Successfully',


        ];
        echo json_encode($res);
        return;
    }else {
        $res = [
            'status' => 500,

            'message' => 'Data Not Deleted',


        ];
        echo json_encode($res);
        return;
    }
}


?>

