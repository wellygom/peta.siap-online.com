<?php include("header.php"); ?>
<?php include("googlemaps.php"); ?>
<script type="text/javascript">

var geocoder = new GClientGeocoder();
var pointTujuan;
var pointSekolah;
var pointBerangkat;
var map;
var markerTujuan; 
var markerSekolah; 
var markerBerangkat; 
var directionsPanel;
var directions;
var alamatBerangkat;
var alamatTujuan;
var placeBerangkat;
var placeTujuan;
var mulaicarijalur;
var nama;
var lintang;
var bujur;
var alamat;
var kota;
var propinsi;
var k_status;
var k_jenjang;
var pin;
var url_situs;
var logo;
var pointFrom;
var markerFrom;
$.getJSON("/portal/detailSekolahGetJson/"+<?=$sekolah_id?>,  		
	function(data){
		nama = data.nama;
		lintang = data.lintang;
		bujur = data.bujur;
		alamat = data.alamat;
		kota = data.kota;
		propinsi = data.propinsi;
		k_jenjang = data.k_jenjang;
		k_status = data.k_status;
		url_situs = data.url_situs;
		logo = data.logo;
		no_telp = data.no_telp;
		email = data.email;
		if(url_situs=="-"){
			url_situs="";
		}
		if(logo=="sknimg/data/skin/logo_nan.png"){
			logo="/sknimg/img/no_logo.png";
		}
		
		if(k_jenjang==1) {
			pin = 'pinSD.png';
			if ((k_status==8)||(k_status==9)){
				pin = 'pinMI.png';
			}
		}else if (k_jenjang==2){
			pin='pinSMP.png';
			if ((k_status==8)||(k_status==9)){
				pin='pinMTS.png';
			}
		}else if (k_jenjang==3){
			pin='pinSMA.png';
			if ((k_status==8)||(k_status==9)){
				pin='pinMA.png';
			}else if((k_status==6)||(k_status==7)){
				pin='pinSMK.png';
			}
		}else{
			pin='pinUNV.png';
		}

		$("#sekolah-nama").append(nama);
		$("#sekolah-alamat").append(alamat);
		$("#sekolah-email").append(email);
		$("#sekolah-url_situs").append("<a href='"+url_situs+"' style='text-transform:lowercase;'>"+url_situs+"</a>");
		$("#sekolah-logo").append("<img src='"+logo+"'/>");
		$("#sekolah-no_telp").append(no_telp);
		$("#judul-nama").html("<h3>"+nama+"</h3>");
					
});
function initialize(){	
	if (GBrowserIsCompatible()) {
		map = new GMap2(document.getElementById("map_canvas"));
		alamatBerangkat=null;
		if (lintang=="" || lintang=="0"){
			$("#status-sekolah").html("<p style='font-size:14px;' >Lokasi sekolah ini BELUM VALID. Karena pencarian lokasi berdasarkan alamat sekolah, pastikan masukan Koordinat Sekolah yang tepat melalui aplikasi SIAP Sekolah Anda.</p>");
			$('#daftar').show();
			$('#direction').html("Fasilitas petunjuk arah ke lokasi sekolah Anda belum dapat diaktifkan. Silakan AKTIFKAN aplikasi SIAP Sekolah Anda <a href='http://siap-online.com/pendaftaran/ajuan.php' target='_blank'>disini</a> (GRATIS)");
			showSekolah(""+alamat+" "+kota+" "+" "+propinsi+" Indonesia");
		}else{ 
			map.setCenter(new GLatLng(lintang,bujur), 9);
			pointSekolah =new GLatLng(lintang,bujur);
			map.addOverlay(createMarker(pointSekolah,nama,alamat,k_jenjang));
			map.addControl(new GSmallMapControl());
	    	map.addControl(new GMapTypeControl());

			pointFrom =new GLatLng((lintang*1)+0.05, (bujur*1)+0.005);
			markerFrom = new GMarker(pointFrom, {draggable: true}); 
			map.addOverlay(markerFrom);
	        GEvent.addListener(markerFrom, "dragstart", function() {
	          map.closeInfoWindow();
	        });
	        GEvent.addListener(markerFrom, "dragend", step1);
	        
			//if(mulaicarijalur){
				//GEvent.addListener(map, "click", showBerangkat);
			//} 
		}	
	}
}

