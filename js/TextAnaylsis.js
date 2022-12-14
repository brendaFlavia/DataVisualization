// set the dimensions and margins of the graph
var margin = {top: 10, right: 30, bottom: 30, left: 40},
    width = 460 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;

// append the svg object to the body of the page
var svg = d3.select("#histogram")
  .append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform",
          "translate(" + margin.left + "," + margin.top + ")");

// get the data
d3.csv("map_data/txt_analysis_word_length.csv", function(data) {

  // X axis: scale and draw:
  var x = d3.scaleLinear()
      .domain([0, d3.max(data, function(d) { return +d.word_length })])     // can use this instead of 1000 to have the max of data: d3.max(data, function(d) { return +d.price })
      .range([0, width]);
  svg.append("g")
      .attr("transform", "translate(0," + height + ")")
      .attr('class', 'axis')
      .call(d3.axisBottom(x));

  // set the parameters for the histogram
  var histogram = d3.histogram()
      .value(function(d) { return d.word_length; })   // I need to give the vector of value
      .domain(x.domain())  // then the domain of the graphic
      .thresholds(x.ticks(70)); // then the numbers of bins

  // And apply this function to data to get the bins
  var bins = histogram(data);

  // Y axis: scale and draw:
  var y = d3.scaleLinear()
      .range([height, 0]);
      y.domain([0, d3.max(bins, function(d) { return d.length; })]);   // d3.hist has to be called before the Y axis obviously
  svg.append("g")
      .attr('class', 'axis')
      .call(d3.axisLeft(y));


   //Draw grid
   svg.append('g')
   .attr('class', 'grid-hline')
   .call(d3.axisLeft().scale(y).tickSize(-width, 0, 0).tickFormat(''))
//End Draw grid

//Top Title
//svg.append('text')
   //.attr('x', (width / 2) + margin.left + margin.right)
   //.attr('y', margin.top / 2)
   //.attr('class', 'title')
  // .attr('text-anchor', 'middle')
   //.text('Average word length per comment')
//End Top Title

//x Axis Title
svg.append('text')
   .attr('x', (width / 2) + margin.left + margin.right)
   .attr('y', (margin.top * 2.5))
   .attr('transform', `translate(0,${height - (margin.top / 4)})`)
   //.attr('class', 'title')
   .attr("text-anchor", "end")
   .attr("stroke", "black")
   .attr("font-size", "18px")
   .style("font-family", "Century Gothic bold")
   .text('Average word length')
//End x axis title

//y Axis Title
svg.append('text')
   //.attr('class', 'title')
   .attr('x', -(height / 2) - margin.top)
   .attr('y', (margin.right))
   .attr('transform', 'rotate(-90)')
   .attr("text-anchor", "end")
   .attr("stroke", "black")
   .attr("font-size", "18px")
   .style("font-family", "Century Gothic bold")
   .text('Number of Words')
//End y Axis Title


  // append the bar rectangles to the svg element
  svg.selectAll("rect")
      .data(bins)
      .enter()
      .append("rect")
        .attr("x", 1)
        .attr("transform", function(d) { return "translate(" + x(d.x0) + "," + y(d.length) + ")"; })
        .attr("width", function(d) { return x(d.x1) - x(d.x0) -1 ; })
        .attr("height", function(d) { return height - y(d.length); })
        .style("fill", "#69b3a2")

});
