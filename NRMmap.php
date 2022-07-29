<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>UGANDA Elections 2021</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/map.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.html">Uganda Elections 2021</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <!--<a class="nav-link px-3" href="#">Sign out</a>-->
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">
                                <span data-feather="home"></span>
                                MAP - Presidential Elections 2021
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bar.html">
                                <span data-feather="file"></span>
                                Bar Chart-Presidential Elections 2021
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="piechart.html">
                                <span data-feather="file"></span>
                                Pie Chart-Presidential Elections 2021
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="NRMmap.php">
                                <span data-feather="file"></span>
                                NRM-Presidential Elections 2021
                            </a>
                        </li>

                    </ul>


                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div style="width: 100%; height: 700px" id="map-area">
        </div>
        
    </body>

    <script src="js/highmaps.js"></script>
    <script src="js/ug-all.js"></script>

    <script>
        // Prepare demo data
        // Data is joined to map using value of 'hc-key' property by default.
        // See API docs for 'joinBy' for more info on linking data and map.
        var data = [
            ['ug-2595', 5275],
            ['ug-7073', 40900],
            ['ug-7074', 6814],
            ['ug-7075', 27341],
            ['ug-2785', 40777],
            ['ug-2791', 22029],
            ['ug-3385', 85241],
            ['ug-3388', 49807],
            ['ug-2786', 32310],
            ['ug-7056', 47696],
            ['ug-7083', 38972],
            ['ug-7084', 27467],
            ['ug-7058', 30451],
            ['ug-1678', 18589],
            ['ug-1682', 38619],
            ['ug-1683', 38189],
            ['ug-1685', 38427],
            ['ug-7051', 26880],
            ['ug-2762', 19322],
            ['ug-2767', 28233],
            ['ug-2777', 43275],
            ['ug-2778', 37106],
            ['ug-2780', 45980],
            ['ug-2781', 44679],
            ['ug-2782', 37856],
            ['ug-2783', 50932],
            ['ug-2779', 32999],
            ['ug-2784', 86248],
            ['ug-3382', 11317],
            ['ug-3384', 109275],
            ['ug-3389', 161655],
            ['ug-3383', 66572],
            ['ug-3390', 77410],
            ['ug-3386', 77521],
            ['ug-3391', 49807],
            ['ug-3392', 75032],
            ['ug-3394', 72126],
            ['ug-2750', 47285],
            ['ug-7048', 45578],
            ['ug-7080', 24662],
            ['ug-7081', 37590],
            ['ug-1684', 33261],
            ['ug-7082', 34078],
            ['ug-1688', 53788],
            ['ug-7079', 38555],
            ['ug-7068', 16377],
            ['ug-7070', 24568],
            ['ug-7049', 18742],
            ['ug-2787', 34666],
            ['ug-7055', 25464],
            ['ug-2769', 62292],
            ['ug-7052', 38083],
            ['ug-2774', 35804],
            ['ug-7059', 19670],
            ['ug-7060', 69129],
            ['ug-7057', 32490],
            ['ug-2790', 21342],
            ['ug-2776', 27888],
            ['ug-7067', 13649],
            ['ug-7065', 36411],
            ['ug-7066', 23967],
            ['ug-7069', 9379],
            ['ug-7061', 39686],
            ['ug-7063', 65220],
            ['ug-7062', 54935],
            ['ug-7064', 41423],
            ['ug-7086', 29224],
            ['ug-2744', 23005],
            ['ug-1679', 35881],
            ['ug-1680', 35660],
            ['ug-7054', 42832],
            ['ug-1686', 34590],
            ['ug-7078', 47916],
            ['ug-1677', 38234],
            ['ug-1690', 22333],
            ['ug-2745', 35125],
            ['ug-2752', 50686],
            ['ug-2754', 128658],
            ['ug-1687', 48062],
            ['ug-2757', 122505],
            ['ug-1689', 45234],
            ['ug-2760', 38163],
            ['ug-2761', 38009],
            ['ug-2766', 36774],
            ['ug-2765', 36908],
            ['ug-2764', 9997],
            ['ug-2749', 13910],
            ['ug-2768', 55604],
            ['ug-2763', 31908],
            ['ug-2748', 19316],
            ['ug-2771', 38431],
            ['ug-2772', 50058],
            ['ug-2775', 30590],
            ['ug-2788', 26100],
            ['ug-2789', 18254],
            ['ug-3381', 47288],
            ['ug-3387', 188609],
            ['ug-3393', 98694],
            ['ug-7076', 27520],
            ['ug-1681', 57470],
            ['ug-2746', 39566],
            ['ug-2747', 34410],
            ['ug-2751', 18227],
            ['ug-2758', 41166],
            ['ug-2759', 71834],
            ['ug-2756', 35823],
            ['ug-2770', 52408],
            ['ug-7072', 39859],
            ['ug-7053', 46900],
            ['ug-2753', 33674],
            ['ug-2755', 24254],
            ['ug-2773', 110869]
        ];

        // Create the chart
        Highcharts.mapChart('map-area', {
            chart: {
                map: 'countries/ug/ug-all'
            },

            title: {
                text: 'NRM Presidential Elections 2021'
            },

            subtitle: {
                text: 'Districts as of 2016'
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 8000
            },

            series: [{
                data: data,
                name: 'Votes to NRM',
                states: {
                hover: {
                    color: 'yellow'
                }
                },
                dataLabels: {
                enabled: true,
                format: '{point.name}'
                }
            }]
        });

    </script>