function createMarker(point,nama,alamat,jenjang){
	var homeIcon = new GIcon(G_DEFAULT_ICON);
	homeIcon.image = "<?=base_url();?>sknimg/img/"+pin;
	markerOptions = { icon:homeIcon };
  	marker=new GMarker(point,markerOptions);
  	if (lintang=="" || lintang=="0"){
  		GEvent.addListener(marker,'click',function(){
      		marker.openInfoWindowHtml('<b style="font-family: Geneva, Arial, Helvetica, sans-serif;letter-spacing:5px; font-size:11px">' + nama + '</b>'+''+'<p style="font-family: Geneva, Arial, Helvetica, sans-serif; font-size:11px">' + '<a href="http://siap-online.com/pendaftaran/ajuan.php" target="_blank"  class="input-button" style="text-decoration:none">Lengkapi data Lokasi anda di SIAP Sekolah</a>'+'</p>');
      	});
  	}else{
      	GEvent.addListener(marker,'click',function(){
      		marker.openInfoWindowHtml('<b style="font-family: Geneva, Arial, Helvetica, sans-serif;letter-spacing:5px; font-size:11px">' + nama + '</b>'+''+'<p style="font-family: Geneva, Arial, Helvetica, sans-serif; font-size:11px">' + alamat +'</p>');
      	});
  	}
  	return marker;
}

function showSekolah(alamat) {
	geocoder.getLatLng(alamat,
		function(point) { 
			pointSekolah=point;
			map.addOverlay(createMarker(pointSekolah,nama,alamat,k_jenjang));
        	map.setCenter(point, 9);
        	map.addControl(new GSmallMapControl());
	    	map.addControl(new GMapTypeControl());
      	}
    );
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
 	$('#reset').show();
 	map.closeInfoWindow();
  	GEvent.addListener(directions, "error", handleErrors); 
}

function step1(position){
	geocoder.getLocations(pointSekolah, cariTujuan);
	geocoder.getLocations(position, cariBerangkat);	
 	markerFrom.openInfoWindowHtml('<font face="verdana" size="2" ><a href="javascript:;" onClick="cari()";>Cari Jalur ke Sekolah dari Lokasi ini</a></font>');
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
	$('#reset').hide();
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
    					<div align="center"> <a class="zoom1" href="/sknimg/html/lightbox.html" ><img src="/sknimg/img/belumdaftar.png" border='0'/></a></div>
	            	</p>
				</div>
		</div>
			
			<div id="content">
				<div class="peta">
					<div id="map_canvas" style="width: 675px; height: 300px"></div>
                </div>
                
				<div class="content-isi">
                    <div id='judul-nama'></div>
                    <div id='status-sekolah'>
                    </div>
                    <div class="container">
          <div class="content_table2">
          	   <div>
              <!-- news border -->
              <div class="news-bdr">
                <div class="r">
                  <div class="m">
                    <div class="news-home">
                      <!-- news header -->
                      <div class="head">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td class="title">Data Sekolah</td>
                            <td class="desc"></td>
                          </tr>

                        </table>
                      </div>
                      <div class="cont">
		<table class="tbCap2" border="0" cellpadding="0" cellspacing="0">
              <tbody>
                                 
                <tr class="trOdd">
                  <td width="40">Nama Sekolah</td>
                  <td width="84" class="colEvn" style="width:60px" id='sekolah-nama'></td>
                <tr class="trEvn">
                  <td width="40">Alamat</td>
                  <td width="84" class="colEvn" style="width:60px" id='sekolah-alamat'></td>
                <tr class="trOdd">
                 <td width="40">Email</td>
                  <td width="84" class="colEvn" style="width:60px" id='sekolah-email'> </td>
                <tr class="trEvn">
                  <td width="40">Situs</td>
                  <td width="84" class="colEvn" style="width:60px" id='sekolah-url_situs'></td>
                <tr class="trOdd">
                   <td width="40">Logo</td>
                  <td width="84" class="colEvn" style="width:60px" id='sekolah-logo'></td>
                <tr class="trEvn">
                  <td width="40">Telp</td>
                  <td width="84" class="colEvn" style="width:60px" id='sekolah-no_telp'></td>
                          </tbody>
            </table>
			  
                <div id='daftar' class="button-wrap" style="display:none;" >
				<div class="sider"> 
				<a href="http://siap-online.com/pendaftaran/ajuan.php" target="_blank"  class="input-button" style="text-decoration:none">AKTIFKAN SIAP SEKOLAH ANDA (GRATIS)</a>
				</div>
				</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content_info">
            <div>
              <!-- news border -->
              <div class="news-bdr">
                <div class="r">
                  <div class="m">
                    <div class="news-home">
                      <!-- news header -->
                      <div class="head">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td class="title">Jalur </td>
                            <td class="desc"><br />
                              </td>
                          </tr>
                        </table>
                      </div>
                      <div class="cont">
                        			<!-- news content -->
                        			<h3 class="judul">Petunjuk Arah</h3>
                        			<div class="desc1"><p id ="direction"></p></div>
                           			<div id='reset' style="display:none; float:right; margin-right:10px"class="button-wrap">
               							<div class="sider"> 
               								<a href="javascript:;" onClick="reset()"  class="input-button" style="text-decoration:none">Reset</a>
               							</div>
                         			</div>
                      </div>
					 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                    	
                </div> <!-- end of class="content-isi" -->
          	</div>
				<div style="clear: both"></div>
			</div><!-- end Main -->
		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>
