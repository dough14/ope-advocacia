<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( !function_exists('getSearch') ){
	function getSearch(){
		$html = '<li class="search-box">
					<form action="'.base_url('search').'" class="sidebar-search">
						<div class="form-group">
							<input type="text" placeholder="Buscar..." name="search">
							<button class="submit">
								<i class="clip-search-3"></i>
							</button>
						</div>
					</form>
				</li>';
		
		return $html;
	}
}

?>