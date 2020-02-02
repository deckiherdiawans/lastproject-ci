<!DOCTYPE html>
<html class="bg-white">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
    	<link rel="icon" type="image/png" href="<?= base_url('images/'); ?>iconrevota.jpg">
    	<title>Revota Support System</title>
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap-441/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>libs/css/style-agent.css">
        <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/fonts/fontawesome/css/fontawesome-all.css">
    </head>
    
    <body class="bg-white">
        <table class="table">
            <tbody>
                <tr>
                    <th class="text-center pt-4"><h5>PT. Ava Revota</h5></th>
                </tr>
                <tr>
                    <td class="text-center" id="no-border"><h5>Agent Performance by Assignments</h5></td>
                </tr>
            </tbody>
        </table>
        <div class="print-chart-card">
            <div class="chart-card-body">
                <div style="width: 100%; height: 500px;" id="chart"></div>
                <table class="table bg-white text-center mt-5">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Agent</th>
                            <th scope="col">Amount of Assignments in Last 1 Week</th>
                            <th scope="col">Amount of Assignments in Last 2 Weeks</th>
                            <th scope="col">Amount of Assignments in Last 3 Weeks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $s = 1; foreach($table as $tab) : ?>
                        <tr>
                            <th scope="row"><?= $s; ?></th>
                            <td><?= $tab['agent']; ?></td>
                            <td><?= $tab['w1']; ?></td>
                            <td><?= $tab['w2']; ?></td>
                            <td><?= $tab['w3']; ?></td>
                        </tr>
                        <?php $s++; endforeach; ?>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Agent', 'Last 1 Week', 'Last 2 Weeks', 'Last 3 Weeks'],
                    <?php
                        foreach ($performance as $perf) {
                            echo "['".$perf['agent']."', ".$perf['w1'].", ".$perf['w2'].", ".$perf['w3']."],";
                        }
                    ?>
                ]);

                var options = {
                    chart: {
                        title: '',
                    },
                    axes: {
                        x: {0: {side: 'top', label: 'Agent'}}
                    },
                    vAxes: {0: {title: 'Amount of Assignments'}}
                };

                var chart = new google.charts.Bar(document.getElementById('chart'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>
    </body>
</html>