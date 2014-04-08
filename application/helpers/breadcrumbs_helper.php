<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( !function_exists('generateBreadcrumbs') ){
	function generateBreadcrumbs($fragments = NULL){
		if( empty($fragments) || !is_array($fragments) ) return NULL;
		
		$html = '';
		
		if( count($fragments) > 0 ){
			foreach($fragments as $breadcrumb){
				if( isset($breadcrumb['active']) && $breadcrumb['active'] ) $html .= '<li class="active">'.$breadcrumb['label'].'</li>';
				else $html .= '<li><a href="'.$breadcrumb['url'].'">'.$breadcrumb['label'].'</a></li>';
			}
		}
		
		return $html;
	}
}

?>