<?php /* 

    <script>

        // List of words
        var myWords = [
            {word: "AMURIAT OBOI PATRICK", size: "3.26"}, 
            {word: "KABULETA KIIZA JOSEPH", size: "0.44"}, 
            {word: "KALEMBE NANCY LINDA", size: "0.37"}, 
            {word: "KATUMBA JOHN", size: "0.36"}, 
            {word: "KYAGULANYI SSENTAMU ROBERT", size: "35.08"},
            {word: "MAO NORBERT", size: "0.56"},
            {word: "MAYAMBALA WILLY", size: "0.15"}, 
            {word: "MUGISHA MUNTU GREGG", size: "0.65"}, 
            {word: "MWESIGYE FRED", size: "0.25"}, 
            {word: "TUMUKUNDE HENRY KAKURUGU", size: "0.50"}, 
            {word: "YOWERI MUSEVENI TIBUHABURWA KAGUTA", size: "58.38"}
         ]

        // set the dimensions and margins of the graph
        var margin = {top: 10, right: 10, bottom: 10, left: 10},
            width = 450 - margin.left - margin.right,
            height = 450 - margin.top - margin.bottom;

        // append the svg object to the body of the page
        var svg = d3.select("#my_dataviz").append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
        .append("g")
            .attr("transform",
                "translate(" + margin.left + "," + margin.top + ")");

        // Constructs a new cloud layout instance. It run an algorithm to find the position of words that suits your requirements
        // Wordcloud features that are different from one word to the other must be here
        var layout = d3.layout.cloud()
        .size([width, height])
        .words(myWords.map(function(d) { return {text: d.word, size:d.size}; }))
        .padding(5)        //space between words
        .rotate(function() { return ~~(Math.random() * 2) * 90; })
        .fontSize(function(d) { return d.size; })      // font size of words
        .on("end", draw);
        layout.start();

        // This function takes the output of 'layout' above and draw the words
        // Wordcloud features that are THE SAME from one word to the other can be here
        function draw(words) {
        svg
            .append("g")
            .attr("transform", "translate(" + layout.size()[0] / 2 + "," + layout.size()[1] / 2 + ")")
            .selectAll("text")
                .data(words)
            .enter().append("text")
                .style("font-size", function(d) { return d.size; })
                .style("fill", "#69b3a2")
                .attr("text-anchor", "middle")
                .style("font-family", "Impact")
                .attr("transform", function(d) {
                return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
                })
                .text(function(d) { return d.text; });
        }
    </script>

    script>
        
        var svg = d3.select("svg"),
            width = svg.attr("width"),
            height = svg.attr("height"),
            radius = 200;
        
        var data = [
            {name: "AMURIAT OBOI PATRICK", share: "3.26"}, 
            {name: "KABULETA KIIZA JOSEPH", share: "0.44"}, 
            {name: "KALEMBE NANCY LINDA", share: "0.37"}, 
            {name: "KATUMBA JOHN", share: "0.36"}, 
            {name: "KYAGULANYI SSENTAMU ROBERT", share: "35.08"},
            {name: "MAO NORBERT", share: "0.56"},
            {name: "MAYAMBALA WILLY", share: "0.15"}, 
            {name: "MUGISHA MUNTU GREGG", share: "0.65"}, 
            {name: "MWESIGYE FRED", share: "0.25"}, 
            {name: "TUMUKUNDE HENRY KAKURUGU", share: "0.50"}, 
            {name: "YOWERI MUSEVENI TIBUHABURWA KAGUTA", share: "58.38"}
        ];
        
        var g = svg.append("g")
                   .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

        var ordScale = d3.scaleOrdinal()
                        	.domain(data)
                        	.range(['#ffd384','#94ebcd','#fbaccc','#d3e0ea','#fa7f72']);

        var pie = d3.pie().value(function(d) { 
                return d.share; 
            });

        var arc = g.selectAll("arc")
                   .data(pie(data))
                   .enter();

        var path = d3.arc()
                     .outerRadius(radius)
                     .innerRadius(0);

        arc.append("path")
           .attr("d", path)
           .attr("fill", function(d) { return ordScale(d.data.name); });

        var label = d3.arc()
                      .outerRadius(radius)
                      .innerRadius(0);
            
        arc.append("text")
           .attr("transform", function(d) { 
                    return "translate(" + label.centroid(d) + ")"; 
            })
           .text(function(d) { return d.data.name; })
           .style("font-family", "arial")
           .style("font-size", 8);
            
    </script> */ ?>
</main>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>-->
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.2.1/mustache.min.js"></script>
    <script src="js/map.js"></script>
</body>

</html>


