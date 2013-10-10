<?php include("header.php"); ?>
<script type="text/javascript">
var http_request = false;
function makePOSTRequest(url, parameters) {
	http_request = false;
   	if (window.XMLHttpRequest) { // Mozilla, Safari,...
    	http_request = new XMLHttpRequest();
      	if (http_request.overrideMimeType) {
       		// set type accordingly to anticipated content type
        	//http_request.overrideMimeType('text/xml');
            http_request.overrideMimeType('text/html');
     	}
 	}else if (window.ActiveXObject) { // IE
  		try {
       		http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
     		try {
           		http_request = new ActiveXObject("Microsoft.XMLHTTP");
       		} catch (e) {}
    	}
  	}
	if (!http_request) {
     	alert('Cannot create XMLHTTP instance');
     	return false;
  	}
 	http_request.onreadystatechange = alertContents;
   	http_request.open('POST', url, true);
  	http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	http_request.setRequestHeader("Content-length", parameters.length);
  	http_request.setRequestHeader("Connection", "close");
  	http_request.send(parameters);
}

function alertContents() {
	if (http_request.readyState == 4) {
    	if (http_request.status == 200) {
            result = http_request.responseText;
            if(result=="Parameter tidak lengkap"){
            	 document.getElementById('salah').innerHTML ='<font color=red>'+result+'</font>';  
            }else{
            	document.getElementById('salah').innerHTML ='<font color=green>'+result+'</font>';
            	document.getElementById('reset').click(); 
            }           
         }else {
            alert('Ada masalah dengan pengiriman pertanyaan.');
		}
	}
}  

function get(obj) {
	var poststr = "nama=" + encodeURI( document.getElementById("nama").value ) +
                  "&email=" + encodeURI( document.getElementById("email").value ) +
                  "&tanya=" + encodeURI( document.getElementById("tanya").value );
	makePOSTRequest('<?=base_url()?>portal/postpesan', poststr);
}
</script>
</head>
<!-- Awal wrapper sampai pembentukan header -->
<body style="padding:0; margin:0;">
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
				</div>
			</div>
			<div id="content">
				<div class="content-isi">
					<!--title-->
					<div class="judul">
          				<h2>Kirim Pesan</h2>
        			</div>
					<!--content pesan-->
					 <div>
			        	<table border="0" cellpadding="0" cellspacing="0" width="100%">
			          	<tr>
			            	<td>
			                	<div style="padding-right:15px;" class="text_content">
			                  		<ul>
			                    		<li>Menu Pesan Anda ini adalah media interaksi online antara pengguna dengan penyelenggara/pengelola layanan SIAP Peta</li>
			                    		<li>Kirimkan pesan-pesan Anda baik berupa saran, kritik ataupun pertanyaan seputar SIAP Peta</li>
			                    		<li>Kiriman pesan-pesan Anda akan difilter terlebih dahulu sebelum di tampilkan untuk umum, sehingga apabila terdapat pesan-pesan yang tidak berkenan hanya pengelola saja yang membacanya tanpa mengganggu kenyamanan pengguna yang lain</li>
			                  		</ul>
			                	</div>
			              </td>
			              <td class="skn-bdr-2px skn-search" style="width:175px">
			              	<div class="send-link">
                  				<div class="top">
                    				<div class="l">
                      					<div class="m"></div>
                    				</div>
                  				</div>
                  				<div class="mid" id="kirimLink" style="display:none"><a href="" >Kirim Pesan</a>
                    				<div></div>
                  				</div>
                  				<div class="mid" id="tampilLink" style="display:block"><a href="<?=base_url()?>portal/pesan" >Lihat Pesan</a>
                    				<div></div>
                  				</div>
                  				<div class="btm">
                    				<div class="l">
                      					<div class="m"></div>
                    				</div>
                  				</div>
                			</div>
                		</td>
            		</tr>
          		</table>
        	</div>
        	
        	<!-- form pesan -->
        	<div align="left" class="skn-pesan-form skn-box-a">
          	<!-- data 1 -->
          		<div class="top">
            		<div class="l">
              			<div class="m"></div>
            		</div>
          		</div>
          		<div class="mid">
            		<form id="formpost" name="formpost" method="post" >
              			<!-- error container -->
              			<div id="salah" name="salah" ></div>
              				<div><strong>Nama</strong></div>
              				<input type="text" class="input-text" id="nama" name="nama" value="" ></input>
              				<div><strong>Email</strong> (optional)</div>
              				<input type="text" class="input-text" id="email" name="email" value="" ></input>
              				<div><strong>Pesan</strong></div>
              				<textarea class="input-text" rows="8" id="tanya" name="tanya"></textarea>
              				<div class="right">
                				<input type="reset" value=" Reset " name="reset" id='reset'></input>
                				<input type="button" value=" Submit " name="kirim" id="kirim" onClick="javascript:get(this.parentNode);"></input>
              					<div class="clear"></div
              				</div>
            		</form>
            		<div class="clear"></div>
            		<div class="clear"></div>
          	</div>
          	<div class="btm">
            	<div class="l">
              		<div class="m"></div>
            	</div>
          	</div>
      	</div>
      	
	</div><!--end of class="content-isi"-->
	</div><!--end of id="content"-->
   	<div style="clear: both"></div>
   	
   </div><!--end of class="main"-->
		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>
