<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Percentage'],
                ['{{ $latestPie->d1 }}', {{ $latestPie->pour1 }}],
                ['{{ $latestPie->d2 }}', {{ $latestPie->pour2 }}],
                ['{{ $latestPie->d3 }}', {{ $latestPie->pour3 }}],
                ['{{ $latestPie->d4 }}', {{ $latestPie->pour4 }}],
                ['{{ $latestPie->d5 }}', {{ $latestPie->pour5 }}]
            ]);

            var options = {
                title: '{{ $latestPie->title }}'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</body>
</html>
