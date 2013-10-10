<?php include("header.php"); ?>
<script type="text/javascript">
function nav(){
	$("div.panduan-nv ul li").mouseover(function() {
			$(this).find('ul:first').show();
	});

	$("div.panduan-nv ul li").mouseleave(function() {
		$("div.panduan-nv ul li ul").hide();
	});

	$("div.panduan-nv ul li ul").mouseleave(function() {
		$("div.panduan-nv ul li ul").hide();
	});

};
$(document).ready(function(){
	nav();
	$('.simpan').click(function(){$('.isi_simpan').show();$('.isi_tampilan').hide();$('.isi_navi').hide();$('.isi_geser').hide();$('.isi_besar').hide(); $('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_akre').hide();$('.isi_arah').hide();});	
	$('.tampilan').click(function(){$('.isi_tampilan').show();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_geser').hide();$('.isi_besar').hide();$('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_akre').hide();$('.isi_arah').hide();});
	$('.navi').click(function(){$('.isi_navi').show();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_geser').hide();$('.isi_besar').hide();$('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_akre').hide();$('.isi_arah').hide();});
	$('.geser').click(function(){$('.isi_geser').show();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_besar').hide();$('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_akre').hide();$('.isi_arah').hide();});
	$('.besar').click(function(){$('.isi_besar').show();$('.isi_geser').hide();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_akre').hide();$('.isi_arah').hide();});
	$('.daerah').click(function(){$('.isi_daerah').show();$('.isi_geser').hide();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_besar').hide();$('.isi_nama').hide();$('.isi_akre').hide();$('.isi_arah').hide();});
	$('.nama').click(function(){$('.isi_nama').show();$('.isi_geser').hide();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_besar').hide();$('.isi_daerah').hide();$('.isi_akre').hide();$('.isi_arah').hide();});
	$('.akre').click(function(){$('.isi_akre').show();$('.isi_geser').hide();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_besar').hide();$('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_arah').hide();});	
	$('.arah').click(function(){$('.isi_arah').show();$('.isi_geser').hide();$('.isi_tampilan').hide();$('.isi_simpan').hide();$('.isi_navi').hide();$('.isi_besar').hide();$('.isi_daerah').hide();$('.isi_nama').hide();$('.isi_akre').hide();});
	
});
</script>

</head>

<body style="padding:0; margin:0;" >
<div id="border">
	<div id="wrapper">
		<div id="header">
			<?php include("header_body.php")?>
		</div>
		<div id="main">
			
           <div id="navigation">
   				<!-- List Menu -->
   				<?php include("menu.php"); ?>
   		   </div>
		   
            <div id="content">
                <div class="content-isi">
                    <h2>&nbsp;Panduan&nbsp;SIAP&nbsp;Peta</h2>

                <div class="panduan">
                    <div>
                        <div class="news-bdr">
                            <div class="r">
                                <div class="m">
                            
                                    <div class="panduan-nv">
                                        <ul>
                                            <li class="simpan"><a href="#">Menyimpan Lokasi Sekolah Anda</a></li>
                                        	<li class="tampilan"><a href="#">Mode Tampilan</a></li>
                                            <li class="nav"><a href="#">Navigasi SIAP PETA</a>
                                            	<ul class="submenu">
                                            	<li class="navi"><a href="#">Tombol Navigasi</a></li>
                                            	<li class="geser"><a href="#">Menggeser Peta</a></li>
                                            	<li class="besar"><a href="#">Memperbesar Tampilan</a></li>
                                            	</ul>
                                        	</li>
                                            <li class="car"><a href="#">Pencarian Sekolah</a>
												<ul class="submenu">
                                            	<li class="daerah"><a href="#">Berdasar Daerah</a></li>
                                            	<li class="nama"><a href="#">Berdasar NPSN/Nama</a></li>
                                            	<li class="akre"><a href="#">Berdasar Akreditasi</a></li>
                                            	</ul>
											</li>	
                                            <li class="arah"><a href="#">Pencarian Arah</a></li>
                                        </ul>
                                </div>
								
								<div class="isi_simpan">
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
									
									<p>Setelah mendapatkan koordinat lokasi sekolah Anda, untuk menyimpan lokasi sekolah anda pada SIAP PETA anda melakukan langkah-langkah sebagai berikut:
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
												<li>Klik pada tombol &quot;Simpan&quot;.</li></ol></p>
								</div>
								<div class="isi_tampilan" style="display:none;">
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
								<div class="isi_navi" style="display:none;">
									<img style="width:90px;height:150px" border='1' src="<?=base_url();?>sknimg/img/Tombolpanduan.jpg"/>
												<p>Keterangan Gambar:
												<ol>
												<li>Tombol Arah digunakan untuk menggerakkan peta (atas untuk arah utara, bawah untuk arah selatan, kiri untuk arah barat, kanan untuk arah timur).</li>
												<li>Tombol Zoom digunakan untuk memfokuskan dan memperluas tampilan.Tombol “+” berguna untuk memfokuskan tampilan, dan tombol “-” berfungsi untuk kembali ke tampilan yang lebih luas.</li>
												<li>Scroll Zoom berguna untuk memfokuskan dan memperluas tampilan secara terukur.dengan ketentuan scroll ke depan untuk memfokuskan tampilan suatu daerah (memperbesar), dan scroll ke belakang untuk kembali ke tampilan yang lebih luas.</li>
												</ol></p>
								</div>
								<div class="isi_geser" style="display:none;">
									<p>Untuk melakukan penggeseran pada tampilan peta, pengguna dapat menggunakan 3 metode:
											<ol>
												<li>Menekan tombol arah pada keyboard untuk  menggerakkan peta (atas untuk arah utara, bawah untuk arah selatan, kiri untuk arah barat, kanan untuk arah timur).</li>
												<li>Melakukan klik pada empat kursor arah yang terdapat pada tombol arah di bagian kiri atas tampilan peta.</li>
												<li>Melakukan klik di daerah manapun pada tampilan peta, lalu menahannya sambil menggeser mouse ke arah yang diinginkan.</li>
											</ol></p>
								</div>
								<div class="isi_besar" style="display:none;">
									<p>Untuk melakukan pembesaran pada tampilan SIAP Peta, pengguna dapat melakukan dua metode:
										<ol>
												<li>Menggunakan tombol “+” dan “-” yang terletak di bagian kiri tampilan peta. Tombol “+” berguna untuk memfokuskan tampilan, dan tombol “-” berfungsi untuk kembali ke tampilan yang lebih luas.</li>
												<li>Melakukan klik pada tombol geser dan menggesernya ke atas atau bawah.</li>
												<li>Melakukan scroll pada mouse, dengan ketentuan scroll ke depan untuk memfokuskan tampilan suatu daerah (memperbesar), dan scroll ke belakang untuk kembali ke tampilan yang lebih luas.</li>
										</ol></p>	
								</div>
								<div class="isi_daerah" style="display:none;">
									<p>Untuk mencari lokasi Sekolah berdasarkan daerah, Anda dapat melakukan langkah-langkah berikut :
											<ol>
												<li>Klik pada Menu &quot;Lokasi Sekolah&quot;, katagori Sub Menu &quot;Berdasarkan Daerah&quot;</li>
												<img src="<?=base_url();?>sknimg/img/gbr3.png"/>
												<li>Pilih sesuai dengan lokasi daerah yang akan anda lihat pada kolom yang tersedia meliputi &quot;Jenjang&quot;, &quot;Status&quot;, &quot;Propinsi&quot;, &quot;Kota/Kabupaten&quot;</li>
												<li>Klik &quot;Cari Data&quot;</li>
												<li>Untuk melihat lokasi sekolah yang secara spesifik, anda dapat memilih salah satu sekolah pada tabel data yang tersedia.</li>
												
											</ol></p>
								</div>
								<div class="isi_nama" style="display:none;">
									<p>Untuk mencari lokasi Sekolah berdasarkan NPSN/Nama, Anda dapat melakukan langkah-langkah berikut :
										<ol>
											<li>Klik pada Menu &quot;Lokasi Sekolah&quot;, katagori Sub Menu &quot;Berdasarkan NPSN/Nama&quot;</li>
											<img src="<?=base_url();?>sknimg/img/gbr4.png"/>
											<li>Pilih sesuai dengan lokasi daerah yang akan anda lihat pada kolom yang tersedia meliputi &quot;Jenjang&quot;,&quot;Propinsi&quot;, &quot;Kota/Kabupaten&quot;</li>
											<li>Isikan NPSN atau Nama Sekolah pada kolom &quot;NPSN/Nama Sekolah&quot;</li>
											<li>Klik &quot;Cari Data&quot;</li>
											<li>Untuk melihat lokasi sekolah yang secara spesifik, anda dapat memilih salah satu sekolah pada tabel data yang tersedia.</li>
										</ol></p>
								</div>
								<div class="isi_akre" style="display:none;">
									<p>Untuk mencari lokasi Sekolah berdasarkan akreditasi, Anda dapat melakukan langkah-langkah berikut :
											<ol>
												<li>Klik pada Menu &quot;Lokasi Sekolah&quot;, katagori Sub Menu &quot;Berdasarkan Akreditasi&quot;.</li>
												<img src="<?=base_url();?>sknimg/img/gbr5.png"/>
												<li>Pilih sesuai dengan lokasi daerah yang akan anda lihat pada kolom yang tersedia meliputi &quot;Jenjang&quot;, &quot;Status&quot;, &quot;Propinsi&quot;, &quot;Kota/Kabupaten&quot;</li>
												<li>Isikan tingkat akreditasi sekolah pada kolom &quot;Akreditasi&quot;</li>
												<li>Klik &quot;Cari Data&quot;</li>
												<li>Untuk melihat lokasi sekolah yang secara spesifik, anda dapat memilih salah satu sekolah pada tabel data yang tersedia.</li>
											</ol></p>
								</div>
								<div class="isi_arah" style="display:none;">
									<p>Untuk mencari arah jalur ke sekolah, Anda dapat melakukan langkah-langkah berikut:
										<ol >
											<li>Lakukan pencarian lokasi sekolah melalui salah satu metode pencarian sekolah (berdasarkan daerah, NPSN/nama, atau akreditasi).</li>
											<li>Lakukan drag marker berwarna merah pada peta ke arah lokasi keberangkatan</li><br>
											<img style="margin-bottom:10px;" width='400' height='213px' src="<?=base_url();?>sknimg/img/gbr10.png"/><br>
											<li>Lakukan klik pada link "Cari jalur ke Sekolah dari lokasi ini" di popup yang muncul</li><br>
											<img style="margin-bottom:10px;" width='400px' height='213px' src="<?=base_url();?>sknimg/img/gbr11.png"/><br>
											<li>Apabila berhasil, maka jalur yang dimaksud akan tampil pada bagian &quot;Petunjuk Arah&quot;, dan pada SIAP Peta jalur yang dimaksud akan berwarna biru gelap.</li><br>
											<img style="margin-bottom:10px;" width='400' height='213px' src="<?=base_url();?>sknimg/img/gbr6.png"/><br>
											<li>Untuk mencari jalur dengan lokasi keberangkatan baru, lakukan klik pada tombol reset di bagian bawah petunjuk arah.</li>
											<img  style="margin-bottom:10px;" width='243px' height='400px' src="<?=base_url();?>sknimg/img/gbr12.png"/><br>
										</ol></P>
										
								</div>
                            </div>
                        </div>
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