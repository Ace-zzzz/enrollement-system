<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Element', 'Present', { role: 'style' }],
          ['Monday', 8.94, '#07BD19'],
          ['Tuesday', 10.49, '#07BD19'],
          ['Wednesday', 19.30, '#07BD19'],
          ['Thursday', 21.45, '#07BD19'],
          ['Friday', 21.45, '#07BD19'],
        ]);

        var options = {
          title: "Teacher's weekly attendance",
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnChart'));
        chart.draw(data, options);
      }
    </script>
    <style>
      .rounded {
        border-radius: 40px; /* Adjust as needed */
        background-color: #f9f9f9; /* Light background color for visibility */
        padding: 20px; /* Optional: add padding */
      }
    </style>
  </head>
  <body>
    <div id="columnChart" class="rounded  h-[333px] w-[385px] bg-white"></div>
  </body>
</html>
