<?php
include "php/db_connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAB ICON -->
    <link rel="icon" href="img/logo300.png">
          <title>PODMS | ADMIN</title>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!----===== FontAwesome CSS ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" />
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

            <!-- DATATABLES -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.dataTables.min.css">

</head>
<body>
  <?php include "sidebar.php"; ?>

  <section class="home">
    
    <?php include "navbar.php"; ?>
        <div class="text">SANCTIONS</div>



         <!-- Appointment Modal -->
<div class="modal fade" id="sanctionModal" data-bs-backdrop="static"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sanctions</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="sanctionData">
            <div class="modal-body">

                <div id="errorMessageSanction" class="alert alert-warning d-none"></div>

                <input type="hidden" name="id" id="id" >

                <hr>
                        <h1 class="fs-5 opacity-75">Minor Violation</h1>
                <div class="mb-3">
                    <div class="wrapper">
                    <div class="container2">

                        <label class="option_item">
                        <input type="checkbox" class="checkbox" name="chk" onclick="return chkres()" value="Vandalism">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Vandalism</div>
                        </div>
                        </label>
                        <label class="option_item">
                        <input type="checkbox" class="checkbox" name="chk" onclick="return chkres()" value="Failure to bring ID">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Failure to bring ID</div>
                        </div>
                        </label>
                        <label class="option_item">
                        <input type="checkbox" class="checkbox" name="chk" onclick="return chkres()" value="Spitting somewhere">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Spitting</div>
                        </div>
                        </label>
                    </div>
                    </div>
                    <div>
                        <span id="notValid" style="color: red;"> </span>
                        </div>
                    <hr>
                        <h1 class="fs-5 opacity-75">Major Violation</h1>
                        <div class="wrapper">
                            <div class="container2">
                        <label class="option_item">
                        <input type="checkbox" class="checkbox form-control-checkbox" value="Vandalism" name="violation">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item">
                        <input type="checkbox" class="checkbox form-control-checkbox" value="Failure to bring ID" name="violation">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 2</div>
                        </div>
                        </label>
                    </div>
                    </div>
                </div>
                <hr>     
                <h1 class="fs-5 opacity-75">Evidence</h1>
                         <div class="mb-3">
                                 <div class="upload">
                                         <img src="img/logo300.png" width = 100 height = 100 alt="">
                                         <div class="round">
                                                <input type="file">
                                                <i class = "fa fa-upload" style = "color: #fff;"></i>
                                        </div>
                                  </div>
                         </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>


        <div class="container" id="table">
    <div class="row">
        <table id="sanctionTable" class="table table-striped dt-responsive nowrap" style="width:100%">
        <div class="col-lg-12">
                                        <?php
                                            include "php/db_connect.php";

                                            $query = "SELECT * FROM podms_profiling";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                        <thead class="table-dark">
                            <tr>
                                <th>APPOINTMENT DATE: </th>
                                <th>APPOINTMENT TIME: </th>
                                <th data-priority="1">ID NUMBER: </th>
                                <th data-priority="2">LASTNAME: </th>
                                <th>FIRSTNAME: </th>
                                <th>DESCRIPTION: </th>
                                <th data-priority="3">STATUS</th>
                                <th data-priority="4">ACTION </th>
                            </tr>
                        </thead>
                        <tbody class="table-warning">
                            <?php

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $row['appointment_date'] ?></td> 
                                        <td><?= $row['appointment_time']?></td> 
                                        <td><?= $row['id_number'] ?></td> 
                                        <td><?= $row['first_name'] ?></td> 
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['description'] ?></td> 
                                        <td><?php if ($row['status']==1){
                                                echo '<p class="badge text-bg-danger">PENDING</p>';
                                            }elseif ($row['status']==2){
                                                echo '<p class="badge text-bg-warning">SCHEDULED</p>';
                                            }elseif ($row['status']==3){
                                                echo '<p class="badge text-bg-success">CLEARED</p>';
                                            }else{
                                                echo '<p class="badge text-bg-warning">UNDEFINED STATUS!</p>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <button type="button" value="<?=$row['id'];?>" class="sanctionBtn btn btn-secondary btn-sm">SANCTION</button>
                                        </td>

                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </div>
                    </table>
    </div>
</div>





    </section>










    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function(){  
    $('#sanctionTable').DataTable({
        columnDefs: [
        { responsivePriority: 1, targets: 1},
        { responsivePriority: 2, targets: -1 },
        { responsivePriority: 3, targets: -1 },
        { responsivePriority: 4, targets: -1 }

    ],
    responsive: {
        details: true
    },
        pagingType: "numbers"

    });  

    
}); 
    </script>

    <script>
        $(document).on('click', '.sanctionBtn', function (e) {

var id = $(this).val();


$.ajax({
    type: "GET",
    url: "php/code.php?id=" + id,
    success: function (response) {


        var res = jQuery.parseJSON(response);
        if(res.status == 404) {

            alert(res.message);
        }else if(res.status == 200){

            $('#id').val(res.data.id);


            $('#sanctionModal').modal('show');
        }

    }
});

});

$(document).on('submit', '#sanctionData', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("sanctionData", true);

            $.ajax({
                type: "POST",
                url: "php/code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageSanction').removeClass('d-none');
                        $('#errorMessageSanction').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageSanction').addClass('d-none');

                        alertify.set('notifier','position', 'bottom-left');
                        alertify.success(res.message);
                        
                        $('#sanctionModal').modal('hide');
                        $('#sanctionData')[0].reset();

                        $('#sanctionTable').load(location.href + " #sanctionTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });
    </script>
</body>
<script src="js/sidebar.js"></script>
</html>
