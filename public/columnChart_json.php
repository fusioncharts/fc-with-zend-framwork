<?php
    /*
        Include the `fusioncharts.php` file that contains functions to embed the charts.
    */
    include("fusioncharts/fusioncharts.php");
?>
<html>
    <head>
        <title>FusionCharts XT   Simple Line Chart with XML Data</title>
        <!--   Include the `fusioncharts.js` file. This file is needed to render the chart. Ensure that the path to this JS file is correct. Otherwise, it may lead to JavaScript errors. -->
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    </head>
    <body>
        <?php
            /*
                Create a `lineChart` chart object using the FusionCharts PHP class constructor. Syntax for the constructor is `FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "data format", "data source")`. To load data from an XML string, `xml` is passed as the value for the data format parameter of the constructor. The actual XML data for the chart is passed as a string to the constructor.
            */
$columnChart = new FusionCharts("column3d", "myFirstChart" , 600, 300, "chart 1", "json",
'{
            "chart": {
                "caption": "Quarterly Revenue",
                "subCaption": "Last year",
                "xAxisName": "Quarter",
                "yAxisName": "Amount (In USD)",
                "theme": "fint",
                "numberPrefix": "$",
                //Setting the usage of plot gradient
                "usePlotGradientColor": "1",
                //Custom plot gradient color
                "plotGradientColor": "#eeeeee"
            },
            "data": [
                {
                    "label": "Q1",
                    "value": "1950000",
                    "color": "#008ee4"
                }, 
                {
                    "label": "Q2",
                    "value": "1450000",
                    "color": "#9b59b6"
                }, 
                {
                    "label": "Q3",
                    "value": "1730000",
                    "color": "#6baa01"
                }, 
                {
                    "label": "Q4",
                    "value": "2120000",
                    "color": "#e44a00"
                }
            ]
        }'
                                        );
            // Render the chart
            $columnChart->render();
        ?>
        <div id="chart 1">Fusion Charts will render here</div>
    </body>
</html>
