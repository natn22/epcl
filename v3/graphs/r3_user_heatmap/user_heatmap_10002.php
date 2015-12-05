
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  
  <style type='text/css'>
    body, h1, h2, h3, h4, h5 {
  font-family: 'Open Sans', sans-serif;
}
  </style>
  



<script type='text/javascript'>//<![CDATA[

$(function () {

    $('#container').highcharts({

        chart: {
            type: 'heatmap',
            marginTop: 40,
            marginBottom: 80,
            plotBorderWidth: 1
        },


        title: {
            text: 'No of +ve and -ve Answers - Participant 10002'
        },

        xAxis: {
            categories: ['Block 1', 'Block 2', 'Block 3', 'Block 4', 'Block 5', 'Block 6', 'Block 7', 'Block 8', 'Block 9', 'Block 10']
        },

        yAxis: {
            categories: ['+ve Answer', '-ve Answer'],
            title: null
        },

        colorAxis: {
            min: 0,
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },

        legend: {
            align: 'right',
            layout: 'vertical',
            margin: 0,
            verticalAlign: 'top',
            y: 25,
            symbolHeight: 280
        },

        tooltip: {
            formatter: function () {
                return '<b> Participant 10002 answered ' + 
                    this.point.value + ' </b> trials <br>' + 'with '+ this.series.yAxis.categories[this.point.y] + ' on '+this.series.xAxis.categories[this.point.x] ;
            }
        },

        series: [{
            name: 'No of +ve and -ve Answers - Participant 10002',
            borderWidth: 1,
            data: [[0, 0, 4], [0, 1, 4], [1, 0, 3], [1, 1, 5], [2, 0, 5], [2, 1, 3], [3, 0, 6], [3, 1, 2], [4, 0, 5], [4, 1, 3], [5, 0, 4], [5, 1, 4],  [6, 0, 1], [6, 1, 7], [7, 0, 3], [7, 1, 5], [8, 0, 5], [8, 1, 2], [9, 0, 3], [9, 1, 5]],
            dataLabels: {
                enabled: true,
                color: '#000000'
            }
        }]

    });
});
//]]> 

</script>

</head>
<body>
  <script src="http://prabhunathan.com/hci/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<div id="container" style="height: 400px; min-width: 310px; max-width: 800px; margin: 0 auto"></div>
  
</body>

</html>

