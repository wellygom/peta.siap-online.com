<?php include("header.php"); ?>
<?php include("googlemaps.php"); ?>
<script type="text/javascript" >

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

      }
    }

    function createPoly(propinsi) {
  var polygon = new GPolygon(states[propinsi], "#f33f00", 0, 0, "#ff0000", 0.01);
  GEvent.addListener(polygon, "click", function(latlng) {
  map.openInfoWindowHtml(latlng,"<a href ='<?=base_url();?>portal/data/"+propinsi+"'> <font face='verdana' size='2' > <br> Cari Lokasi Sekolah di Wilayah " + propinsi+ " </font> </a>" );
  });
  return polygon;
    }
	
    </script>

<script>
$.getJSON("/portal/beritaGetJson/",   		
	function(data){
		$.each(data.data_idx, function(i,item){
			if(i!='edit_date'){
				$("#no-berita").remove();
				$.each(item, function(j,itemnew){
					if(j!='total'){
						$("#berita-cont").append("<h3 class='judul'><a style='color:#004589;' href='/portal/detilberita/"+itemnew.id+"'>"+itemnew.post_title+"</a></h3>");
						$("#berita-cont").append("<div class='date'>"+itemnew.post_date+"</div>");
						$("#berita-cont").append("<div class='text_content'><p>"+itemnew.post_prolog+"</p></div>");
						$("#berita-cont").append("<div class='dotted'></div>");
					}
				});
			}			
		});	
	});

$.getJSON("/portal/jumlahSekolahGetJson/",   		
		function(data){
			$("#jumlahsekolah").append("<tr class='trCap'><td >Jenjang</td><td class='colEvn'>Negeri</td><td >Swasta</td><td class='colEvn'>Jumlah</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trOdd'><td >SD</td><td class='colEvn'>"+data['sd']['negeri']+"</td><td >"+data['sd']['swasta']+"</td><td class='colEvn'>"+(data['sd']['negeri']+data['sd']['swasta'])+"</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trEvn'><td >SMP</td><td class='colEvn'>"+data['smp']['negeri']+"</td><td >"+data['smp']['swasta']+"</td><td class='colEvn'>"+(data['smp']['negeri']+data['smp']['swasta'])+"</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trOdd'><td >MI</td><td class='colEvn'>"+data['mi']['negeri']+"</td><td >"+data['mi']['swasta']+"</td><td class='colEvn'>"+(data['mi']['negeri']+data['mi']['swasta'])+"</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trEvn'><td >MTS</td><td class='colEvn'>"+data['mts']['negeri']+"</td><td >"+data['mts']['swasta']+"</td><td class='colEvn'>"+(data['mts']['negeri']+data['mts']['swasta'])+"</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trOdd'><td >SMA</td><td class='colEvn'>"+data['sma']['negeri']+"</td><td >"+data['sma']['swasta']+"</td><td class='colEvn'>"+(data['sma']['negeri']+data['sma']['swasta'])+"</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trEvn'><td >MA</td><td class='colEvn'>"+data['ma']['negeri']+"</td><td >"+data['ma']['swasta']+"</td><td class='colEvn'>"+(data['ma']['negeri']+data['ma']['swasta'])+"</td></tr><tr class='trOdd'>");
			$("#jumlahsekolah").append("<tr class='trOdd'><td >SMK</td><td class='colEvn'>"+data['smk']['negeri']+"</td><td >"+data['smk']['swasta']+"</td><td class='colEvn'>"+(data['smk']['negeri']+data['smk']['swasta'])+"</td></tr><tr class='trOdd'>");

			$("#jumlahsekolah").append("<tr class='trCap'><td class='colEv'>TOTAL</td><td class='colEv'>"+(data['sd']['negeri']+data['smp']['negeri']+data['mi']['negeri']+data['mts']['negeri']+data['sma']['negeri']+data['ma']['negeri']+data['smk']['negeri'])+"</td><td class='colEv'>"+(data['sd']['swasta']+data['smp']['swasta']+data['mi']['swasta']+data['mts']['swasta']+data['sma']['swasta']+data['ma']['swasta']+data['smk']['swasta'])+"</td><td class='colEv'>"+(data['sd']['negeri']+data['smp']['negeri']+data['mi']['negeri']+data['mts']['negeri']+data['sma']['negeri']+data['ma']['negeri']+data['smk']['negeri']+data['sd']['swasta']+data['smp']['swasta']+data['mi']['swasta']+data['mts']['swasta']+data['sma']['swasta']+data['ma']['swasta']+data['smk']['swasta'])+"</td></tr><tr class='trOdd'>");
		});
	</script>
	<?php if($banneract){ ?>
	<script>
	$(document).ready(function() { 
	if (<?=$banneract;?>)
 	   $("a").trigger('click'); 
	});
	</script>
	<?php }?>
