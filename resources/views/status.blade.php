<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="{{url('css/status.css')}}">
    <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'sales', 'orders', 'visites'],
          ['JAN', 450, 900, 200],
          ['FEB', 680, 340, 480],
          ['MAR', 500, 930, 790],
          ['APR', 660, 420, 300],
          ['MAY', 230, 420, 120],
          ['JUN', 390, 520, 410],
          ['JUL', 560, 720, 600],
          ['AUG', 660, 340, 560],
          ['SEP', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Performance',
            subtitle: 'Visits And Sales Statistics',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

</head>
<body>
    <div class="container">
    <!-- ---------------------header----------------------- -->
        <div class="topbar">
            <div class="logo">
                <h2>MYPCB</h2>
            </div>

        </div>
    <!-- -------------------------header-------------------------     -->

    <!-- ---------------------------sidebar--------------------- -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-chart-bar" ></i>
                        <div>Status</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div>Orders</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div>Shipment</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-dollar-sign"></i>
                        <div>PromoCode</div>
                    </a>
                </li>

            </ul>
        </div>
    <!-- ----------------sidebar-------------------     -->


        <div class="main">
            <div class="cards">
                <div class="card" id="card1">
                    <div class="card-content"  >
                        <div class="card-name">Monthly Sales</div>
                        <div class="number">$12,000</div>

                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                </div>
                <div class="card" id="card2">
                    <div class="card-content">
                        <div class="card-name">Monthly Orders</div>
                        <div class="number">23,000</div>

                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                </div>
                <div class="card" id="card3">
                    <div class="card-content">
                        <div class="card-name">Online Visitors</div>
                        <div class="number">95,274</div>

                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-users-viewfinder"></i>
                    </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart">

                    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>


                </div>
                <div class="chart" id="doughnut-chart">
                    <h2>Traffic Sources</h2>
                    <canvas id="doughnut"></canvas>

                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="js/chart2.js"></script>
</body>
</html>
