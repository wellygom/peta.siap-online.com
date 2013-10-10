<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Daftar_model extends Model{
	function getTotalRow($envi,$k_lokasi, $k_jenjang, $k_status){
		$this->load->helper('file');
		$this->load->helper('engine');
		$this->load->helper('json');
		$daftar = read_url(getPathEngineDaftarSekolah($envi,$k_lokasi, $k_jenjang, $k_status,1,1));
		$data = json_decode($daftar);
		$detail= ToArray($data);
		$totalrow = $detail['totalrow'];		
		return $totalrow;
	}
	
	function getTotalRowKey($envi,$k_lokasi, $k_jenjang,$key){
		$this->load->helper('file');
		$this->load->helper('engine');
		$this->load->helper('json');
		$daftar = read_url(getPathEngineDaftarSekolahKey($envi,$k_lokasi, $k_jenjang,$key,1,1));
		$data = json_decode($daftar);
		$detail= ToArray($data);
		$totalrow = $detail['totalrow'];		
		return $totalrow;
	}
	
	function getTotalRowAll($envi,$key){
		$this->load->helper('file');
		$this->load->helper('engine');
		$this->load->helper('json');
		$daftar = read_url(getPathEngineAllSekolah($envi,$key,1,1));
		$data = json_decode($daftar);
		$detail= ToArray($data);
		$totalrow = $detail['totalrow'];		
		return $totalrow;
	}
}