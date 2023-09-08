<div class="w-64 h-64 mx-auto" x-data="{ selected: null }" @mouseleave="selected = null">
    <svg class="w-full h-full" viewBox="0 0 100 100" style="font-family: Arial;">
        @foreach (range(1, 8) as $i)
            <path
                d="M50 50 L{{ 50 + 45 * cos(deg2rad(($i - 1) * 45)) }} {{ 50 + 45 * sin(deg2rad(($i - 1) * 45)) }} A45 45 0 0 1 {{ 50 + 45 * cos(deg2rad($i * 45)) }} {{ 50 + 45 * sin(deg2rad($i * 45)) }} Z"
                fill="#68C3ED" @mouseover="selected = {{ $i }}"
                :class="{ 'scale-110 transform-origin-center': selected === {{ $i }} }"
                class="transition-all duration-300 ease-in-out cursor-pointer shadow-lg" stroke="white"
                stroke-width="0.5"></path>
        @endforeach
        <circle cx="50" cy="50" r="20" fill="white" />
        <text x="50" y="50" text-anchor="middle" dy=".3em" font-size="10">Texto central</text>
    </svg>
</div>


{{-- <div id="chart" class="h-96"></div>

<script>
    var data = [{
            value: 10,
            label: 'Texto 1'
        },
        {
            value: 10,
            label: 'Texto 2'
        },
        {
            value: 10,
            label: 'Texto 3'
        },
        {
            value: 10,
            label: 'Texto 4'
        },
        {
            value: 10,
            label: 'Texto 5'
        },
        {
            value: 10,
            label: 'Texto 6'
        },
        {
            value: 10,
            label: 'Texto 7'
        },
        {
            value: 10,
            label: 'Texto 8'
        }
    ];

    var width = 100;
    var height = 100;
    var radius = Math.min(width, height) / 2;

    var color = d3.scaleOrdinal()
        .range(["#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED"]);

    var svg = d3.select("#chart")
        .append("svg")
        .attr("width", width)
        .attr("height", height)
        .append("g")
        .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

    var arc = d3.arc()
        .outerRadius(radius - 10)
        .innerRadius(0);

    var arcHover = d3.arc()
        .outerRadius((radius - 10) * 1.1)
        .innerRadius(0);

    var pie = d3.pie()
        .sort(null)
        .value(function(d) {
            return d.value;
        });

    var g = svg.selectAll(".arc")
        .data(pie(data))
        .enter().append("g")
        .attr("class", "arc");

    var path = g.append("path")
        .attr("d", arc)
        .style("fill", function(d) {
            return color(d.data.value);
        });

    path.on("mouseover", function(d) {
            d3.select(this)
                .attr("d", arcHover);
        })
        .on("mouseout", function(d) {
            d3.select(this)
                .attr("d", arc);
        });

    g.append("text")
        .attr("transform", function(d) {
            return "translate(" + arc.centroid(d) + ")";
        })
        .attr("dy", ".35em")
        .text(function(d) {
            return d.data.label;
        });
</script> --}}

<script src="https://d3js.org/d3.v5.min.js"></script>

<div id="chart"></div>

<style>
    .arc path {
        stroke: #fff;
        stroke-width: 2;
    }

    .shadow {
        filter: url(#dropshadow);
    }
</style>

<svg height="0">
    <defs>
        <filter id="dropshadow" height="130%">
            <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
            <feOffset dx="2" dy="2" result="offsetblur" />
            <feComponentTransfer>
                <feFuncA type="linear" slope="0.5" />
            </feComponentTransfer>
            <feMerge>
                <feMergeNode />
                <feMergeNode in="SourceGraphic" />
            </feMerge>
        </filter>
    </defs>
</svg>

<script>
    var data = [{
            value: 10,
            label: 'Texto 1'
        },
        {
            value: 10,
            label: 'Texto 2'
        },
        {
            value: 10,
            label: 'Texto 3'
        },
        {
            value: 10,
            label: 'Texto 4'
        },
        {
            value: 10,
            label: 'Texto 5'
        },
        {
            value: 10,
            label: 'Texto 6'
        },
        {
            value: 10,
            label: 'Texto 7'
        },
        {
            value: 10,
            label: 'Texto 8'
        }
    ];

    var width = 400;
    var height = 400;
    var radius = Math.min(width, height) / 2;

    var color = d3.scaleOrdinal()
        .range(["#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED", "#68C3ED"]);

    var svg = d3.select("#chart")
        .append("svg")
        .attr("width", width)
        .attr("height", height)
        .append("g")
        .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

    var arc = d3.arc()
        .outerRadius(radius - 10)
        .innerRadius(0);

    var arcHover = d3.arc()
        .outerRadius((radius - 10) * 1.1)
        .innerRadius(0);

    var pie = d3.pie()
        .sort(null)
        .value(function(d) {
            return d.value;
        });

    var g = svg.selectAll(".arc")
        .data(pie(data))
        .enter().append("g")
        .attr("class", "arc");

    var path = g.append("path")
        .attr("d", arc)
        .style("fill", function(d) {
            return color(d.data.value);
        });

    path.on("mouseover", function(d) {
            d3.select(this)
                .attr("d", arcHover)
                .classed("shadow", true);
        })
        .on("mouseout", function(d) {
            d3.select(this)
                .attr("d", arc)
                .classed("shadow", false);
        });

    g.append("text")
        .attr("transform", function(d) {
            return "translate(" + arc.centroid(d) + ")";
        })
        .attr("dy", ".35em")
        .text(function(d) {
            return d.data.label;
        });
</script>
