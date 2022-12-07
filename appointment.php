<?php
include "php/db_connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><?php include "head.php"; ?></head>
<body>
    <?php include "sidebar.php";?>

<section class="home">
  
  <?php include "navbar.php"; ?>
        <div class="text">APPOINTMENT</div>

        <div class="container" id="table">
    <div class="row">
        <table id="appointTable" class="table table-striped dt-responsive fixed" style="width:100%">
        <div class="col-lg-12">
                                        <?php
                                            include "php/db_connect.php";

                                            $query = "SELECT * FROM podms_sp_appointment";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                        <thead class="table-dark">
                            <tr>
                                <th data-priority="1">Complained <br> ID Number:   </th>
                                <th data-priority="2">Complained <br> First Name:  </th>
                                <th data-priority="3">Complained <br> Middle Name: </th>
                                <th data-priority="4">Complained <br> Last Name:   </th>
                                <th >Complained <br> Course:      </th>
                                <th>Complained <br> Description: </th>
                                <th data-priority="5">ACTION</th>
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
                                        <td><?= $row['complained_id_number'] ?>     </td> 
                                        <td><?= $row['complained_first_name']?>     </td>
                                        <td><?= $row['complained_middle_name']?>    </td> 
                                        <td><?= $row['complained_last_name']?>      </td> 
                                        <td><?= $row['complained_course']?>         </td>
                                        <td><?= $row['description']?>               </td>
                                        <td>
                                        <button type="button" value="<?=$row['id'];?>" class="btn btn-secondary btn-sm" id="sanctionBtn">Set an appointment</button>
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
    $('#appointTable').DataTable({
        columnDefs: [
        { responsivePriority: 1, targets: 1},
        { responsivePriority: 2, targets: -1 },
        { responsivePriority: 3, targets: -1 },
        { responsivePriority: 4, targets: -1 },
        { responsivePriority: 5, targets: 1 }

    ],
    responsive: {
        details: true
    },
        pagingType: "numbers"

    });
    </script>

</body>
<script src="js/sidebar.js"></script>
</html>
