
	<div class="list">

         <div class="listmenu2"><a>Menu Siap Peta</a></div>
		 <?php if(isset($berandaact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url()?>" >Beranda</a></div>
       	 <?php if(isset($profilact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/tentang'?>">Profil Layanan</a></div>
        <?php if(isset($dataact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/data'?>">Cari Lokasi Sekolah</a></div>

	  	<?php if(isset($dataact)&&isset($daerahact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/data'?>">&#8226;&nbsp;Berdasar Daerah</a></div>
	  	 <?php if(isset($dataact)&&isset($namaact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/carisekolah'?>">&#8226;&nbsp;Berdasar NPSN/Nama</a></div>
	  	 <?php if(isset($dataact)&&isset($akreditasiact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/cariakreditasi'?>">&#8226;&nbsp;Berdasar Akreditasi</a></div>

    	 <?php if(isset($beritaact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/info'?>">Info dan Berita</a></div>
    	 <?php if(isset($pesanact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/pesan'?>" >Pesan Anda</a></div>
    	 <?php if(isset($panduanact)){?><div class="listmenu-on"><?php }else{?><div class="listmenu"><?php }?><a href="<?=base_url().'portal/panduan'?>">Panduan</a></div>

         <div><img src="/siap-peta/sknimg/img/nv-btm.png" width="167" height="30" alt="" /></div>

   <br />
   </div>

   