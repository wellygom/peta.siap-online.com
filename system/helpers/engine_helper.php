<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getEnvi')){
	function getEnvi(){
		return getenv('APP_ENV');
	}
}

if ( ! function_exists('AllowAPI')){
	function AllowAPI(){
		$API_ALLOW = getenv('API_ALLOW');
		if($API_ALLOW == 'restricted'){
			return false;
		}elseif($API_ALLOW == 'allow'){
			return true;
		}
	}
}


if ( ! function_exists('getPathEngineDaftarSekolah')){
	function getPathEngineDaftarSekolah($app_env,$k_lokasi, $k_jenjang, $k_status,$hal,$limit){
		if($app_env == 'development'){
			$url = "http://192.168.1.45/cgi-bin/psp/sekolah.psp?action=searchsekolahstatus&json={%22k_lokasi%22:%20$k_lokasi,%22k_jenjang%22:%20$k_jenjang,%22k_status%22:%20%22$k_status%22,%22key%22:%20%22%22,%22halaman%22:%20$hal,%22limit%22:%20$limit,%22user_id%22:1231}";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://10.2.0.10/cgi-bin/psp/sekolah.psp?action=searchsekolahstatus&json={%22k_lokasi%22:%20$k_lokasi,%22k_jenjang%22:%20$k_jenjang,%22k_status%22:%20%22$k_status%22,%22key%22:%20%22%22,%22halaman%22:%20$hal,%22limit%22:%20$limit,%22user_id%22:1231}";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEngineDaftarSekolahKey')){
	function getPathEngineDaftarSekolahKey($app_env,$k_lokasi, $k_jenjang,$key,$hal,$limit){
		if($app_env == 'development'){
			$url = "http://192.168.1.45/cgi-bin/psp/sekolah.psp?action=searchsekolahstatus&json={%22k_lokasi%22:%20$k_lokasi,%22k_jenjang%22:%20$k_jenjang,%22k_status%22:%20%22x%22,%22key%22:%20%22$key%22,%22halaman%22:%20$hal,%22limit%22:%20$limit,%22user_id%22:1231}";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://10.2.0.10/cgi-bin/psp/sekolah.psp?action=searchsekolahstatus&json={%22k_lokasi%22:%20$k_lokasi,%22k_jenjang%22:%20$k_jenjang,%22k_status%22:%20%22x%22,%22key%22:%20%22$key%22,%22halaman%22:%20$hal,%22limit%22:%20$limit,%22user_id%22:1231}";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEngineDetailSekolah')){
	function getPathEngineDetailSekolah($app_env,$sekolah_id){
		if($app_env == 'development'){
			$url = "http://api.siap-devel.com/?data=detail_sekolah&npsn=$sekolah_id";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://api.siap-online.com/?data=detail_sekolah&npsn=$sekolah_id";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEnginePesan')){
	function getPathEnginePesan($app_env,$date){
		if($app_env == 'development'){
			$url = "http://csms.siap-devel.com/cms2/api/csms_gb.php?dom=peta.siap-devel.com&mod=20090130145910&act=getdata&date=$date";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://csms.siap-online.com/cms2/api/csms_gb.php?dom=peta.siap-online.com&mod=20090130145910&act=getdata&date=$date";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEngineBerita')){
	function getPathEngineBerita($app_env,$date){
		if($app_env == 'development'){
			$url = "http://csms.siap-devel.com/cms2/api/csms_news.php?dom=peta.siap-devel.com&mod=20090130145904&act=index&date=$date&mdate=0";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://csms.siap-online.com/cms2/api/csms_news.php?dom=peta.siap-online.com&mod=20090130145904&act=index&date=$date&mdate=0";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEngineDetilBerita')){
	function getPathEngineDetilBerita($app_env,$idberita){
		if($app_env == 'development'){
			$url = "http://csms.siap-devel.com/cms2/api/csms_news.php?dom=peta.siap-devel.com&mod=20090130145904&act=detil&id=$idberita&cmdate=0";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://csms.siap-online.com/cms2/api/csms_news.php?dom=peta.siap-online.com&mod=20090130145904&act=detil&id=$idberita&cmdate=0";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEnginePostPesan')){
	function getPathEnginePostPesan($app_env){
		if($app_env == 'development'){
			$url = "http://csms.siap-devel.com/cms2/api/csms_gb.php";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://csms.siap-online.com/cms2/api/csms_gb.php";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEngineJumlahSekolah')){
	function getPathEngineJumlahSekolah($app_env){
		if($app_env == 'development'){
			$url = "http://192.168.1.45/cgi-bin/psp/sekolah.psp?action=rekapsekolahjenjang&json={}";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://10.2.0.10/cgi-bin/psp/sekolah.psp?action=rekapsekolahjenjang&json={}";
			return $url;
		}
	}
}

if ( ! function_exists('getPathEngineAllSekolah')){
	function getPathEngineAllSekolah($app_env,$key,$hal,$limit){
		if($app_env == 'development'){
			$url = "http://192.168.1.45/cgi-bin/psp/sekolah.psp?action=searchsekolah&json={%22k_lokasi%22:%200,%22k_jenjang%22:%200,%22key%22:%20%22$key%22,%22halaman%22:%20$hal,%22limit%22:%20$limit,%22user_id%22:1234}";
			return $url;
		}elseif($app_env == "production"){
			$url = "http://10.2.0.10/cgi-bin/psp/sekolah.psp?action=searchsekolah&json={%22k_lokasi%22:%200,%22k_jenjang%22:%200,%22key%22:%20%22$key%22,%22halaman%22:%20$hal,%22limit%22:%20$limit,%22user_id%22:1234}";
			return $url;
		}
	}
}
