<?php

class Redirect extends CI_controller {
	
	public function index() {
		$this->pagenotfound();
	}

	public function pagenotfound() {
		echo "404";
	}
}

?>