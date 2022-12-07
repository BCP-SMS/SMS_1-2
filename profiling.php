<?php
include "php/db_connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head id="head">
<?php include "head.php"; ?>

</head>
<body id="body">
<?php include "sidebar.php"; ?>

<section class="home" id="home">
  
  <?php include "navbar.php"; ?>
    <div class="text">PROFILING</div>

                <!-- ADD BUTTON @ BOTTOM -->
                <div class="home-content">
        <div class="add_icon">
        <button class="modal-button fa fa-square-plus" id="add" type="button"  data-bs-toggle="modal" data-bs-target="#addModal" title="ADD REPORT"></button>


<div class="container">
    <!-- Add Report -->
    <div class="modal modal-xl fade " id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Profiling</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addData">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3 addForm">
                    <input type="number" name="idNum" id="idNum" class="form-control form__input" autocomplete="off" placeholder=" ">
                    <label for="" class="form__label">ID Number</label>
                </div>

                <div class="mb-3 addForm">
                    <input type="text" name="fname" class="form-control form__input" autocomplete="off" placeholder=" "/>
                    <label for="" class="form__label">First Name</label>
                </div>

                <div class="mb-3 addForm">
                    <input type="text" name="mname" class="form-control form__input" autocomplete="off" placeholder=" "/>
                    <label for="" class="form__label">Middle Name</label>
                </div>
                <div class="mb-3 addForm">
                    <input type="text" name="lname" class="form-control form__input" autocomplete="off" placeholder=" "/>
                    <label for="" class="form__label">Last Name</label>
                </div>
                <div class="mb-3 addForm">
                    <input type="text" name="course" class="form-control form__input" autocomplete="off" placeholder=" "/>
                    <label for="" class="form__label">Course</label>
                </div>
                
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>



         <!-- SANCTION MODAL START -->

         <div class="modal modal-xl fade" id="sanctionModal" data-bs-backdrop="static"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                        <h1 class="fs-5 opacity-75">Offense</h1>

                        <div class="wrapper_radio">
                <div class="radio_tabs">
                    <label class="radio_wrap" data-radio="radio_1" >
                            <input type="radio" name="offense" class="input" value="Minor" onclick="hideDiv()" checked>
                            <span class="radio_mark">
                                Minor
                            </span>
                        </label>
                    <label class="radio_wrap" data-radio="radio_2" >
                            <input type="radio" name="offense" class="input" value="Major" onclick="hideDiv()">
                            <span class="radio_mark">
                                Major
                            </span>
                        </label>
                    <label class="radio_wrap" data-radio="radio_3" >
                            <input type="radio" name="offense" class="input" value="Grave" onclick="hideDiv()">
                            <span class="radio_mark">
                                Grave
                            </span>
                        </label>
                </div>


                <div class="content">

                    <div class="radio_content radio_1">

                        <div class="content-wrapper">                    
                            <label class="option_item">
                        <input type="radio" class="checkbox" name="level" id="level" value="Minor Violation 1"  onclick="hideDiv()"
                        checked>
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Minor Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="level" value="Minor Violation 2" onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Minor Violation 2</div>
                        </div>
                    </label>
                    <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="level" value="Minor Violation 3" onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Minor Violation 3</div>
                        </div>
                        </label>

                        <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="opt" value="otherMinor" onclick="showDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Others: </div>
                        </div>
                        </label>

                    <div class="violForm" id="spec1" style="display: none;">
                    <input type="text" name="specifiedMinor" id="level" class="form-control form__input_viol" autocomplete="off" placeholder="specify"/>
                </div>

                    </div>

                    </div>

                    <div class="radio_content radio_2">
                     <div class="content-wrapper">                    
                            <label class="option_item">
                        <input type="radio" class="checkbox" name="level" id="level" value="Major Violation 1" onclick="hideDiv()" checked>
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item">
                        <input type="radio" class="checkbox" name="level" id="level" value="Major Violation 2"  onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 2</div>
                        </div>
                    </label>
                    <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="level" value="Major Violation 3" onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 3</div>
                        </div>
                        </label>

                        <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="opt" value="otherMajor" onclick="showDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Others: </div>
                        </div>
                        </label>

                    <div class="violForm" id="spec2" style="display: none;">
                    <input type="text" name="specifiedMajor" id="level" class="form-control form__input_viol" autocomplete="off" placeholder="specify"/>
                </div>

            </div>
                    </div>

                    <div class="radio_content radio_3">

                     <div class="content-wrapper">                    
                            <label class="option_item" onclick="hideDiv()">
                        <input type="radio" class="checkbox" name="level" id="level" value="Grave Violation 1" >
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Grave Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item" onclick="hideDiv()">
                        <input type="radio" class="checkbox" name="level" id="level" value="Grave Violation 2" >
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Grave Violation 2</div>
                        </div>
                    </label>
                    <label class="option_item" onclick="hideDiv()">
                        <input type="radio" class="checkbox" name="level" id="level" value="Grave Violation 3"
                        >
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Grave Violation 3</div>
                        </div>
                        </label>

                        <label class="option_item" onclick="showDiv()">
                        <input type="radio" class="checkbox" name="level" id="opt" value="otherGra">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Others: </div>
                        </div>
                        </label>

                    <div class="violForm" id="spec3" style="display: none;">
                    <input type="text" name="specifiedGra" id="level" class="form-control form__input_viol" autocomplete="off" placeholder="specify"/>
                </div>

                    </div>
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
                <button type="submit" class="btn btn-secondary" id="sancUp">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- SANCTION MODAL END -->



