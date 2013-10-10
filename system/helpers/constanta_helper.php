<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Helper Constant untuk setting variabel konstant yang terpengaruh dengan environment aplikasi
 * function :
 *  getGmapKey
 */


/*
 * getGmapKey :
 *  Params : 
 *   app_env : aplication environment (development,production and so on)
 *  Return : 
 *   google map key based on environment
 *  Result : 
 *  	-
 */
if ( ! function_exists('getGmapKey')){
	function getGmapKey($app_env){
		if($app_env == 'development'){
			return "ABQIAAAAey9HOzh88xtRQ2mntcfCiBQ3ZgyK6ysGjIRpkSK5a0-ZQBpbMRTSmyiLXPoYwmhvD2k0WX6jVkBx0w";
		}elseif($app_env == 'production'){
			return "ABQIAAAAey9HOzh88xtRQ2mntcfCiBSh18l9FvWHNvRJwUN8Jwe52YKjJhQK9IOo7gCSqEBUffWFtOmavXIGHA";
		}else{
			return "undefined env";
		}
	}	
}
