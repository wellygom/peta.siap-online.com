$(document).ready(function() { 
cari_akreditasi_sekolah("<?=$k_lokasi;?>","<?=$k_jenjang;?>","<?=$k_status;?>","<?=$akreditasi;?>","<?=$hal;?>","<?=$limit;?>");

});
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