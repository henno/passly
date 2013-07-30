<?php

class newsarticles {
	function index(){
		global $request;
		global $auth;
		require __DIR__ .'/../views/master_view.php';
	}
}