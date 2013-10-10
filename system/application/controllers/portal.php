<?php
class Portal extends Controller {

/*
 * Daftar Function :
 * 	Portal
 * 	index
 * 	petaerror
 * 	beritaGetJson
 * 	_thisResult
 * 	data
 * 	tentang
 * 	info
 * 	kirimpesan
 * 	postpesan
 * 	pesan
 * 	pesanGetJson
 * 	panduan
 * 	detilberita
 * 	detilberitaGetJson
 * 	kontak
 * 	daftarSekolah
 * 	daftarSekolahGetJson
 * 	detailSekolahGetJson
 * 	sekolah
 * 	carisekolah
 * 	hasilpencarian
 * 	daftarSekolahKeyGetJson
 * 	cariakreditasi
 * 	hasilakreditasi
 * 	_stringPropinsi
 *  allSekolah
 *  allSekolahGetJson
 *  siapku
 */

	/*CONSTRUCTOR
	 * index :
	 * 	Params : 
	 *  Return :
	 *  Result : 
	 */
	function Portal(){
		parent::Controller();
	}
	
	/*PUBLIC
	 * index :
	 * 	Params : 
	 *  Return :
	 *  Result : 
	 *  	render view index page - beranda
	 */
	function index(){
        $data['GmapKey'] = getGmapKey(getEnvi());
		$data['berandaact'] = TRUE;
		$data['banneract'] = FALSE;
		$this->load->view('beranda',$data);
	}
	
	function beranda($banneract=null){
        $data['GmapKey'] = getGmapKey(getEnvi());
		$data['berandaact'] = TRUE;
		$data['banneract'] = FALSE;
		if('banner'==$banneract){
		    $data['banneract']=TRUE;
		}
		$this->load->view('beranda',$data);
	}
	/*PUBLIC
	 * petaerror :
	 *  Params : 
	 *  Return :
	 *  Result : 
	 *  	render view error page -404 not found
	 */
	function petaerror(){
		$this->load->view('errorpage');
	}
	
