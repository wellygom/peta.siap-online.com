<?php include("header.php"); ?>
<?php include("googlemaps.php"); ?>
<script type="text/javascript" src="<?=base_url();?>sknimg/js/jquery-table-sorter.js"></script>
<script type="text/javascript" src="<?=base_url();?>sknimg/js/jquery-table-sorter-pager.js"></script>
<script type="text/javascript" src="<?=base_url();?>sknimg/js/cari_sekolah.js"></script>
<script type="text/javascript" >
//==================================== Paging ==================================
var page=1, pageNow=1;	
var max=Math.ceil(<?=$limit;?>/8);

function halaman(hal){
	if (max==2){
		if (hal==1)
			$(".page").html(hal+' <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> ');
		if(hal==2)
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal);
	}
	else if (hal==1){
		$(".page").html(hal+' <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal+2)+');\">'+(hal+2)+'</a> ');	
	}
	
	else if (hal==max){
		$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-2)+');\">'+(hal-2)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal);
	}
	else{
		$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal+' <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> ');
	}
	//===========navigasi========
	if ((hal==max)||(hal==(max-1))){
		$(".next").html("");	
	}else if(max==2){
		$(".prev").html("");
		$(".next").html("");
	}
	else if ((hal==1)||(hal==2)){
		$(".prev").html("");
	}else{
		$(".prev").html("&lt;&lt;");
		$(".next").html("&gt;&gt;");
	}

	pageNow=hal;
	$(".tablesorter").html("");
	$(".pageOf").html(page);
	cari_akreditasi_sekolah("<?=$k_lokasi;?>","<?=$k_jenjang;?>","<?=$k_status;?>","<?=$akreditasi;?>",hal,"8");
}
function next(hal){
	if (hal==2){
		hal=hal+1;
	}
	if(pageNow==hal){
		if (hal == 1) {
			$(".page").html(hal + ' <a href=\"#\" onClick=\"halaman(' + (hal + 1) + ');\">' + (hal + 1) + '</a> ' + '<a href=\"#\" onClick=\"halaman(' + (hal + 2) + ');\">' + (hal + 2) + '</a> ');
		}
		else if (hal == max) {
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-2)+');\">'+(hal-2)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal);
		}else{
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal+' <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> ');	
		}				
	}
	else{
		if(pageNow==(hal-1)){
			$(".page").html((hal-1) + ' <a href=\"#\" onClick=\"halaman(' + hal + ');\">' + hal + '</a> ' + '<a href=\"#\" onClick=\"halaman(' + (hal + 1) + ');\">' + (hal + 1) + '</a> ');
		}else if (pageNow==(hal+1)){
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+hal+');\">'+hal+'</a> '+(hal+1));
		}else if(hal == max){
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-2)+');\">'+(hal-2)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal);
		}
		else {
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal)+');\">'+hal+'</a> <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> ');
		}
	}
	//===========navigasi========
	if((hal==(max-1))||(hal==max)){
		$(".next").html("");
	}else{
		$(".prev").html("&lt;&lt;");
	}
	page=hal;	
}
function prev(hal){
	if (hal==(max-1)){
		hal=hal-1;
	}
	if(pageNow==hal){
		if (hal == 1) {
			$(".page").html(hal + ' <a href=\"#\" onClick=\"halaman(' + (hal + 1) + ');\">' + (hal + 1) + '</a> ' + '<a href=\"#\" onClick=\"halaman(' + (hal + 2) + ');\">' + (hal + 2) + '</a> ');
		}
		else if (hal == max) {
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-2)+');\">'+(hal-2)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal);
		}else{
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+hal+' <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> ');	
		}				
	}
	else{
		if(pageNow==(hal-1)){
			$(".page").html((hal-1) + ' <a href=\"#\" onClick=\"halaman(' + hal + ');\">' + hal + '</a> ' + '<a href=\"#\" onClick=\"halaman(' + (hal + 1) + ');\">' + (hal + 1) + '</a> ');
		}else if (pageNow==(hal+1)){
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+hal+');\">'+hal+'</a> '+(hal+1));
		}else if(hal == 1){
			$(".page").html(hal+' <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal+2)+');\">'+(hal+2)+'</a> ');	
		}
		else {
			$(".page").html(' <a href=\"#\" onClick=\"halaman('+(hal-1)+');\">'+(hal-1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(hal)+');\">'+hal+'</a> <a href=\"#\" onClick=\"halaman('+(hal+1)+');\">'+(hal+1)+'</a> ');
		}
	}
	//===========navigasi========
	if((hal==1)||(hal==2)||(page==1)){
		$(".prev").html("");
	}else{
		$(".next").html("&gt;&gt;");
	}
	page=hal;	
}
//on load dokumen
$(document).ready(function() {
	cari_akreditasi_sekolah("<?=$k_lokasi;?>","<?=$k_jenjang;?>","<?=$k_status;?>","<?=$akreditasi;?>",page,"8");
	if(max==1){
		$(".page").html("1");
		$(".next").html("");
		$(".prev").html("");
	}else if(max==2){
		$(".page").html('1 <a href=\"#\" onClick=\"halaman('+(page+1)+');\">'+(page+1)+'</a> ');
		$(".next").html("");
		$(".prev").html("");
	}else{
		$(".page").html('1 <a href=\"#\" onClick=\"halaman('+(page+1)+');\">'+(page+1)+'</a> '+'<a href=\"#\" onClick=\"halaman('+(page+2)+');\">'+(page+2)+'</a> ');
		$(".next").html("&gt;&gt;");
		$(".prev").html("");
	}
	$(".pageOf").html("1");
});
</script>
<script>
var geocoder = new GClientGeocoder();
function initialize() {
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map_canvas"));
        showPropinsi("<?=$propinsi?> Indonesia");
        map.setUIToDefault();
     }
	//fungsi untuk menampilkan propinsi
	function showPropinsi(address) {
		geocoder.getLatLng(
	    address,
	    function(point) {
			if (!point) {
	        	alert(address + " tidak ditemukan");
	      	}else{
	        	map.setCenter(point, 8);
	      	}
	    });
	}
}
</script>
</head>
<body style="padding:0; margin:0;"  onload="initialize();" onUnload="GUnload()">
<div id="border">
<div id="wrapper">
<div id="header"><?php include("header_body.php")?></div>
<div id="main">
<div id="navigation"><?php include("menu.php"); ?>
<div id="banner">
<p><div align="center"> <a class="zoom1" href="/sknimg/html/lightbox.html" ><img src="/sknimg/img/belumdaftar.png" border='0'/></a></div></p>
</div>
</div>
<div id="content">
<div class="peta">
<div id="map_canvas" style="width: 675px; height: 300px"></div>
</div>
<div class="content-isi">
          <h3>Data Sekolah</h3>
          <p>Hasil pencarian data sekolah berdasarkan daerah</p>
