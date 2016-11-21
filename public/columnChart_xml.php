<?php
    /*
        Include the `fusioncharts.php` file that contains functions to embed the charts.
    */
    include("fusioncharts/fusioncharts.php");
?>
<html>
    <head>
        <title>FusionCharts XT - Simple Line Chart with XML Data</title>
        <!--  Include the `fusioncharts.js` file. This file is needed to render the chart. Ensure that the path to this JS file is correct. Otherwise, it may lead to JavaScript errors. -->
        <script src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    </head>
    <body>
        <?php
            /*
                Create a `lineChart` chart object using the FusionCharts PHP class constructor. Syntax for the constructor is `FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "data format", "data source")`. To load data from an XML string, `xml` is passed as the value for the data format parameter of the constructor. The actual XML data for the chart is passed as a string to the constructor.
            */
            $columnChart = new FusionCharts("column2d", "myFirstChart" , 600, 300, "chart-1", "xml",
                                            '<chart caption="Caption" subcaption="subCaption" xaxisname="XaxisName" plotToolText="$displayValue.%" yaxisname="Sales" linethickness="2" palettecolors="1074B2, 749A33, C6C0FF, D3B04E, cccccc " basefontcolor="#333333" basefont="Helvetica Neue,Arial" captionfontsize="14" subcaptionfontsize="14" subcaptionfontbold="0" showvalues="0" bgcolor="#ffffff" bgalpha="0" showshadow="0" canvasbgcolor="#ffffff" canvasborderalpha="0" divlinealpha="100" divlinecolor="#999999" divlinethickness="1" divlinedashed="1" divlinedashlen="1" exportEnabled="1" divlinegaplen="1" showxaxisline="1" xaxislinethickness="1" xaxislinecolor="#999999" showalternatehgridcolor="0"><set displayValue="15.12" label="Mon" value="15123" /><set displayValue="14.23" label="Tue" value="14233" /><set displayValue="23.51" label="Wed" value="23507" /><set displayValue="9.11" label="Thur" value="9110" /><set displayValue="15.53" label="fri" value="15529" /><set displayValue="20.8" label="Sat" value="20803" /><set displayValue="19.2" label="Sun" value="19202" /></chart>'
                                        );
            // Render the chart
            $columnChart->render();
        ?>
        <div id="chart-1">Fusion Charts will render here</div>
    </body>
</html>
