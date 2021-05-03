@extends('progressRecords.main') 
@section('content') {{-- load AJAX api --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  var Weight = <?php echo $Weight; ?>;

var name = <?php echo $name; ?>;

var vmin = <?php echo $vmin; ?>;
var vmax = <?php echo $vmax; ?>;
var hmin = <?php echo $hmin; ?>;
var hmax = <?php echo $hmax; ?>;

  console.log(Weight);


  google.charts.load("visualization", {
    packages: ["corechart"]
  });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable(Weight);

var options = {
      title: 'Maendeleo ya ukuaji uzito wa '+name,
      legend: 'bottom',
      curveType: 'function',
      colors: ['green'],
      lineWidth: 1,
      explorer: {
        actions: ['dragToZoom', 'rightClickToReset'],
      },
      chartArea: {
        left: '5%',
        top: '5%',
        width: '100%',
        height: '10%',
        bottom: '20%'
      },
      vAxis: {
        title: 'Uzito',
        viewWindow: {
          min: vmin,
          max: vmax,
        },
      },
      hAxis: {
        title: "hudhurio",
        viewWindow: {
          min: hmin,
          max: hmax,
          gridlines: {
            color: '#333',
            count: -1,
            color: 'blue',
          }
        },
      },
    };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);

      }

</script>
</head>
@endsection