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
                    <td class="text-center" id="no-border"><h5>Most Cases by Subject</h5></td>
                </tr>
            </tbody>
        </table>
        <div style="width: 100%; height: 500px;" id="chart"></div>
        <br>
        <div class="bg-white pl-4 pr-4 pb-3">
            <table class="table bg-white text-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Amount of Assignment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $s = 1; foreach($table as $tab) : ?>
                    <tr>
                        <th scope="row"><?= $s; ?></th>
                        <td><?= $tab['subject']; ?></td>
                        <td><?= $tab['amount']; ?></td>
                    </tr>
                    <?php $s++; endforeach; ?>
                </tbody>
            </table>
            <hr>
        </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Subject', 'Amount'],
                    <?php
                        foreach ($subject as $sub) {
                            echo "['".$sub['subject']."', ".$sub['amount']."],";
                        }
                    ?>
                ]);

                var options = {
                    title: '',
                    is3D: true,
                    pieSliceText: 'value-and-percentage',
                };

                var chart = new google.visualization.PieChart(document.getElementById('chart'));
                chart.draw(data, options);
            }
        </script>
    </body>
</html>