<div class="container" id="table">
    <div class="row">
        <table id="profilingTable" class="table table-striped dt-responsive fixed" style="width:100%">
        <div class="col-lg-12">
                             <?php

                                 $query = "SELECT * FROM podms_profiling";
                                 $query_run = mysqli_query($conn, $query);
                            ?>
                        <thead class="table-dark">
                            <tr>
                                <th>DATE</th>
                                <th data-priority="1">STUDENT <br> NUMBER</th>
                                <th>LAST <br> NAME</th>
                                <th>FIRST <br>  NAME</th>
                                <th>MIDDLE <br>  NAME</th>
                                <th data-priority="2">COURSE</th>
                                <th>STATUS</th>

                                <th data-priority="2">ACTION</th>
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
                                        <td><?= $row['id_number'] ?></td>
                                        <td><?= strtoupper($row['last_name']) ?></td>
                                        <td><?= strtoupper($row['first_name'])  ?></td>
                                        <td><?= strtoupper($row['middle_name']) ?></td>
                                        <td><?= strtoupper($row['course']) ?></td>
                                        <td><?php if ($row['status']==1){
                                                echo '<p class="badge text-bg-danger">FOR INVESTIGATION</p>';
                                            }elseif ($row['status']==3){
                                                echo '<p class="badge text-bg-success">CLEARED</p>';
                                            }else{
                                                echo '<p class="badge text-bg-warning">UNDEFINED STATUS!</p>';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                        <button type="button" value="<?=$row['id'];?>" class="btn btn-secondary btn-sm" id="sanctionBtn">Sanction</button>
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

    </section>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script>
        
        function showDiv(){
            document.getElementById('spec1').style.display='flex';
            document.getElementById('spec2').style.display='flex';
            document.getElementById('spec3').style.display='flex';


        }
        function hideDiv(){
            document.getElementById('spec1').style.display='none';
            document.getElementById('spec2').style.display='none';
            document.getElementById('spec3').style.display='none';

        }

        $(document).on('click', '#sancUp', function () {
            document.getElementById('spec1').style.display='none';
            document.getElementById('spec2').style.display='none';
            document.getElementById('spec3').style.display='none';

            });

            </script>
            <script>
                
        /* by default hide all radio_content div elements except first element */
			$(".content .radio_content").hide();
			$(".content .radio_content:first-child").show();

			/* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
			$(".radio_wrap").click(function(){
			  var current_radio = $(this).attr("data-radio");
			  $(".content .radio_content").hide();
			  $("."+current_radio).show();
			})
    </script>
    
    <script>
        $(document).ready(function(){  
    $('#profilingTable').DataTable({
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

            $(document).ready(function(){
                        $("#idNum").blur(function(){
                            var idNum = $(this).val();

                            $.ajax({
                                url: "php/code.php",
                                method : "POST",
                                data: {idNum:idNum},
                                datatype: "text",
                                success:function(html){
                                    
                                    
                                    var res = jQuery.parseJSON(response);
                                    if(res.status == 422) {
                                        $('#errorMessage').removeClass('d-none');
                                        $('#errorMessage').text(res.message);


                                    }
                                }
                            });
                        });
                    });

                $(document).on('submit', '#addData', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("addData", true);

            $.ajax({
                type: "POST",
                url: "php/code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#addModal').modal('hide');
                        $('#addData')[0].reset();
                        
                        $('#head').load("profiling.php");
                        
                        alertify.set('notifier','position', 'bottom-left');
                        alertify.success(res.message);
                        
                        
                        // location.reload(true);


                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });


        // -------------------------SANCTION-------------------------

        $(document).on('click', '#sanctionBtn', function (e) {


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

                            $('#head').load("profiling.php");
                            //location.reload(true);



                        }else if(res.status == 500) {
                            alert(res.message);
                        }
                    }
                });

                });
       
        
    </script>
    
    

    
    <script src="js/sidebar.js"></script>
</body>
</html>
