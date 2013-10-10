function cari_sekolah(k_lokasi,k_jenjang,k_status,hal,limit){

$(".tablesorter").append("<thead> <tr align='center' ><th width=\"90\">NPSN</th><th width=\"350\" >Nama</th><th width=\"380\" >Alamat</th><th width=\"200\">Keterangan</th></tr></thead><tbody>");
 var no=1;
  var lokasi = "";
		$.getJSON("/portal/daftarSekolahGetJson/"+k_lokasi+"/"+k_jenjang+"/"+k_status+"/"+hal+"/"+limit+"/",     		
		function(data){
          $.each(data.list, function(i,item){
			$.getJSON("/portal/detailSekolahGetJson/"+item.sekolah_id+"/",     		
			function(detail){
					call(no,limit);
					lokasi = "<div class=\"button-wrapl\"><div class=\"sider\"> <a class=\"input-button\" href=\"/portal/sekolah/"+item.sekolah_id+"/\">Lokasi Sekolah</a></div></div>";
			  		if (no % 2 == 0) {
						$(".tablesorter").append("<tr align='center'><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}else{
						$(".tablesorter").append("<tr align='center' ><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
			  		call(no,limit);
			});
          });
            $(".tablesorter").append("</tbody>");
		 });
		
}

function cari_keysekolah(k_lokasi,k_jenjang,key,hal,limit){
	$(".tablesorter").append("<thead> <tr align='center'><th width=\"90\">NPSN</th><th width=\"300\" >Nama</th><th width=\"380\" >Alamat</th><th width=\"200\">Keterangan</th></tr></thead><tbody>");
  var no=1;
  var lokasi = "";
		$.getJSON("/portal/daftarSekolahKeyGetJson/"+k_lokasi+"/"+k_jenjang+"/"+urlencode(key)+"/"+hal+"/"+limit+"/",     		
		function(data){
          $.each(data.list, function(i,item){
			$.getJSON("/portal/detailSekolahGetJson/"+item.sekolah_id+"/",     		
			function(detail){
				call(no,limit);
				lokasi = "<div align=\"center\" class=\"button-wrapl\"><div class=\"sider\"><a class=\"input-button\" href=\"/portal/sekolah/"+item.sekolah_id+"/\">Lokasi Sekolah</a>";
				if (no % 2 == 0) {
						
							$(".tablesorter").append("<tr align='center' ><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
					else{
						
							$(".tablesorter").append("<tr align='center' ><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
					call(no,limit);
			});
          });
            $(".tablesorter").append("</tbody>");
        });
		
}

function cari_allsekolah(key,hal,limit){
	$(".tablesorter").append("<thead> <tr align='center'><th width=\"90\">NPSN</th><th width=\"300\" >Nama</th><th width=\"380\" >Alamat</th><th width=\"200\">Keterangan</th></tr></thead><tbody>");
  var no=1;
  var lokasi = "";
		$.getJSON("/portal/daftarSekolahAllGetJson/"+urlencode(key)+"/"+hal+"/"+limit+"/",     		
		function(data){
          $.each(data.list, function(i,item){
			$.getJSON("/portal/detailSekolahGetJson/"+item.sekolah_id+"/",     		
			function(detail){
				call(no,limit);
				lokasi = "<div align=\"center\" class=\"button-wrapl\"><div class=\"sider\"><a class=\"input-button\" href=\"/portal/sekolah/"+item.sekolah_id+"/\">Lokasi Sekolah</a>";
				if (no % 2 == 0) {
						
							$(".tablesorter").append("<tr align='center' ><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
					else{
						
							$(".tablesorter").append("<tr align='center' ><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
					call(no,limit);
			});
          });
            $(".tablesorter").append("</tbody>");
        });
		
}

function cari_akreditasi_sekolah(k_lokasi,k_jenjang,k_status,akreditasi,hal,limit){
	
$(".tablesorter").append("<thead> <tr align='center'><th width=\"90\">NPSN</th><th width=\"300\" >Nama</th><th width=\"380\" >Alamat</th><th width=\"200\">Keterangan</th></tr></thead><tbody>");
  var no=1;
  var lokasi = "";
		$.getJSON("/portal/daftarSekolahGetJson/"+k_lokasi+"/"+k_jenjang+"/"+k_status+"/"+hal+"/"+limit+"/",     		
		function(data){
          $.each(data.list, function(i,item){
			$.getJSON("/portal/detailSekolahGetJson/"+item.sekolah_id+"/",     		
			function(detail){
				call(no,limit);
				if(detail.akreditasi==akreditasi){
					lokasi = "<div align=\"center\" class=\"button-wrapl\"><div class=\"sider\"><a class=\"input-button\" href=\"/portal/sekolah/"+item.sekolah_id+"/\">Lokasi Sekolah</a>";
					if (no % 2 == 0) {
						
						$(".tablesorter").append("<tr align='center'><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
					else{
							$(".tablesorter").append("<tr align='center'><td >" + item.sekolah_id + "</td><td>" + item.nama + "</td><td >" + detail.alamat + "</td><td>" + lokasi + "</td></tr>");
						no++;
					}
				}
				call(no,limit);
						
			});
			  });
          $(".tablesorter").append("</tbody>");
          });
		
}

function call(no,limit){
	limit = parseInt(limit);
	limit=limit+1;
	
	if(no == limit){

		$(function() {			
			$("table").tablesorter({widthFixed: true, widgets: ['zebra']});
		});
	}
}

function urlencode(str) {
	return escape(str).replace('+', '%20').replace('*', '%2A').replace('/', '%2F').replace('@', '%40');
}