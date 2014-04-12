<?php 

define('tportfolio', 'template/template_portfolio', true);
define('tdefault', 'template/default', true);


class Main extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    // Your own constructor code
	    $this->load->model('projects', 'p');
	}

	public function index() {
		$this->portfolio();
	}

	public function portfolio() {
		$data['template'] = "portfolio";
		$data['title'] = "My Portfolio - Besingamk";

		$this->load->view(tportfolio, $data);
	}

	public function jsonprojects() {
		header("Content-Type: text/javascript");

		//print_r($this->p->populatejSon());

		$projects = array();

		foreach ($this->p->populatejSon() as $project) {
			$projects[] = $project;
		}

		//print_r($projects);

		// $testjson = array(
		// 	array(
		// 		'name' => "Goweb Hosting Solution",
		// 		'type' => "Drupal 7"
		// 	),
		// 	array(
		// 		'name' => "Goweb Hosting Billing",
		// 		'type' => "WHMCS",
		// 	),
		// 	array(
		// 		'name' => "Goweb Hosting Design",
		// 		'type' => "Codeigniter"
		// 	),
		// 	array(
		// 		'name' => "Hijo Resources",
		// 		'type' => "Pure PHP, Pure JAVASCRIPT"
		// 	)
		// );

		// echo json_encode($testjson); 

		echo json_encode($projects);


	}
}

 ?>