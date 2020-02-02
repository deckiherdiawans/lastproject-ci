<div class="dashboard-wrapper">
    <form method="post" action="">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" for="from">From</span>
            </div>
            <input type="date" class="form-control" id="from" name="from">
            <div class="input-group-prepend">
                <span class="input-group-text" for="until">Until</span>
            </div>
            <input type="date" class="form-control" id="until" name="until">
            <div class="input-group-append">
                <button type="submit" class="btn btn-grey">Generate</button>
            </div>
        </div>
    </form>
    <div style="width: 100%; height: 500px;" id="chart"></div>
    <div class="bg-white pl-4 pr-4 pb-3">
        <table class="table bg-white text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
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
    </div>
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