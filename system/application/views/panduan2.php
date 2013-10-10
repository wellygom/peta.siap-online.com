<?php include("header.php"); ?>

<script  type="text/javascript">
var successStory = new Array();
successStory[1] = "panduantampilan";
successStory[2] = "tombol";
successStory[3] = "geser";
successStory[4] = "besar";
successStory[5] = "daerah";
successStory[6] = "nama";
successStory[7] = "akreditasi";
successStory[8] = "panduanarah";
var totalStories = successStory.length-1;
var whichStory = "panduantampilan";
function pickStory(thisStory) {
  whichStory = thisStory;
  for (i=1; i<=totalStories; i++) {
    document.getElementById(successStory[i]+"_container").className = ( thisStory == successStory[i]) ? 'show' : 'hide' ;
  }
  for (i=1; i<=totalStories; i++) {
	 if (document.getElementById(successStory[i]+"_tab").className =='sub' || document.getElementById(successStory[i]+"_tab").className =='subselected')
	 {
		 document.getElementById(successStory[i]+"_tab").className = ( thisStory == successStory[i]) ? 'subselected' : 'sub' ;
		}  
		else {
    document.getElementById(successStory[i]+"_tab").className = ( thisStory == successStory[i]) ? 'selected' : '' ;
}
  }
}
  
function load() {
  pickStory(whichStory);
}
 
 
</script> 

	<!--end-->
<script  type="text/javascript">
function hide(id)
{
	var myBox=document.getElementById(id);
	myBox.style.display="none";
}
function show(id)
{
	var myBox=document.getElementById(id);
	myBox.style.display=(myBox.style.display=='none' ? 'block': 'none');
	return false;
}

