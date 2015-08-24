<?php
/**
 * Created by PhpStorm.
 * User: tuyoo
 * Date: 15/8/21
 * Time: 上午11:49
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>d3.js</title>
    <script src="node_modules/d3/d3.min.js"></script>
    <style>
        body{margin:0;padding:0;}
        #wrap{width:400px;height:400px;margin:0 auto;border:1px solid #ccc;}
    </style>
</head>
<body>
<div id="wrap"></div>
</body>
<script>
    var dataset = [90,29,48,56,100,105,102,45,87,25];
    var wrap = d3.select('#wrap');
    var rectHeight = 20;
    wrap.append('svg')
        .attr('width',400)
        .attr('height',400);
    var svg = wrap.select('svg');
    svg.transition().style('background-color','#a9a9a9');
    svg.selectAll('rect')
        .data(dataset)
        .enter()
        .append('rect')
        .attr('x',20)
        .attr('y', function (d,i) {
            return i*rectHeight;
        })
        .attr('width', function (d) {
            return d;
        })
        .attr('height',rectHeight-2);
</script>
</html>