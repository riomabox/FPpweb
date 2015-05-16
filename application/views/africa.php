<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/datamaps.world.min.js"></script>
	<div id="container" style="position: relative; width: 500px; height: 600px;"></div>
	<script>
	    var map = new Datamap({
	    	element: document.getElementById('container'),
	    	scope: 'world',
	    	setProjection: function(element) {
			var projection = d3.geo.equirectangular()
				.center([23, -3])
				.rotate([4.4, 0])
				.scale(400)
				.translate([element.offsetWidth / 2, element.offsetHeight / 2]);
			var path = d3.geo.path()
				.projection(projection);
				return {path: path, projection: projection};
			},
			fills: {
				'Algeria' : "red",
				defaultFill: "lightgrey"
			},
			data: {
				'DZA':{
					fillKey:'Algeria',
					percentage:12
				}
			},
			geographyConfig: {
				popupTemplate: function (geo,data){
					return ['<div class="hoverinfo"><strong>',
							'Number of things in ' + geo.properties.name,
							': ' + data.percentage,
							'</strong></div>'].join('');
				}
			}
	    });
	</script>
</body>
</html>