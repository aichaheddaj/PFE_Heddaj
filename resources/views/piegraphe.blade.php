<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Pie Charts</h1>

        <!-- Box for each pie chart -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @if($pies->count() > 0)
                @foreach($pies as $pie)
                <div class="border rounded-lg p-4">
                    <div id="piechart-{{ $pie->id }}" style="height: 200px; border-radius:8px;"></div>
                </div>
                @endforeach
            @else
                <p>No pie chart data available</p>
            @endif
        </div>

        <!-- Button to create new pie chart -->
        <a href="{{ route('pieform') }}" class="btn btn-primary mt-4">Create Pie Chart</a>
    </div>

    <!-- Script to load Google Charts and draw pie charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            @foreach($pies as $pie)
                var data{{ $pie->id }} = google.visualization.arrayToDataTable([
                    ['Task', 'Percentage'],
                    ['{{ $pie->d1 }}', {{ $pie->pour1 }}],
                    ['{{ $pie->d2 }}', {{ $pie->pour2 }}],
                    ['{{ $pie->d3 }}', {{ $pie->pour3 }}],
                    ['{{ $pie->d4 }}', {{ $pie->pour4 }}],
                    ['{{ $pie->d5 }}', {{ $pie->pour5 }}]
                ]);

                var options{{ $pie->id }} = {
                    title: '{{ $pie->title }}'
                };

                var chart{{ $pie->id }} = new google.visualization.PieChart(document.getElementById('piechart-{{ $pie->id }}'));
                chart{{ $pie->id }}.draw(data{{ $pie->id }}, options{{ $pie->id }});
            @endforeach
        }
    </script>
</body>
</html>
