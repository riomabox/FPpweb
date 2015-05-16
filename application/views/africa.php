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
				'Nigeria' : "blue",
				defaultFill: "lightgrey"
			},
			data: {
				'DZA':{
					fillKey:'Algeria',
					percentage:12
				},
				'NGA':{
					fillKey:'Nigeria',
					percentage:12
				},
				'ETH':{
					fillKey:'Ethiopia',
					percentage:12
				},
				'EGY':{
					fillKey:'Egypt',
					percentage:12
				},
				'COG':{
					fillKey:'Democratic Republic of the Congo',
					percentage:12
				},
				'ZAF':{
					fillKey:'South Africa',
					percentage:12
				},
				'TZA':{
					fillKey:'Tanzania',
					percentage:12
				},
				'KEN':{
					fillKey:'Kenya',
					percentage:12
				},
				'UGA':{
					fillKey:'Uganda',
					percentage:12
				},
				'SDN':{
					fillKey:'Sudan',
					percentage:12
				},
				'MAR':{
					fillKey:'Morocco',
					percentage:12
				},
				'GHA':{
					fillKey:'Ghana',
					percentage:12
				},
				'MOZ':{
					fillKey:'Mozambuique',
					percentage:12
				},
				'AGO':{
					fillKey:'Angola',
					percentage:12
				},
				'CIV':{
					fillKey:'Ivory Coast',
					percentage:12
				},
				'MDG':{
					fillKey:'Madagascar',
					percentage:12
				},
				'CMR':{
					fillKey:'Cameroon',
					percentage:12
				},
				'NER':{
					fillKey:'Niger',
					percentage:12
				},
				'BFA':{
					fillKey:'Burkina Faso',
					percentage:12
				},
				'MLI':{
					fillKey:'Mali',
					percentage:12
				},
				'MWI':{
					fillKey:'Malawi',
					percentage:12
				},
				'ZMB':{
					fillKey:'Zambia',
					percentage:12
				},
				'SEN':{
					fillKey:'Senegal',
					percentage:12
				},
				'TCD':{
					fillKey:'Chad',
					percentage:12
				},
				'ZWE':{
					fillKey:'Zimbabwe',
					percentage:12
				},
				'RWA':{
					fillKey:'Rwanda',
					percentage:12
				},
				'TUN':{
					fillKey:'Tunisia',
					percentage:12
				},
				'SOM':{
					fillKey:'Somalia',
					percentage:12
				},
				'GIN':{
					fillKey:'Guinea',
					percentage:12
				},
				'BEN':{
					fillKey:'Benin',
					percentage:12
				},
				'BDI':{
					fillKey:'Burundi',
					percentage:12
				},
				'TGO':{
					fillKey:'TGO',
					percentage:12
				},
				'ERI':{
					fillKey:'Eritra',
					percentage:12
				},
				'LBY':{
					fillKey:'Libya',
					percentage:12
				},
				'SLE':{
					fillKey:'Sierra Leone',
					percentage:12
				},
				'CAF':{
					fillKey:'Central African Republic',
					percentage:12
				},
				'COD':{
					fillKey:'Democratic Republic of the Congo',
					percentage:12
				},
				'LBR':{
					fillKey:'Liberia',
					percentage:12
				},
				'MRT':{
					fillKey:'Mauritania',
					percentage:12
				},
				'GAB':{
					fillKey:'Gabon',
					percentage:12
				},
				'NAM':{
					fillKey:'Namibia',
					percentage:12
				},
				'BWA':{
					fillKey:'Botswana',
					percentage:12
				},
				'GMB':{
					fillKey:'Gambia',
					percentage:12
				},
				'GNQ':{
					fillKey:'Equatorial Guinea',
					percentage:12
				},
				'LSO':{
					fillKey:'Lesotho',
					percentage:12
				},
				'GNB':{
					fillKey:'Guinea-Bissau',
					percentage:12
				},
				'MUS':{
					fillKey:'Mauritus',
					percentage:12
				},
				'SWZ':{
					fillKey:'Swaziland',
					percentage:12
				},
				'DJI':{
					fillKey:'Djibouti',
					percentage:12
				},
				'REU':{
					fillKey:'Reunion',
					percentage:12
				},
				'COM':{
					fillKey:'Comoros',
					percentage:12
				},
				'CPV':{
					fillKey:'Cape Verde',
					percentage:12
				},
				'ESH':{
					fillKey:'Western Sahara',
					percentage:12
				},
				'MYT':{
					fillKey:'Mayotte',
					percentage:12
				},
				'STP':{
					fillKey:'Sao Tope and Principe',
					percentage:12
				},
				'SYC':{
					fillKey:'Seychelles',
					percentage:12
				},
				'SHN':{
					fillKey:'Saint Helena',
					percentage:12
				},
				'SSD':{
					fillKey:'South Sudan',
					percentage:12
				}

			}
			,
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