<?php include("header.php"); ?>
<?php include("googlemaps.php"); ?>
<!--script validation-->
<script src="<?=base_url();?>sknimg/js/validate.js" type="text/javascript"></script>
<!--data kab&kota-->
<!--script data sekolah-->
<script type="text/javascript" src="<?=base_url();?>sknimg/js/form.js"></script>
<!--end-->
<script type="text/javascript">
function initialize() {
	if (GBrowserIsCompatible()) {
  		map = new GMap2(document.getElementById("map_canvas"));
  		map.setCenter(new GLatLng(-1.110282, 115.041503), 4);
  		map.addControl(new GSmallMapControl());
    	map.addControl(new GMapTypeControl());
  		for (propinsi in states) {
  			var polygon = createPoly(propinsi);
  			map.addOverlay(polygon);
  		}
  		<?php
  			if (isset($propinsi)){
    			echo "UbahBox('".$propinsi."')";
  			}
  		?>
	}
}

function createPoly(propinsi) {
	var polygon = new GPolygon(states[propinsi], "#f33f00", 0, 0, "#ff0000", 0.01);
  	GEvent.addListener(polygon, "click", function(latlng) {
  		UbahBox(propinsi);
  	});
  	return polygon;
}

function UbahBox(propinsi){
	window.location="#form";
	var BoxPropinsi = document.getElementById('selOne');
	for(index = 0; index < BoxPropinsi.length;index++){
		if(BoxPropinsi[index].value == getValue(propinsi))
        BoxPropinsi.selectedIndex = index;
    }
    fillSelBox(BoxPropinsi, 'selTwo');
}
</script>
</head>
<body style="padding:0; margin:0;"  onload="initialize();" onUnload="GUnload()">
<div id="border">
	<div id="wrapper">
		<div id="header">
			<?php include("header_body.php")?>
		</div>
		<div id="main">
			<div id="navigation">
   				<!-- List Menu -->
   				<?php include("menu.php"); ?>

   				<div id="banner">
    				<p>
    					<div align="center"> <a class="zoom1" href="/siap-peta/sknimg/html/lightbox.html" ><img src="/siap-peta/sknimg/img/belumdaftar.png"  border='0'/></a></div>
	            	</p>
				</div>
			</div>
			<div id="content">
				<div class="peta">
					<div id="map_canvas" style="width: 675px; height: 300px"></div>
                </div>
                
				<div class="content-isi">
          			<h2>Peta Wilayah Pendidikan Nasional</h2>
					<div class="container">
                        <div class="content_table_form">
                             <div style="width: 370px;">
								<!-- common bordered box -->
				              	<div class="box-bordered form">
				                	<div class="sdw-l"></div>
				                	<div class="sdw-r"></div>
				                	<div class="sdw-m">
				                  		<div class="head">
				                    		<table border="0" cellpadding="0" cellspacing="0" width="100%">
				                      			<tr>
				                        			<td class="title">Detil Sekolah</td>
				                        			<td class="desc">Data sebaran sekolah terdaftar<br />berdasarkan jenjang dan status</td>
				                      			</tr>
				                    		</table>
				                  		</div>
				                  		<div>
                    						<!-- news content -->
                    						<table class="tbCap2" border="0" style="color:#797979; width:355px" cellspacing="0" cellpadding="0">
                      							<tbody>
                        							<!--form data sekolah-->
                        							<a name="form">
                        								<?php include("form_data_sekolah.php");?>
                        							</a>
                        							<!--end-->
                      							</tbody>
                    						</table>
                  						</div>
                					</div>
              					</div>
            				</div>
          				</div><!-- end content table-->
          			</div>
          		</div><!--  end Content isi-->
          	</div>
				<div style="clear: both"></div>
		</div><!-- end Main -->
		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>
