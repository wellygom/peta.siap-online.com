<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if(function_exists('snoopy_submit')) {
  return;
}else {
	if (!class_exists('Snoopy')){
  		require_once('SNOOP.php');
  	}
  	
  	function snoopclass(){
  	 $snoopy = new Snoopy();
  	 return $snoopy;
  	}
  	
  	function snoopy_submit($submit_url,$submit_vars,$classsnoopy){
  		return $classsnoopy->submit($submit_url,$submit_vars);
  	}
  
	function snoopy_results($classsnoopy){
  		return $classsnoopy->results;
  	}
  
  	function snoopy_error($classsnoopy){
  		return $classsnoopy->error;
  	}
}
 