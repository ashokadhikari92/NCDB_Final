@extends('layouts1.reports.master')
<style>

    body {
        font: 10px sans-serif;
    }

    .arc path {
        stroke: #fff;
    }

</style>
@section('content')
    <div class="panel-body" id="pie-chart">
        <div class="col-lg-12">
            <div class="col-lg-6" id="vaccination-report1">

            </div>
            <div class="col-lg-6" id="vaccination-report2">

            </div>
        </div>
        <div class="col-lg-12" id="vaccination-report3">

        </div>

    </div>
@stop

@section('js_section')
    <script src="{{ asset('assets/ncdb/js/child_vaccine/child_vaccine.js') }}"></script>
    <script>

        var width = 960,
                height = 500,
                radius = Math.min(width, height) / 2;

        var color = d3.scale.ordinal()
                .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

        var arc = d3.svg.arc()
                .outerRadius(radius - 10)
                .innerRadius(0);

        var pie = d3.layout.pie()
                .sort(null)
                .value(function(d) { return d.population; });

        var svg = d3.select("#pie-chart").append("svg")
                .attr("width", width)
                .attr("height", height)
                .append("g")
                .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

        d3.csv("{{url('getData/child/pieChart')}}", function(error, data) {

            data.forEach(function(d) {
                d.population = +d.population;
            });

            var g = svg.selectAll(".arc")
                    .data(pie(data))
                    .enter().append("g")
                    .attr("class", "arc");

            g.append("path")
                    .attr("d", arc)
                    .style("fill", function(d) { return color(d.data.gender); });

            g.append("text")
                    .attr("transform", function(d) { return "translate(" + arc.centroid(d) + ")"; })
                    .attr("dy", ".35em")
                    .style("text-anchor", "middle")
                    .text(function(d) { return d.data.gender; });

        });

    </script>
@stop