<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SIAP PETA</title>
<link href="<?=base_url();?>sknimg/css/peta.css" type="text/css" rel="stylesheet" />
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAey9HOzh88xtRQ2mntcfCiBQ3ZgyK6ysGjIRpkSK5a0-ZQBpbMRTSmyiLXPoYwmhvD2k0WX6jVkBx0w"
            type="text/javascript"></script>
    <script type="text/javascript">
    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map_canvas"));
        map.setCenter(new GLatLng(-1.110282, 115.041503), 5);
        map.setUIToDefault();
       
      }
    }

    </script>
	<!--script coba-->
	<SCRIPT TYPE="text/javascript" LANGUAGE="javascript">

function waitPreloadPage() { //DOM
if (document.getElementById){
document.getElementById('prepage').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.prepage.visibility = 'hidden';
}
else { //IE4
document.all.prepage.style.visibility = 'hidden';
}
}
}
// End -->
</SCRIPT>
	<!--end-->
</head>
<!-- Awal wrapper sampai pembentukan header -->
<body style="padding:0; margin:0;"  onload="initialize();waitPreloadPage();" onunload="GUnload()">
<div id='loading' style='position:absolute; width:100%; text-align:center; top:300px;'> <img src="<?=base_url();?>sknimg/img/loading.gif" /></div>
<!-- adu-->
<div align="center">
  <div id="wrapper">
    <div class="header">
     <div class="left" style="float:left;margin-left:9px;"><?=anchor(base_url(), '<img border="0" align="left" src="'.base_url().'sknimg/img/Logo_map.jpg"/>');?></div>
	 <div class="center"style="text-align:center;float:left;Margin-left:220px;Margin-top:15px;font-family:'Trebuchet MS';font-size:24px;color:#4499aa;"><a style="color:#4499aa;" href="<?=base_url();?>portal/kontak">PETA Pendidikan Indonesia</a></div>
	 <div class="right"style="margin-top:-9px;margin-right:9px;"><a href="http://siap-online.com"><img border="0" align="right" width='72' height='72' src="<?=base_url();?>sknimg/img/logo_siap_header.png"></a></div>
    </div>
    <!-- Clear float -->
    <div class="clear"></div>
    <!-- Container Map -->
    <div id="Box_Map"><div id="map_canvas" style="width: 970px; height: 500px"></div></div>
    <!-- Div Content -->
    <div class="Box_Content">
      <!-- List Menu -->
       <?php include("menu.php"); ?>
      <!-- Content isi -->
      <div id="Content_isi">
	<br />
	   <!--BANNER-->
	  <div class="banner-adv"><a href="http://siap-online.com/siap-sekolah.penjelasan.php" target="_blank"><img src="http://images.siap-psb.com/sknimg/iklan/adv_siap.gif" height="97" width="595" border="0" /></a></div>
        <div class="judul">
          <h2>Pesan Anda</h2>
        </div>
     
      <blockquote class="skn-quote" style="padding-left:157px">
      <div class="top">
        <div class="l">
          <div class="m"></div>
        </div>
      </div>
      <div class="mid"><div class="r">
          <p><em>&quot;Maaf Pesan anda masih dalam perbaikan..untuk adanya ketidaknyamanan ini kami mohon maaf!! &quot;.</em></p>

      </div></div>
      <div class="btm">
        <div class="l">
          <div class="m"></div>
        </div>
      </div>
      </blockquote>

		
	
		</div>
	</div>
		
        
    
    <!-- clear float -->
    <div class="clr"></div>
    <!-- Separator -->
    <br />
    <div class="footer" align="center">
      <div class="rounded_left"></div>
      <div class="rounded_right"></div>
      <div class="mid">
        <div class="telkom"><img src="<?=base_url();?>sknimg/img/logo_telkom.png" /></div>
        <div class="siap"><a href="http://siap-online.com"><img border ="0"src="<?=base_url();?>sknimg/img/logo_siap.png" /></a></div>
        <div class="text">Layanan ini diselenggarakan oleh TELKOM SOLUTION untuk dunia pendidikan di Indonesia. Mari kita majukan bangsa Indonesia, melalui pemanfaatan Teknologi Informasi yang tepat guna pada dunia pendidikan Indonesia. rendered in {elapsed_time} seconds</div>
      </div>
    </div>
    <div class="browser"><img src="<?=base_url();?>sknimg/img/browser.png"/></div>
  </div>
</div>

</div>
</body>
</html>
