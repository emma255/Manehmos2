@extends('layouts.main') @section('child')
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Document</title>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script>
            google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['Commute',  2],
                    ['Watch TV', 2],
                    ['Sleep',    7]
                    ]);

                    var options = {
                    title: 'My Daily Activities'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('child_chart'));

                    chart.draw(data, options);
                }          
          </script>
      </head>
      
     