<div class="container">
                        <div class="content_table">
                        <div style="width: 690px;"> 
                        <div class="box-bordered form">
<div class="head" style="width:656px;margin-left:6px;">
<div class="sdw-l"></div>
                            <div class="sdw-r"></div>
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td class="title">Daftar Sekolah</td>
                    <td class="desc">Data sebaran Sekolah yang terdatar di Indonesia <br />
                    berdasarkan Jenjang dan status</td>
					<?php $maxHalaman=ceil($limit/8);?>
					<td class="paging" align="right" width="320px"><script>document.writeln("Halaman "+"<span class=\"pageOf\"></span>"+" dari "+max+ " ("+'<?=$limit;?>'+" data)");</script><br><a href="#" onClick="prev(page-1);" class="prev"></a><b class="page"></b><a href="#" onClick="next(page+1);" class="next"></a></td>
					
             </tr>
      </table>
<table id='pag' class="skn-nav doted" border="0" cellspacing="0" cellpadding="0">
</table>
</div>
<!--end-->
             <div>
              <!-- news border -->
              <div class="news-bdr">
                <div class="r">
                  <div class="m">
                    <div class="news-home">
                      <!-- news header -->
                       <div class="cont">
                        <!-- news content -->
                        <div class="box-bordered form">
                                    
                                    <div class="sdw-m">
                                    <div class="scrol" id="scrol">
<!-- ================= Table hasil ================= -->	
<table class="tablesorter" border='0'>
</table> 
<!-- ================================================ -->	
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