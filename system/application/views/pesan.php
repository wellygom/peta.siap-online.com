<?php include("header.php"); ?>
<script>
$.getJSON("/portal/pesanGetJson/",    		
	function(data){
		$.each(data.data_item['0'], function(i,item){
			if(i!="total"){
				if(i==0){
					$("#pesan-box").html('');
				}	
				if(i%2!=0){
					$("#pesan-box").append("<div class='wrap'><div class='ask'><div class='top'><div class='l'><div class='m'></div></div></div><div class='mid'><div class=nfo>Pengirim : <span>"+item.q_name+"</span> | <span>"+item.q_date+"</span></div><div class='psn skn-cont-frm'><p>"+item.q_content+"</p></div></div><div class='btm'><div class='l'><div class='m'></div></div></div></div><div class='jwb'><div class='top'><div class='l'><div class='m'></div></div></div><div class='mid'><div class='psn skn-cont-frm'><p>"+item.a_content+"</p></div><div class='nfo'><span>"+item.a_author_name+"</span></div></div><div class='btm'><div class='l'><div class='m'></div></div></div></div></div>");
				}else{
					$("#pesan-box").append("<div class='wrap odd'><div class='ask'><div class='top'><div class='l'><div class='m'></div></div></div><div class='mid'><div class=nfo>Pengirim : <span>"+item.q_name+"</span> | <span>"+item.q_date+"</span></div><div class='psn skn-cont-frm'><p>"+item.q_content+"</p></div></div><div class='btm'><div class='l'><div class='m'></div></div></div></div><div class='jwb'><div class='top'><div class='l'><div class='m'></div></div></div><div class='mid'><div class='psn skn-cont-frm'><p>"+item.a_content+"</p></div><div class='nfo'><span>"+item.a_author_name+"</span></div></div><div class='btm'><div class='l'><div class='m'></div></div></div></div></div>");
				}
				
			}
		});	
	});
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
          				<h2>Pesan Anda</h2>
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
			                  <div class="top"><div class="l"><div class="m"></div></div></div>
			                  <div class="mid" id="kirimLink"><a href="<?=base_url();?>portal/kirimpesan" >Kirim Pesan</a><div></div></div>
			                  <div class="mid" id="tampilLink" style="display:none"><a href="" onclick="psb.request('guestbook.php', '#ajaxTarget'); return false">Lihat Pesan</a><div></div></div>
			                  <div class="btm"><div class="l"><div class="m"></div></div></div>
			                </div>
			              </td>
			            </tr>
			          </table>
        			</div><!--end of class="content pesan"-->
        			<!--List pesan-->
					<div class="list-pesan">
						<div class="skn-pesan skn-box-a" id="pesan-box">
							<div class="wrap ">
								 <div class="jwb">
						              <div class="top"><div class="l"><div class="m"></div></div></div>
						              <div class="mid">
						                
						                <div class="psn skn-cont-frm">
						                  <p>Belum ada Tanya Jawab pada bulan ini</p>
						                </div>
						              </div>
						              <div class="btm"><div class="l"><div class="m"></div></div></div>
						           </div>
								</div>
						</div>			
					</div><!--end list pesan-->
                </div><!--end of class="content-isi"-->
            </div><!--end of id="content"-->
            <div style="clear: both"></div>

        </div><!--end of class="main"-->

		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>