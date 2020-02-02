<div class="chart-card">
    <div class="chart-card-body">
        <div style="width: 100%; height: 500px;" id="chart"></div>
        <table class="table bg-white text-center mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
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