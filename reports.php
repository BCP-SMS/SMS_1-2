<?php 
include "php/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>

</head>
<body>
<?php include "sidebar.php"; ?>

<section class="home">
  
  <?php include "navbar.php"; ?>

  <div class="text">REPORTS</div>


<div class="container" id="table">
    <div class="row">
        <table id="reportsTable" class="table table-striped dt-responsive nowrap" style="width:100%">
        <div class="col-lg-12">
                                        <?php
                                            include "php/db_connect.php";

                                            $query = "SELECT * FROM podms_reports";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                        <thead class="table-dark">
                            <tr>
                                <th data-priority="1">DATE</th>
                                <th>FROM</th>
                                <th>CONTENT</th>
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
                                    <tr id="<?=$row['id'];?>">
                                        <td><?= $row['date'] ?></td>
                                        <td><?= $row['from'] ?></td>
                                        <td><?= $row['content'] ?></td>
                                        <td>
                                            <?php if ($row['status']==1){
                                                echo '<p><a class="badge text-bg-danger" href="php/data_status.php?id='.$row['id'].'&status=2">UNREAD</a></p>';
                                            }elseif ($row['status']==2){
                                                echo '<p class="badge text-bg-success">READ</p>';
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
    $('#myTable').DataTable({
        columnDefs: [
        { responsivePriority: 1, targets: 1},
        { responsivePriority: 2, targets: -1 }

    ],
    responsive: {
        details: true
    },
        pagingType: "numbers"

    });  

    
});  




    </script>


</body>
<script src="js/datatable.js"></script>
<script src="js/sidebar.js"></script>
</html>
