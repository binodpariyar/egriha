<?php 

if(!function_exists('admin_url')){

	function admin_url($path=false){
		if($path){
			return base_url().'admin/'.$path;
		}else{
			return base_url().'admin/';			
		}
	}
}

if(!function_exists('admin_assets')){

	function admin_assets($path){
		return base_url().'assets/'.$path;
	}
}

if(!function_exists('convert_numbers')){
	function convert_numbers($string) {
		$nepali = array("०","१","२","३","४","५","६","७","८","९");
		$num = array("0","1","2","3","4","5","6","7","8","9");
		return str_replace($num, $nepali, $string);
	}
}

if(!function_exists('convert_date')){
	function convert_date($string) {
		$nep = "";
		for($i=0;$i<strlen($string);$i++) {
			// echo convert_numbers($string[$i]);
			$nep .= convert_numbers($string[$i]);
		}
		return $nep;
	}
}

if(!function_exists('front_assets')){

	function front_assets($path){
		return base_url().'front_assets/'.$path;
	}
}

if(!function_exists('debug')) {

	function debug($data){
		$dub = debug_backtrace();
		echo '<style>code, pre {
			font: normal 13px/18px Consolas, "Courier New", Courier, monospace;
			background: #E8EBEC url("../images/pre-bg.gif") repeat 0 0;
			padding: 18px 5px;
			border: 1px dotted #BBB;
			color: #333;
			border-image: initial;
		}</style>';
		
		echo '<pre><span  style="color:blue">';
		echo $dub[0]['file'] . "<br/>On Line Number ";
		echo $dub[0]['line'] . "<br/></span>";
		print_r($data);

		echo '</pre>';
	}
}

function my_url($path = false){
	$CI =& get_instance();
	$config = array("np" => "nepali", "en" => "english");
	$aff = $CI->uri->segment(1);
	if($aff){
		if(!array_key_exists($aff, $config)){
			$aff = 'en';
		}
	}else {
		$aff = 'en';
	}
	if($path){
		return base_url().$aff.'/'.$path;
	}else{
		return base_url().$aff.'/';
	}
}


function lang($word){
	$CI =& get_instance();
	$config = array("np" => "nepali", "en" => "english");
	$aff = $CI->uri->segment(1);
	if($aff){
		if(!array_key_exists($aff, $config)){
			$aff = 'en';
		}
	}else{
		$aff = 'en';
	}
	$CI->lang->load("message",$config[$aff]);
	return $CI->lang->line($word);
}


function get_property_type($type){
	switch ($type) {
		case 1:
		return 'Home';
		break;
		case 2:
		return 'Appartment';
		break;
		case 3:
		return 'Land';
		break;

		default:
				# code...
		break;
	}
}

function get_for_type($for){
	switch ($for) {
		case 1:
		return 'Rent';
		break;
		case 2:
		return 'Sell';
		break;
	}
}