function toggle(id)
{
	var myBox=document.getElementById(id);
	if(myBox.style.display=="none"){
		myBox.style.display="block";
	}else{
		myBox.style.display="none";
	}
}
</script>
<style>
.show {display:block;}
.hide {display:none;} 
h2 {margin:0 0 4px 0;padding:12px 0 0 0;}
ul#tabList {list-style:none;width:205px;float:left;margin:0 20px 0 -1px;padding:0;}
ul#tabList li {list-style:none;border:1px solid #bfd4f2;border-top:0; width:205px;float:left;margin:0;padding:0;background:#ecf4fd;}
ul#tabList li.selected {border:1px solid #bfd4f2;border-top:0;border-right:1px solid #fff;width:205px;margin:0 0 0 -2px;padding:0;background:#fff;}
ul#tabList li.sub {list-style:none;border:1px solid #bfd4f2;border-top:0; width:164px;float:left;padding:0;background:#ecf4fd;}
ul#tabList li.subselected {border:1px solid #bfd4f2;border-top:0;border-right:1px solid #fff;width:164px;margin:0 0 0 -2px;padding:0;background:#fff;}
ul#tabList li a {text-decoration:none;padding:6px 5px 6px 10px;line-height:2.3em;}
ul#tabList li.selected a {padding:6px 5px 6px 10px;line-height:2.3em;}
.theStories {width:450px;margin-left:205px;border:1px solid #bfd4f2;}
.theStories div.show {margin:5px 10px 5px 5px;}
div div.theStories {margin-top:0;padding:0;}
.secondlink {margin-left:5px;}
div div.rightside {margin:0;padding:0;}
.logo {margin:4px 0 20px 0;} 
</style>
</head>

<!-- ========================================= Menu Samping =============================================== -->
<body style="padding:0; margin:0;" >
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
   			</div>
			
<!-- =========================================== CONTENT =============================================== -->
			
		<div id="content" style="margin-bottom:15px">
			<div style="padding-left:7px" class="judul">
          		<h2>Panduan SIAP Peta</h2>
        	</div>
        <!--<div style="padding-left:7px; padding-right:7px" class="text_content">SIAP PETA merupakan aplikasi web yang berfungsi untuk menampilkan peta dari tiap sekolah jika peta tersebut telah memiliki data bujur dan lintang yang sesuai. Aplikasi web ini nantinya diharapkan dapat membantu untuk mengetahui lokasi sekolah dan sebarannya.</div>-->
        <div class="container">
          <div class="content_berita">
            <div>
              <!-- news border -->
              <div class="news-bdr" >
                <div class="r">
                  <div class="m">
                    <div class="news-home">
                      <!-- news header -->
                      <div class="head">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td class="title_hdr">Panduan</td>
                          </tr>
                        </table>
                      </div>
					<!--Panduan diisi DISINI -->
						<div class="panduan">
							<!--<p>Panduan untuk SIAP Peta</P>-->
							<!--panduan simpan-->
							<div class="button-wrap">
							<div class="sider"> 
							<a onClick="toggle('cari_container');toggle('simpan_container');" class="input-button">Menyimpan Lokasi Sekolah anda</a>
							</div></div>
							<!-- <div class="simpn"style="margin:5px;padding:5px;-moz-border-radius:10px;border-radius:10px;-webkit-border-radius:10px;background-color:#bfd4f2;width:185px;height:15px;"><a href="#panduSimpan"onclick="show('cari_container');show('simpan_container')">Menyimpan Lokasi Sekolah anda</a>-->
							<!--</div>-->
							<div id="cari_container" style="display:none;"> 
										<p>Untuk mencari koordinat lokasi sekolah Anda, silakan menggunakan bantuan Google Maps, Untuk mencari koordinat sekolah anda menggunakan Google Maps anda dapat melakukan langkah sebagai berikut : </p>
											<ol>
												<li>Anda dapat mengakses Google Maps pada tautan:<a href="http://maps.google.com">http://maps.google.com</a></li>
												<li>Cari daerah sekolah  Anda pada peta Google Maps dengan menggunakan tombol zoom dan tombol arah.</li>
												<li>Setelah menemukan lokasi yang tepat, lakukan klik kanan pada lokasi tersebut dan pilih &quot;What's Here?&quot; dari pilihan menu yang ada.</li>
												<img src="<?=base_url();?>sknimg/img/gbr7.png"/>
												<li>Google akan menampilkan posisi sekolah anda dengan memberikan penanda. </li>
												<li>Sorot penanda tersebut tersebut untuk memunculkan koordinat atau Anda dapat melihat koordinat yang sama muncul pada kolom pencarian alamat.</li>
												<img src="<?=base_url();?>sknimg/img/gbr8.png"/>
												<img src="<?=base_url();?>sknimg/img/gbr9.png"/><br><br>
											<p>Susunan koordinat yang tampil pada peta dan atau pada kolom pencarian adalah (koordinat Lintang, koordinat Bujur).</p></ol>
								</div>
								
								<div id="simpan_container" style="display:none;">
									<p>Setelah mendapatkan koordinat lokasi sekolah Anda, untuk menyimpan lokasi sekolah anda pada SIAP PETA anda melakukan langkah-langkah sebagai berikut:</p>
											<ol>
												<li>Pastikan anda telah memiliki akun SIAP SEKOLAH EDISI GRATIS (Klik tautan berikut untuk mendaftarkan <a href="http://siap-online.com/pendaftaran/ajuan.php">SIAP Sekolah Edisi Gratis</a> jika Anda belum memiliki).</li>
												<li>Login ke SIAP Sekolah menggunakan username dan password Anda (<a href="http://sekolah.siap-online.com/">Tautan SIAP Sekolah</a>)</li>
												<li>Akses menu Sekolah > Info > Lokasi.</li>
												<li>Klik icon edit ( <img src="<?=base_url();?>sknimg/img/edit.png"/> ) untuk melakukan edit lokasi.</li>
												<li>Isikan koordinat di kolom yang telah disediakan. </li>
												<li>Koordinat yang dimasukkan pada kolom-kolom tersebut adalah koordinat dalam format derajat, menit, dan detik, sehingga harus dilakukan konversi dari koordinat desimal yang Anda dapatkan tadi. Langkah-langkah konversinya adalah:</li>
													<div>
													<ul>
														<li>Isikan angka di depan koma atau titik desimal ke kolom bertanda derajat.</li>
														<li>Kalikan seluruh angka di belakang koma atau titik desimal dengan 60, lalu dari hasil perkaliannya, simpan seluruh angka di depan koma atau titik desimal ke kolom bertanda menit.</li>
														<li>Dari hasil perkalian langkah sebelumnya, kalikan seluruh angka di belakang koma atau titik desimal dengan 60, lalu dari hasil perkalian ini, simpan seluruh angka di depan koma atau titik desimal ke kolom bertanda detik.</li>
														<li>Pilih jenis Lintang dan Bujur yang sesuai. Tanda negatif di depan koordinat Lintang berarti Lintang Selatan, begitu pula bila tanda negatif tersebut ada di depan koordinat Bujur, maka yang dimaksud adalah Bujur Barat.</li>
													</ul>
													</div>
												<li>Klik pada tombol &quot;Simpan&quot;.</li></ol>
								</div> 
							
							<!--end-->
							
							<div class="isi" style="test-allign:justify">
							<ul id="tabList"> 
							<!--tampilan-->
							<li id="panduantampilan_tab" class="selected" style="border-top:1px solid #bfd4f2;"><a href="#panduantampilan" onclick="pickStory('panduantampilan');hide('submenucari');hide('submenunavigasi');">Mode Tampilan</a> 
										
							<!--navigasi-->
							<li id="panduannavigasi_tab"><a href="#panduannavigasi" onclick="pickStory('tombol');hide('submenucari');show('submenunavigasi');">Navigasi SIAP PETA</a>
								<div id='submenunavigasi'>
										<ul>
											<li id="tombol_tab" class='sub'><a href="#tombol" onclick="pickStory('tombol');">Tombol Navigasi</a> 
											<li id="geser_tab" class='sub'><a href="#geser" onclick="pickStory('geser');">Menggeser Peta</a> 
											<li id="besar_tab" class='sub'><a href="#besar" onclick="pickStory('besar');">Memperbesar Tampilan</a> 
										</ul>
									</div>
								<script type="text/javascript">hide('submenunavigasi');</script> 
							
							<!--cari-->	
							<li id="panduancari_tab"><a href="#panduancari" onclick="pickStory('daerah');show('submenucari');hide('submenunavigasi');">Pencarian Lokasi Sekolah</a>
								<div id='submenucari'>
										<ul>
											<li id="daerah_tab" class='sub'><a href="#daerah" onclick="pickStory('daerah');">Berdasar Daerah</a> 
											<li id="nama_tab" class='sub'><a href="#nama" onclick="pickStory('nama');">Berdasar NPSN/Nama</a> 
											<li id="akreditasi_tab" class='sub'><a href="#akreditasi" onclick="pickStory('akreditasi');">Berdasar Akreditasi</a> 
										</ul>
									</div>
								<script type="text/javascript">hide('submenucari');</script> 
							
							<!--arah-->	
							<li id="panduanarah_tab"><a href="#panduanarah" onclick="pickStory('panduanarah');hide('submenucari');hide('submenunavigasi');">Pencarian Arah</a>	
								
							</ul> 
							<div>
							
							
							<div class="theStories"> 
								<div id="panduantampilan_container" class="show"> 
										<p>Terdapat 3 kategori Mode Tampilan pada SIAP PETA yaitu :</p>
												<ol>
													<LI><P STYLE="margin-bottom: 0.14in"><B>Map, </B>merupakan mode penyajian peta default dari SIAP Peta. Tampilannya adalah seperti peta biasa dengan informasi nama lokasi.</P> </li>
													<LI><P STYLE="margin-bottom: 0.14in"><B>Satellite, </B>merupakan mode penyajian peta dengan tampilan gambar udara tanpa informasi nama lokasi.</P> </li>
													<LI><P STYLE="margin-bottom: 0.14in"><B>Terrain, </B>merupakan mode penyajian peta dengan tampilan warna berdasarkan ketinggian lokasi pada peta dan dilengkapi informasi nama lokasi.</P> </li>	
												</ol>
												<P>Anda dapat  memilih Mode Tampilan dengan melakukan klik pada Mode Tampilan
												(“Map”, “Sattelite”, atau “Terrain”) sesuai dengan
												kebutuhan Anda.</P> 	
								</div> 
								
								<div id="tombol_container" class="hide"> 
									
								<img style="width:90px;height:150px" border='1' src="<?=base_url();?>sknimg/img/Tombolpanduan.jpg"/>
												<p>Keterangan Gambar:</p>
												<ol>
												<li>Tombol Arah digunakan untuk menggerakkan peta (atas untuk arah utara, bawah untuk arah selatan, kiri untuk arah barat, kanan untuk arah timur).</li>
												<li>Tombol Zoom digunakan untuk memfokuskan dan memperluas tampilan.Tombol “+” berguna untuk memfokuskan tampilan, dan tombol “-” berfungsi untuk kembali ke tampilan yang lebih luas.</li>
												<li>Scroll Zoom berguna untuk memfokuskan dan memperluas tampilan secara terukur.dengan ketentuan scroll ke depan untuk memfokuskan tampilan suatu daerah (memperbesar), dan scroll ke belakang untuk kembali ke tampilan yang lebih luas.</li>
												</ol>
								</div>
								
								<div id="geser_container" class="hide">
									<p>Untuk melakukan penggeseran pada tampilan peta, pengguna dapat menggunakan 3 metode:</p>
									<ol>
												<li>Menekan tombol arah pada keyboard untuk  menggerakkan peta (atas untuk arah utara, bawah untuk arah selatan, kiri untuk arah barat, kanan untuk arah timur).</li>
												<li>Melakukan klik pada empat kursor arah yang terdapat pada tombol arah di bagian kiri atas tampilan peta.</li>
												<li>Melakukan klik di daerah manapun pada tampilan peta, lalu menahannya sambil menggeser mouse ke arah yang diinginkan.</li>
									</ol>
								</div> 
								
								<div id="besar_container" class="hide">
									<p>Untuk melakukan pembesaran pada tampilan SIAP Peta, pengguna dapat melakukan dua metode:
									<ol>
												<li>Menggunakan tombol “+” dan “-” yang terletak di bagian kiri tampilan peta. Tombol “+” berguna untuk memfokuskan tampilan, dan tombol “-” berfungsi untuk kembali ke tampilan yang lebih luas.</li>
												<li>Melakukan klik pada tombol geser dan menggesernya ke atas atau bawah.</li>
												<li>Melakukan scroll pada mouse, dengan ketentuan scroll ke depan untuk memfokuskan tampilan suatu daerah (memperbesar), dan scroll ke belakang untuk kembali ke tampilan yang lebih luas.</li>
									</ol>	
								</div>
								
								<div id="daerah_container" class="hide">
									<p>Untuk mencari lokasi Sekolah berdasarkan daerah, Anda dapat melakukan langkah-langkah berikut :</p>
											<ol>
												<li>Klik pada Menu &quot;Lokasi Sekolah&quot;, katagori Sub Menu &quot;Berdasarkan Daerah&quot;</li>
												<img src="<?=base_url();?>sknimg/img/gbr3.png"/>
												<li>Pilih sesuai dengan lokasi daerah yang akan anda lihat pada kolom yang tersedia meliputi &quot;Jenjang&quot;, &quot;Status&quot;, &quot;Propinsi&quot;, &quot;Kota/Kabupaten&quot;</li>
												<li>Klik &quot;Cari Data&quot;</li>
												<li>Untuk melihat lokasi sekolah yang secara spesifik, anda dapat memilih salah satu sekolah pada tabel data yang tersedia.</li>
												
											</ol>
								</div>
								
								<div id="nama_container" class="hide">
									<p>Untuk mencari lokasi Sekolah berdasarkan daerah, Anda dapat melakukan langkah-langkah berikut :</p>
										<ol>
											<li>Klik pada Menu &quot;Lokasi Sekolah&quot;, katagori Sub Menu &quot;Berdasarkan NPSN/Nama&quot;</li>
											<img src="<?=base_url();?>sknimg/img/gbr4.png"/>
											<li>Pilih sesuai dengan lokasi daerah yang akan anda lihat pada kolom yang tersedia meliputi &quot;Jenjang&quot;,&quot;Propinsi&quot;, &quot;Kota/Kabupaten&quot;</li>
											<li>Isikan NPSN atau Nama Sekolah pada kolom &quot;NPSN/Nama Sekolah&quot;</li>
											<li>Klik &quot;Cari Data&quot;</li>
											<li>Untuk melihat lokasi sekolah yang secara spesifik, anda dapat memilih salah satu sekolah pada tabel data yang tersedia.</li>
										</ol>
								</div>
								
								<div id="akreditasi_container" class="hide">
									<p>Untuk mencari lokasi Sekolah berdasarkan daerah, Anda dapat melakukan langkah-langkah berikut :</p>
											<ol>
												<li>Klik pada Menu &quot;Lokasi Sekolah&quot;, katagori Sub Menu &quot;Berdasarkan Akreditasi&quot;.</li>
												<img src="<?=base_url();?>sknimg/img/gbr5.png"/>
												<li>Pilih sesuai dengan lokasi daerah yang akan anda lihat pada kolom yang tersedia meliputi &quot;Jenjang&quot;, &quot;Status&quot;, &quot;Propinsi&quot;, &quot;Kota/Kabupaten&quot;</li>
												<li>Isikan tingkat akreditasi sekolah pada kolom &quot;Akreditasi&quot;</li>
												<li>Klik &quot;Cari Data&quot;</li>
												<li>Untuk melihat lokasi sekolah yang secara spesifik, anda dapat memilih salah satu sekolah pada tabel data yang tersedia.</li>
											</ol>
								</div>
								<div id="panduanarah_container" class="hide"> 
										<p>Untuk mencari arah jalur ke sekolah, Anda dapat melakukan langkah-langkah berikut:</P>
										<ol >
											<li>Lakukan pencarian lokasi sekolah melalui salah satu metode pencarian sekolah (berdasarkan daerah, NPSN/nama, atau akreditasi).</li>
											<li>Lakukan drag marker berwarna merah pada peta ke arah lokasi keberangkatan</li>
											<li>Lakukan klik pada link "Lakukan pencarian jalur dari lokasi ini" di popup yang muncul</li>
											<li>Apabila berhasil, maka jalur yang dimaksud akan tampil pada bagian &quot;Petunjuk Arah&quot;, dan pada SIAP Peta jalur yang dimaksud akan berwarna biru gelap.</li>
											<li>Untuk mencari jalur dengan lokasi keberangkatan baru, lakukan klik pada tombol reset di bagian bawah petunjuk arah.</li>
											<img width='375' height='234' src="<?=base_url();?>sknimg/img/gbr6.png"/>
										</ol>
										<p>Keterangan Gambar:</P>
										<ol >
											<li>Lokasi Sekolah</li>
											<li>Lokasi Keberangkatan</li>
											<li>Jalur antara Lokasi Sekolah dan Lokasi Keberangkatan</li>
										</ol>
								</div>
							</div>
							
							
						</div>
					<!--end-->
					<noscript><style> 
					.hide {display:block;}
					.nshide {display:none;}
					.anchor {position:relative;}
					</style>  
					</noscript></div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  <!--end content-->
				
          	</div>
				<div style="clear: both"></div>
			
<!-- =========================================== FOOTER =============================================== -->
			</div><!-- end Main -->
		<?php include ('footer.php')?>
	</div><!-- end Wrapper -->
</div><!-- End border -->

</body>
</html>

