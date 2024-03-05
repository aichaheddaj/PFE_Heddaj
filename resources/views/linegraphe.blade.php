<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        @foreach($pies as $pie)
          var data{{ $pie->id }} = new google.visualization.DataTable();
          data{{ $pie->id }}.addColumn('number', '{{$pie->subt2}}');
          data{{ $pie->id }}.addColumn('number', '{{$pie->d1}}');
          data{{ $pie->id }}.addColumn('number', '{{$pie->d2}}');
          data{{ $pie->id }}.addColumn('number', '{{$pie->d3}}');
          var xValues{{ $pie->id }} = [
            {{$pie->dh1}},
            {{$pie->dh2}},
            {{$pie->dh3}},
            {{$pie->dh4}},
            // Ajoutez d'autres valeurs d'axe des x selon le besoin
          ];
          
          // Générez les lignes de données avec des valeurs aléatoires pour chaque colonne
          var rows{{ $pie->id }} = [];
          for (var i = 0; i < xValues{{ $pie->id }}.length; i++) {
            var row = [xValues{{ $pie->id }}[i]];
            for (var j = 0; j < 3; j++) { // Trois colonnes de données
              row.push(Math.random() * 90); // Valeurs aléatoires entre 0 et 90
            }
            rows{{ $pie->id }}.push(row);
          }
          data{{ $pie->id }}.addRows(rows{{ $pie->id }});
          var options{{ $pie->id }} = {
            chart: {
              title: '{{$pie->title}}',
              subtitle: '{{$pie->subt1}}'
            },
            width: 400,
            height: 300,
            axes: {
              x: {
                0: {side: 'top'}
              }
            },
            vAxis:{
              ticks : [@foreach($valuesForVAxis as $value) {{$value}}, @endforeach]
            }
          };

          var chart{{ $pie->id }} = new google.charts.Line(document.getElementById('linechart-{{ $pie->id }}'));
          chart{{ $pie->id }}.draw(data{{ $pie->id }}, google.charts.Line.convertOptions(options{{ $pie->id }}));
        @endforeach
      }
    </script>
  </head>
  <body>
    <div class="container mx-auto mt-8">
      <h1 class="text-2xl font-bold mb-4">Line Charts</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @if($pies->count() > 0)
          @foreach($pies as $pie)
            <div class="border rounded-lg p-4">
              <div id="linechart-{{ $pie->id }}" style="height: 300px; border-radius:8px;"></div>
            </div>
          @endforeach
        @else
          <p>No line chart data available</p>
        @endif
      </div>
      <br>
      <br>  <br> <br> <br>
      <a href="{{ route('lineform') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Create Line Chart</a>
    </div>
  </body>
</html>
