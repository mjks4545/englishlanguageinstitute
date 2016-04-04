
</div>

</div><!--/.col-->

</div><!--/.row-->
</div>	<!--/.main-->

<script src="<?=base_url()?>public/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>public/js/chart.min.js"></script>
<script src="<?=base_url()?>public/js/chart-data.js"></script>
<script src="<?=base_url()?>public/js/easypiechart.js"></script>
<script src="<?=base_url()?>public/js/easypiechart-data.js"></script>
<script src="<?=base_url()?>public/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url()?>public/js/custom.js"></script>
<script>
    window.onload = function(){
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive : true,
            scaleLineColor: "rgba(255,255,255,.2)",
            scaleGridLineColor: "rgba(255,255,255,.05)",
            scaleFontColor: "#ffffff"
        });
        var chart2 = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(chart2).Bar(barChartData, {
            responsive : true,
            scaleLineColor: "rgba(255,255,255,.2)",
            scaleGridLineColor: "rgba(255,255,255,.05)",
            scaleFontColor: "#ffffff"
        });
        var chart5 = document.getElementById("radar-chart").getContext("2d");
        window.myRadarChart = new Chart(chart5).Radar(radarData, {
            responsive : true,
            scaleLineColor: "rgba(255,255,255,.05)",
            angleLineColor : "rgba(255,255,255,.2)"
        });

    };
</script>
</body>

</html>
