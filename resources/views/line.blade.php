<!DOCTYPE html>
<html lang="en">
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', '{{$latestLine->subt2}}');
      data.addColumn('number', '{{$latestLine->d1}}');
      data.addColumn('number', '{{$latestLine->d2}}');
      data.addColumn('number', '{{$latestLine->d3}}');
      var xValues = [
        {{$latestLine->dh1}},
        {{$latestLine->dh2}},
        {{$latestLine->dh3}},
        {{$latestLine->dh4}},

        // Ajoutez d'autres valeurs d'axe des x selon le besoin
      ];
      
      // Générez les lignes de données avec des valeurs aléatoires pour chaque colonne
      var rows = [];
      for (var i = 0; i < xValues.length; i++) {
        var row = [xValues[i]];
        for (var j = 0; j < 3; j++) { // Trois colonnes de données
          row.push(Math.random() * 90); // Valeurs aléatoires entre 0 et 90
        }
        rows.push(row);
      }
      data.addRows(rows);
      var options = {
        chart: {
          title: '{{$latestLine->title}}',
          subtitle: '{{$latestLine->subt1}}'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        },
        vAxis:{
            ticks : [@foreach($valuesForVAxis as $value) {{$value}}, @endforeach]
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>