</head>
<!-- ========================================= Banner =============================================== -->
<body style="padding:0; margin:0;"  onload="initialize();" onUnload="GUnload()">
<div id="border">
	<div id="wrapper">
		<div id="header">
			<?php include("header_body.php")?>
		</div>
		<div id="main">
<!-- ========================================= Menu Samping =============================================== -->

      	<div id="navigation">
   				<!-- List Menu -->
   				<?php include("menu.php"); ?>

   				<div id="banner">
    				<p>   					
						<div align="center"> <a class="zoom1" href="/siap-peta/sknimg/html/lightbox.html" ><img src="/siap-peta/sknimg/img/belumdaftar.png" border='0'/></a></div>		
					</p>
				</div>
		</div>
			
<!-- =========================================== CONTENT =============================================== -->
			
			<div id="content">
				<div class="peta">
					<div id="map_canvas" style="width: 675px; height: 300px"></div>
                </div>
                
				<div class="content-isi">
                    <h3>SIAP Peta</h3>
                    <p>Selamat Datang di SIAP PETA, aplikasi berikut ini merupakan aplikasi bagian dari SIAP yang membantu pengguna dalam melakukan
                        pencarian data maupun hal-hal mengenai sekolah lainnya yang kemudian dihubungkan dengan PETA.</p>
                    <div class="container">
                    	 <div class="content_table2">
                             <div class="sdw-l"></div>
                                    <div class="sdw-r"></div>
									<div style="width: 349px;">
                            <!-- common bordered box -->
                                <div class="box-bordered form">
                                   
                      
                                    <div class="sdw-m">
                                    
                                 <div class="head">
                                 <table cellpadding="0" cellspacing="0" border="0">
                                   <tr>
                                     <td class="title">Jumlah Sekolah</td>
                                     <td class="desc">Jumlah sekolah yang terdaftar di SIAP</td>
                                   </tr>
                                 </table>
                               </div>
                      
                                    <div>
                                        <table cellspacing="0" cellpadding="0" border="0" class="tbCap2">
                                          <tbody id='jumlahsekolah'>
                                         
                                        </tbody>
                                      </table>
                                    </div>
                                    </div><!-- end of class="sdw-m" -->

                                </div><!-- end of class="box-bordered form" -->
                            </div><!-- end of class="content_table" -->
                        </div>
                        <div class="content_info">
                        <div >                                   
                          <!-- news border -->
                          <div class="news-bdr">
                            <div class="r">
                              <div class="m">
                                <div class="news-home">
                                  <!-- news header -->
                                  <div class="head">
                                    <table cellspacing="0" cellpadding="0" border="0">
                                      <tbody><tr>
                                        <td class="title_hdr">INFO Berita Terbaru</td>
                                      </tr>
                                    </tbody></table>
                                  </div>
                      			  <div class="cont" id='berita-cont'>
                        			<div id='no-berita'><h3 class="judul">Tidak ada berita untuk bulan ini</h3></div>
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
		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>