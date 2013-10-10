<?php include("header-siapku.php"); ?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=<?=$GmapKey?>" type="text/javascript"></script>
<script type="text/javascript" >
var pointHome;
var markerTujuan;
var placeTujuan;
var pointTujuan;
var placeBerangkat;
var pointBerangkat;
var alamatBerangkat;
var alamatTujuan;
var geocoder = new GClientGeocoder();
function initialize() {
	if (GBrowserIsCompatible()) {
  		map = new GMap2(document.getElementById("map_canvas"));
  		map.setCenter(new GLatLng(<?=$lat?>, <?=$lng?>), 9);
  		map.addControl(new GSmallMapControl());
    	map.addControl(new GMapTypeControl());
    	pointHome =new GLatLng(<?=$lat?>, <?=$lng?>);
		map.addOverlay(createMarker(pointHome,"<?=$siapkuname?>"));

		pointTujuan =new GLatLng(<?=$lat+0.05?>, <?=$lng+0.05?>);
		markerTujuan = new GMarker(pointTujuan, {draggable: true}); 
		map.addOverlay(markerTujuan);
        GEvent.addListener(markerTujuan, "dragstart", function() {
          map.closeInfoWindow();
        });
        GEvent.addListener(markerTujuan, "dragend", step1);
    }
}

function createMarker(point,nama){
	var homeIcon = new GIcon(G_DEFAULT_ICON);
	homeIcon.image = "<?=base_url();?>sknimg/img/pinUNV.png";
	markerOptions = { icon:homeIcon };
  	marker=new GMarker(point,markerOptions);
  	GEvent.addListener(marker,'click',function(){
  		marker.openInfoWindowHtml('<font face="verdana" size="2" >' + nama +'</font>');
  	});
  	return marker;
}

function cariTujuan(response){
	placeTujuan = response.Placemark[0];
	pointTujuan = new GLatLng(placeTujuan.Point.coordinates[1],placeTujuan.Point.coordinates[0]);
	alamatTujuan = placeTujuan.address;
}

function cari(){
	directionsPanel = document.getElementById("direction");
	directions = new GDirections(map, directionsPanel);	
	$('#direction').html('');
 	directions.load("from: " + alamatBerangkat + " to: " + alamatTujuan,{ "locale": 'id' });
 	$('.button-wrap').show();
 	map.closeInfoWindow();
  	GEvent.addListener(directions, "error", handleErrors); 
}

function step1(position){
	geocoder.getLocations(pointHome, cariBerangkat);
	geocoder.getLocations(position, cariTujuan);	
 	markerTujuan.openInfoWindowHtml('<font face="verdana" size="2" ><a href="javascript:;" onClick="cari()";>Lakukan pencarian jalur menuju lokasi ini</a></font>');
}

function cariBerangkat(response){
	placeBerangkat = response.Placemark[0];
    pointBerangkat = new GLatLng(placeBerangkat.Point.coordinates[1],placeBerangkat.Point.coordinates[0]);
	alamatBerangkat = placeBerangkat.address;
}

function handleErrors(){
	$('#direction').html('Maaf Jalur untuk lokasi yang anda tunjukkan tidak ditemukan');
}
function reset(){
	map.clearOverlays();
	initialize();
	document.getElementById("direction").innerHTML="";
	$('.button-wrap').hide();
}
</script>
<style type="text/css">
html {
overflow-x: hidden;
}

body{
  background-color: #ffffff;
  margin : 0 auto;
  padding : 0 auto;
  font-family: Arial, Helvetica, sans-serif;
  scrollbar-face-color:#FFFFFF; /*/ obviously change this to whatever you want /*/
  scrollbar-arrow-color: #FFFFFF;
  scrollbar-highlight-color:#FFFFFF;
  scrollbar-3dlight-color:#FFFFFF;
  scrollbar-shadow-color: #FFFFFF;
  scrollbar-darkshadow-color: #FFFFFF;
  scrollbar-track-color: #FFFFFF;
}

</style>

<script>
function selectCode(f){
document.forms[f].elements[0].focus();
document.forms[f].elements[0].select();
}
function changeScrollbarColor(C){
  if (document.all){
    document.body.style.scrollbarBaseColor = C
  }   
}
</script>

</head>
<!-- ========================================= Banner =============================================== -->
<body style="padding:0; margin:0;" bgcolor="fff" onload="initialize();" onUnload="GUnload()">

	<div id="wrapper-siapku">
		
		<div id="main">
<!-- =========================================== CONTENT =============================================== -->
			
			<div id="content">
				<div class="peta-siapku">
					<div id="map_canvas" style="width: 600px; height: 300px"></div>
                </div>
                
				<div class="content-isi">
                    <div class="container">                      
                        <div class="content_info-siapku">
                        
                        <div>                                   
                          <!-- news border -->
                          <div class="news-bdr">
                            <div class="r">
                              <div class="m">
                                <div class="news-home">
                                  <!-- news header -->
                                  <div class="head">
                                    <table cellspacing="0" cellpadding="0" border="0">
                                      <tbody><tr>
                                        <td class="title_hdr">Jalur</td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                      			  <div class="cont">
                        			<!-- news content -->
                        			<h3 class="judul">Petunjuk Arah</h3>
                        			<div class="desc1" style="overflow-y:auto; "><div style="overflow:scroll;overflow-x:hidden;overflow-y:auto;"><p id ="direction"></p></div></div>
                           			<div style="display:none; float:right; margin-right:10px"class="button-wrap">
               							<div class="sider"> 
               								<a href="javascript:;" onClick="reset()"  class="input-button" style="text-decoration:none">Reset</a>
               							</div>
                         			</div>
                      			</div>	   
								</div>
                               </div></div></div>

                          </div>
                        </div>
						<div style="clear: both"></div>
                    </div><!-- end of class="container" -->
                </div> <!-- end of class="content-isi" -->
          	</div>
				<div style="clear: both"></div>
			
<!-- =========================================== FOOTER =============================================== -->
			</div><!-- end Main -->
	</div><!-- end Wrapper -->
</body>
</html>