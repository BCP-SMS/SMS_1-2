<?php
include "php/db_connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include "head.php";?></head>
<body>
<?php include "sidebar.php"; ?>

<section class="home">
  
  <?php include "navbar.php"; ?>
        <div class="text">RECORDS</div>
        <div class="container" id="table">
    <div class="row">
        <table id="recordsTable" class="table table-striped dt-responsive fixed" style="width:100%">
        <div class="col-lg-12">
                                        <?php
                                            include "php/db_connect.php";

                                            $query = "SELECT * FROM podms_records";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                        <thead class="table-dark">
                            <tr>
                                <th>DATE</th>
                                <th data-priority="1">ID NUMBER</th>
                                <th>LAST NAME</th>
                                <th>FIRST NAME</th>
                                <th>MIDDLE NAME</th>
                                <th>COURSE</th>
                                <th>VIOLATION LEVEL</th>
                                <th>VIOLATION</th>
                                <th data-priority="2">STATUS</th>
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
                                        <td><?= $row['date'] ?></td> 
                                        <td><?= $row['id_number'] ?></td> 
                                        <td><?= $row['first_name'] ?></td> 
                                        <td><?= $row['last_name'] ?></td> 
                                        <td><?= $row['middle_name'] ?></td> 
                                        <td><?= $row['course'] ?></td> 
                                        <td><?= $row['violation_level']  ?></td> 
                                        <td><?= $row['violation']  ?></td> 
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

        <!-- Alertify JavaScript-->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- ----------------- -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>




    
    <script>
        $(document).ready(function(){  
    $('#recordsTable').DataTable({
        columnDefs: [
        { responsivePriority: 1, targets: 1},
        { responsivePriority: 2, targets: 0 }

    ],
    responsive: {
        details: true
    },
        pagingType: "numbers"

    });  

    
}); 
    </script>



    
</body>
<script src="js/sidebar.js"></script>
</html>
