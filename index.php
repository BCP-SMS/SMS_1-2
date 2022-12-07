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
    

    <div class="text">HOME</div>
    

    <?php 
  $con = new mysqli('localhost','root','','db_test');
  $query = $con->query("SELECT DATE(date) as Month, COUNT(id) as Total FROM podms_reports GROUP BY MONTH;");
  
  

  foreach($query as $data)
  {
    $month[] = $data['Month'];
    $total[] = $data['Total'];
  }

?>

<div class="container" width="100%">
    <div class="chartBox">
        <canvas id="myChart" ></canvas>
        <input onchange="filterData()" type="date" id="startDate" value="2020-01-01">
        <input onchange="filterData()" type="date" id="endDate" value="2022-12-31">
    </div>    

    <div class="row">
        <canvas id="lineChart"></canvas>
    </div>   
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js" integrity="sha512-d6nObkPJgV791iTGuBoVC9Aa2iecqzJRE0Jiqvk85BhLHAPhWqkuBiQb1xz2jvuHNqHLYoN3ymPfpiB1o+Zgpw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

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
  const dateArrayJS = <?php echo json_encode($month) ?>;

  const dateChartJS = dateArrayJS.map((day, index) => {
    let dayjs = new Date(day);
    console.log(dayjs);
    return dayjs.setHours(0,0,0,0);
  })
  const dataPoints = <?php echo json_encode($total) ?>;
  const data = {
    labels: dateChartJS,
    datasets: [{
      label: 'No. of people that have records',
      data: dataPoints,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
        responsive: true,
        scales: {
            x:{
            type: 'time',
            time:{
                unit: 'day',
            }
            },
            y: {
                beginAtZero: true,
                grace: true,
                ticks: {
                    stepSize: 1
                }   
            },
        }
}
  };


</script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );


  function filterData(){
    const dates2 = [...labels];
    console.log(dates2);
    const startDate = document.getElementById('startDate');
    const endDate = document.getElementById('endDate');

    const indexStartDate = dates2.indexOf(startDate.value);
    const indexEndDate = dates2.indexOf(endDate.value);

    const filterDate = dates2.slice(indexStartDate, indexEndDate + 1);


    
    const dataPoints2 = [...dataPoints];
    const filterDataPoints = dates2.slice(indexStartDate, indexEndDate + 1);
    
    myChart.config.data.datasets[0].data = filterData;
    myChart.update();
  }

</script>





    </section>



</body>


<script src="js/sidebar.js"></script>
</html>
