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

	public function aboutme() {
		$data['template'] = "about";
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

		echo json_encode($projects);
	}

	public function aboutmeSkill() {
		header('Content-Type: text/javascript');

		echo ' [
		{
	        "fighters": [
	            {
	                "name": "Muhammad Ali",
	                "nickname": "The Greatest",
	                "image": "http://upload.wikimedia.org/wikipedia/commons/1/13/Clyde_The_Bulldog.jpg"
	            },
	            {
	                "name": "Chuck Liddell",
	                "nickname": "The Iceman",
	                "image": "http://images.pictureshunt.com/pics/s/saint_bernard-12924.jpg"
	            },
	            {
	                "name": "Rocky Marciano",
	                "nickname": "The Brockton Blockbuster",
	                "image": "http://www.goodhousekeeping.com/cm/goodhousekeeping/images/IO/alaskan-malamute-fb.jpg"
	            },
	            {
	                "name": "Randy Couture",
	                "nickname": "The Natural",
	                "image": "http://slog.thestranger.com/files/2006/09/bigdog.jpg"
	            },
	            {
	                "name": "Fedor Emelianenko",
	                "nickname": "The Last Emperor",
	                "image": "http://affordablehousinginstitute.org/blogs/us/wp-content/uploads/small_dog_on_big_dog.jpg"
	            },
	            {
	                "name": "Jon Jones",
	                "nickname": "Bones"
	            },
	            {
	                "name": "George Foreman",
	                "nickname": "Big George"
	            },
	            {
	                "name": "Wanderlei Silva",
	                "nickname": "The Axe Murderer"
	            },
	            {
	                "name": "Gearges St. Pierre",
	                "nickname": "Rush"
	            },
	            {
	                "name": "Manny Pacquiao",
	                "nickname": "Pac-Man"
	            }
	        ]
	    } 
	]';
	}
}

 ?>