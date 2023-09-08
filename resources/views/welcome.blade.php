<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Binspro</title>
    <script src="https://d3js.org/d3.v5.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="antialiased">
    @livewire('navbar')
    <x-heroe />
    {{-- Explore the solutions --}}
    <x-block />
    <x-informative-circle />
    @stack('modals')
    @include('components.footer.index')
    {{-- Cliente --}}
    @livewireScripts
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('wheelChart', () => ({
                init() {
                    var data = ["Texto 1", "Texto 2", "Texto 3", "Texto 4", "Texto 5", "Texto 6",
                        "Texto 7", "Texto 8"
                    ];
                    var colours = ['#e53e3e', '#f56565', '#f6ad55', '#f6e05e', '#68d391', '#48bb78',
                        '#38b2ac', '#4299e1'
                    ];
                    var width = 200,
                        height = 200;
                    var pie = d3.pie()(data);
                    var arc = d3.arc().innerRadius(50).outerRadius(100);
                    var svg = d3.select(this.$refs.chart).append("svg").attr("width", width).attr(
                        "height", height);
                    var g = svg.append("g").attr("transform", "translate(" + width / 2 + "," + height /
                        2 + ")");
                    var wheel = g.selectAll("path")
                        .data(pie)
                        .enter().append("path")
                        .attr("d", arc)
                        .attr("fill", function(d, i) {
                            return colours[i];
                        })
                        .on("mouseover", (d, i, nodes) => {
                            d3.select(nodes[i]).attr("transform", "scale(1.2)");
                            this.selected = i + 1;
                        })
                        .on("mouseout", (d, i, nodes) => {
                            d3.select(nodes[i]).attr("transform", "scale(1)");
                            this.selected = null;
                        });
                    var text = g.selectAll("text")
                        .data(pie)
                        .enter().append("text")
                        .attr("transform", function(d) {
                            return "translate(" + arc.centroid(d) + ")";
                        })
                        .attr("dy", ".35em")
                        .text(function(d) {
                            return d.data;
                        });
                }
            }));
        });
    </script>
</body>