	/*PUBLIC
	 * beritaGetJson :
	 *  Params : 
	 *  Return :
	 *  Result : 
	 *  	JSON berita dari engine SIAP
	 */
	function beritaGetJson(){
		$date = date('Y-m');
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineBerita(getEnvi(),$date)));		
	}
	
	/*PUBLIC
	 * jumlahSekolahGetJson :
	 *  Params : 
	 *  Return :
	 *  Result : 
	 *  	JSON jumlah sekolah dari engine SIAP
	 */
	function jumlahSekolahGetJson(){
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineJumlahSekolah(getEnvi())));		
	}
	
	/*PRIVATE
	 * _thisResult :
	 * 	Params : 
	 * 		refer : http referer dari requester
	 * 		result : hasil dari pembacaan JSON engine SIAP
	 * 	Return :
	 * 		result berdasarkan setting allow atau restricted dari API SIAP PETA
	 *  Result :
	 */
	function _thisResult($refer,$result){
		if(AllowAPI()){
			return $result;
		}else{
			if($refer){
				return $result;
			}else{
				return "API SIAP PETA tidak diizinkan untuk live request";
			}
		}
	}
		
	/*PUBLIC
	 * data :
	 * 	Params : 
	 * 		propinsi : propinsi yang akan ditampilkan (default = null)
	 * 	Return :
	 *  Result : 
	 *  	render view untuk form pencarian data sekolah berdasarkan daerah
	 */
	function data($propinsi=null){
		$data['GmapKey'] = getGmapKey(getEnvi());
		if (isset($propinsi)){
			$data['propinsi'] = $propinsi;
			$data['dataact'] = true;
			$data['daerahact'] = true;
			$this->load->view('dataSekolah',$data);
		}else{
			$data['dataact'] = true;
			$data['daerahact'] = true;
			$this->load->view('dataSekolah',$data);	
		}
	}

	/*PUBLIC
	 * tentang :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk profil SIAP PETA
	 */
	function tentang(){
		$data['profilact'] = TRUE;
		$this->load->view('tentang',$data);
	}
	
	/*PUBLIC
	 * info :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk berita SIAP PETA
	 */
	function info(){
		$data['beritaact'] = true;
		$this->load->view('berita',$data);
	}

	/*PUBLIC
	 * kirimpesan :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk kirim pesan SIAP PETA
	 */
	function kirimpesan(){
		$data['pesanact'] = true;
		$this->load->view('kirimpesan',$data);
	}
	
	/*PUBLIC
	 * postpesan :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	Pesan dari hasil post ke engine SIAP
	 */
	function postpesan(){
		$submit_url = getPathEnginePostPesan(getEnvi());
		$filterurl = array('http:','/');
		$submit_vars["dom"] = str_replace($filterurl,'',base_url());
		$submit_vars["mod"] = "20090130145910!";
		$submit_vars["act"] = "insert";
		$submit_vars["ip"]  = $_SERVER['REMOTE_ADDR'];
		$submit_vars["nama"] = $this->input->post('nama');
		$submit_vars["email"] = $this->input->post('email');
		$submit_vars["tanya"] = $this->input->post('tanya');
		$classsnoopy = snoopclass();
		if(snoopy_submit($submit_url,$submit_vars,$classsnoopy)){
			$kembalian=snoopy_results($classsnoopy);
			if(strpos($kembalian,'error')>0){
				echo "Parameter tidak lengkap";
			}else{
				echo "Pesan anda telah terkirim";	
			}		 
		}else echo "error mendapatkan kembalian dari server harap coba lagi : ".snoopy_error($classsnoopy)."\n";
	}

	/*PUBLIC
	 * pesan :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk pesan SIAP PETA
	 */
	function pesan(){
		$data['pesanact'] = true;
		$this->load->view('pesan',$data);
	}
	
	/*PUBLIC
	 * pesanGetJson :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	JSON pesan dari engine SIAP
	 */
	function pesanGetJson(){
		$date = date('Y-m');
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEnginePesan(getEnvi(),$date)));
	}
	
	/*PUBLIC
	 * panduan :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk panduan SIAP PETA
	 */
	function panduan(){
		$data['panduanact'] = true;
		$this->load->view('panduan',$data);
	}
		
	/*PUBLIC
	 * detilberita :
	 * 	Params : 
	 * 		idberita : id berita yang akan ditampilkan di view
	 * 	Return :
	 *  Result : 
	 *  	render view untuk detil berita SIAP PETA
	 */
	function detilberita($idberita){
		$data['beritaact'] = true;
		$data['idberita'] = $idberita;
		$this->load->view('detil_berita',$data);
	}
	
	/*PUBLIC
	 * detilberitaGetJson :
	 * 	Params : 
	 * 		idberita : id dari berita yang akan di ambil json detailnya
	 * 	Return :
	 *  Result : 
	 *  	JSON detil berita dari engine SIAP
	 */
	function detilberitaGetJson($idberita){
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineDetilBerita(getEnvi(),$idberita)));
	}
	
	/*PUBLIC
	 * kontak :
	 * 	Params :
	 * 	Return :
	 *  Result : 
	 *  	render view untuk kontak SIAP PETA
	 */
	function kontak(){
		$this->load->view('kontak');
	}
	
	/*PUBLIC
	 * daftarSekolah :
	 * 	Params : 
	 * 		k_lokasi : kode lokaasi dari sekolah
	 * 		k_jenjang : kode jenjang dari sekolah
	 * 		k_status : kode status dari sekolah
	 * 		k_propinsi : kode propinsi sari sekolah
	 * 	Return :
	 *  Result : 
	 *  	render view untuk hasil pencarian berdasarkan DAERAH SIAP PETA
	 */
	function daftarSekolah($k_lokasi, $k_jenjang, $k_status,$k_propinsi){
	 	$data['GmapKey'] = getGmapKey(getEnvi());		
		$data['limit'] = $this->Daftar_model->getTotalRow(getEnvi(),$k_lokasi, $k_jenjang, $k_status);
		$data['k_lokasi'] = $k_lokasi;
		$data['k_jenjang'] = $k_jenjang;
		$data['k_status'] = $k_status;
		$data['propinsi'] = $this->_stringPropinsi($k_propinsi);
		$data['hal'] = 1;
		$data['dataact'] = true;
		$data['daerahact'] = true;
		$this->load->view('daftarSekolah',$data);
	}
	
	/*PUBLIC
	 * daftarSekolahGetJson :
	 * 	Params : 
	 * 		k_lokasi : kode lokaasi dari sekolah
	 * 		k_jenjang : kode jenjang dari sekolah
	 * 		k_status : kode status dari sekolah
	 * 		hal : halaman dari daftar sekolah
	 * 		limit : limit perhalaman dari daftar sekolah
	 * 	Return :
	 *  Result : 
	 *  	JSON daftar sekolah dari engine SIAP
	 */
	function daftarSekolahGetJson($k_lokasi, $k_jenjang, $k_status,$hal,$limit){
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineDaftarSekolah(getEnvi(),$k_lokasi, $k_jenjang, $k_status,$hal,$limit)));
	}
	
	/*PUBLIC
	 * detailSekolahGetJson :
	 * 	Params : 
	 * 		sekolah_id : id sekolah
	 * 	Return :
	 *  Result : 
	 *  	JSON detail sekolah dari engine SIAP
	 */
	function detailSekolahGetJson($sekolah_id){
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineDetailSekolah(getEnvi(),$sekolah_id)));
	}
	
	/*PUBLIC
	 * sekolah :
	 * 	Params : 
	 * 		sekolah_id : id sekolah
	 * 	Return :
	 *  Result : 
	 *  	render view untuk sekolah SIAP PETA
	 */
	function sekolah($sekolah_id){
	 	$data['GmapKey'] = getGmapKey(getEnvi());
		$data['sekolah_id'] = $sekolah_id;
		$this->load->view('viewSekolah',$data);
	}
	
	/*PUBLIC
	 * carisekolah :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk form pencarian berdasarkan lokasi dan nama pada SIAP PETA
	 */
	function carisekolah(){
		$data['GmapKey'] = getGmapKey(getEnvi());
		$data['dataact'] = true;
		$data['namaact'] = true;
		$this->load->view('carisekolah',$data);
	}

	/*PUBLIC
	 * hasilpencarian :
	 * 	Params : 
	 * 		k_lokasi : kode lokaasi dari sekolah
	 * 		k_jenjang : kode jenjang dari sekolah
	 * 		k_propinsi : kode propinsi sari sekolah
	 * 		key : nama sekolah
	 * 	Return :
	 *  Result : 
	 *  	render view untuk hasil pencarian berdasarkan lokasi dan nama pada SIAP PETA
	 */
	function hasilpencarian($key){
	 	$data['GmapKey'] = getGmapKey(getEnvi());
		$key = urlencode($key);
		$data['limit'] = $this->Daftar_model->getTotalRowAll(getEnvi(),$key);
		$data['hal'] = 1;
		$data['dataact'] = true;
		$data['namaact'] = true;
		$data['key'] = $key;
		$this->load->view('hasilpencarian',$data);
	}
	
	/*PUBLIC
	 * daftarSekolahKeyGetJson :
	 * 	Params : 
	 * 		k_lokasi : kode lokaasi dari sekolah
	 * 		k_jenjang : kode jenjang dari sekolah
	 * 		key : nama sekolah yang sudah url encode
	 * 		hal : halaman dari daftar sekolah
	 * 		limit : limit perhalaman dari daftar sekolah
	 * 	Return :
	 *  Result : 
	 *  	JSON Daftar sekolah berdasarkna nama dan lokasi dari engine SIAP
	 */
	function daftarSekolahKeyGetJson($k_lokasi, $k_jenjang,$key,$hal,$limit){
		$key = urlencode($key);
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineDaftarSekolahKey(getEnvi(),$k_lokasi, $k_jenjang,$key,$hal,$limit)));
	}
	
	/*PUBLIC
	 * daftarSekolahAllGetJson
	 *  params:
	 *  	key : nama sekolah yang sudah url encode
	 * 		hal : halaman dari daftar sekolah
	 * 		limit : limit perhalaman dari daftar sekolah
	 *  Return :
	 *  Result :
	 *  	JSON Daftar sekolah berdasarkan nama dan NPSN dari engine SIAP
	 */
	function daftarSekolahAllGetJson($key,$hal,$limit){
		$key = urlencode($key);
		echo $this->_thisResult($_SERVER['HTTP_REFERER'],read_url(getPathEngineAllSekolah(getEnvi(),$key,$hal,$limit)));
	}
	
	/*PUBLIC
	 * cariakreditasi :
	 * 	Params : 
	 * 	Return :
	 *  Result : 
	 *  	render view untuk form pencarian berdasarkan lokasi dan akreditasi pada SIAP PETA
	 */
	function cariakreditasi(){
	 	$data['GmapKey'] = getGmapKey(getEnvi());
		$data['dataact'] = true;
		$data['akreditasiact'] = true;
		$this->load->view('cariakreditasi',$data);
	}
	
	/*PUBLIC
	 * hasilakreditasi :
	 * 	Params : 
	 * 		k_lokasi : kode lokaasi dari sekolah
	 * 		k_jenjang : kode jenjang dari sekolah
	 * 		k_status : kode status dari sekolah
	 * 		k_propinsi : kode propinsi sari sekolah
	 * 		akreditasi : akreditasi sekolah
	 * 	Return :
	 *  Result : 
	 *  	render view untuk hasil pencarian berdasarkan lokasi dan akreditasi pada SIAP PETA
	 */
	function hasilakreditasi($k_lokasi, $k_jenjang, $k_status,$k_propinsi,$akreditasi){
		$data['GmapKey'] = getGmapKey(getEnvi());
		$data['limit'] = $this->Daftar_model->getTotalRow(getEnvi(),$k_lokasi, $k_jenjang, $k_status);
		$data['k_lokasi'] = $k_lokasi;
		$data['k_jenjang'] = $k_jenjang;
		$data['k_status'] = $k_status;
		$data['propinsi'] = $this->_stringPropinsi($k_propinsi);
		$data['akreditasi'] = $akreditasi;
		$data['hal'] = 1;
		$data['dataact'] = true;
		$data['akreditasiact'] = true;
		$this->load->view('hasilakreditasi',$data);
	}
	

	/*PRIVATE
	 * _stringPropinsi :
	 * 	Params : 
	 * 		propinsi : kode propinsi
	 * 	Return :
	 * 		String propinsi berdasarkan kode propinsi
	 *  Result :
	 */
	function _stringPropinsi($k_propinsi){
		$stringPropinsi="";
		switch ($k_propinsi){
			case "101" : $stringPropinsi= "Nanggroe Aceh Darussalam";break;
			case "102" : $stringPropinsi= "Sumatera Utara";break;
			case "103" : $stringPropinsi= "Sumatera Barat";break;
			case "104" : $stringPropinsi= "Riau";break;
			case "105" : $stringPropinsi= "Jambi";break;
			case "106" : $stringPropinsi= "Sumatera Selatan";break;
			case "107" : $stringPropinsi= "Bengkulu";break;
			case "108" : $stringPropinsi= "Lampung";break;
			case "109" : $stringPropinsi= "Kepulauan Bangka Belitung";break;
			case "110" : $stringPropinsi= "Kepulauan Riau";break;

			case "201" : $stringPropinsi= "DKI Jakarta";break;
			case "202" : $stringPropinsi= "Jawa Barat";break;
			case "203" : $stringPropinsi= "Jawa Tengah";break;
			case "204" : $stringPropinsi= "DI Yogyakarta";break;
			case "205" : $stringPropinsi= "Jawa Timur";break;
			case "206" : $stringPropinsi= "Banten";break;

			case "301" : $stringPropinsi= "Kalimantan Barat";break;
			case "302" : $stringPropinsi= "Kalimantan Tengah";break;
			case "303" : $stringPropinsi= "Kalimantan Selatan";break;
			case "304" : $stringPropinsi= "Kalimantan Timur";break;


			case "401" : $stringPropinsi= "Sulawesi Utara";break;
			case "402" : $stringPropinsi= "Sulawesi Selatan";break;
			case "403" : $stringPropinsi= "Sulawesi Tenggara";break;
			case "404" : $stringPropinsi= "Sulawesi Barat";break;

			case "501" : $stringPropinsi= "Bali";break;
			case "502" : $stringPropinsi= "Nusa Tenggara Barat";break;
			case "503" : $stringPropinsi= "Nusa Tenggara Timur";break;

			case "601" : $stringPropinsi= "Maluku";break;
			case "602" : $stringPropinsi= "Maluku Utara";break;
			case "603" : $stringPropinsi= "Papua";break;
			case "604" : $stringPropinsi= "Irian Jaya Barat";
		}
		return $stringPropinsi;
	}
	
	/*PUBLIC
	 * siapku :
	 * 	Params : 
	 * 		lat
	 * 		lng
	 * 		siapkuname
	 *  Return :
	 *  Result : 
	 *  	render view halaman untuk pengguna siapku
	 */
	function siapku($lat=null,$lng=null,$siapkuname=null){
		if($_SERVER['HTTP_REFERER']){
      		$data['GmapKey'] = getGmapKey(getEnvi());
      		if(($lat==NULL||$lng==NULL)||$siapkuname==NULL){
      			$data['lat'] = "-7.855219";
      			$data['lng'] ="112.692003";
      			$data['siapkuname'] ="hendra";
      		}else{
      			$data['lat'] = $lat;
      			$data['lng'] =$lng;
      			$data['siapkuname'] =$siapkuname;	
      		}
      		$this->load->view('siapku',$data);
		}else{
			$this->load->view('errorpage');
		}
		
	}
	
	function allSekolahEngine($key,$hal,$limit){
		$key = urlencode($key);
		echo read_url(getPathEngineAllSekolah(getEnvi(),$key,$hal,$limit));
	}
}
