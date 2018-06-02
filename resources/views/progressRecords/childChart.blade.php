<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable
        ([
          ['mwezi', 'Kilo'],
           [0, 3.5], [1, 4.5], [2, 5.0],
          // [3, 5.5], [4, 6], [5, 6.5], [6, 7], [7, 7.5],
          // [8, 8], [10, 8.5], [11, 9], [9, 9.5],
          // [12, 10], [13, 10.5], [14, 11], [15, 11.5],
          // [16, 12], [17, 12.5], [18, 13], [19, 13.5],
          // [20, 14], [21, 14.5], [22, 15], [23, 15.5],
          // [24, 16], [25, 16.5], [26, 17], [27, 17.5],
          // [28, 18], [29, 18.5], [30, 19], [31, 19.5],
          // [32, 20], [33, 20.2], [34, 20.4], [35, 20.6],
          // [36, 20.8], [37, 20.9], [38, 30], [39, 32],
          // [40, 34], [41, 36], [42, 38], [43, 40],
          // [44, 42], [45, 44], [46, 46], [47, 48],
          // [48, 50], [49, 52], [50, 54], [51, 56],
          // [48, 58], [49, 60], [50, 62], [51, 64],
          // [52, 66], [53, 68], [54, 70], [55, 72],
          // [56, 74], [57, 76], [58, 78], [59, 80], [60, 82]
        ]);

      var options = {
        legend: 'bottom',
        colors: ['green'],
        lineWidth: 5,
        lineDashStyle: [5, 1],
        explorer: {
          actions: ['dragToZoom', 'rightClickToReset'],
        },
        chartArea: {
          left: 80,
          top: 100,
          width: '70%',
          height: '50%',
        },
        vAxis: {
          min: 0,
          max: 60,
          viewWindow: {
            min: 0,
            max: 20,
            title: 'Uzito',
          },
        },
        hAxis: {
          title: 'mwezi',

          min: 0,
          max: 30,
          viewWindow: {
            min: 0,
            max: 60,
            title: 'Miezi',
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

<body>
  <div id="chart_div" style="width: 100%; height: 100%;"></div>
</body>

</html>