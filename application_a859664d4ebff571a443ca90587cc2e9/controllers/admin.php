<?php 

class Admin extends CI_controller {

	    public function __construct()
       {
            parent::__construct();
            // Your own constructor code
            $this->load->model('projects', 'p');
       }

	public function index() {
		echo "admin";
	}

	public function page() {
		echo "Welcome, ". $this->session->userdata('username') ."!";
		echo "<pre>";
		print_r($this->session->all_userdata());
		echo "</pre>";
	}

	public function adminlogout() {
		$this->session->sess_destroy();
	}

	public function gallery() {

		$this->load->model('gallery_model');

		if ( $this->input->post('upload') ) {

			$this->gallery_model->do_upload();
		}

		$data['images'] = $this->gallery_model->get_images();

		$this->load->view("admin_template/template.php", $data);
	}

	public function login() {
		$data['template'] = 'admin_template/admin_login';
		$this->load->view('admin_template/admin_template', $data);
	}

	public function loginvalidate() { // validating credentials
		$this->load->model('membership', 'mbs');
		$query = $this->mbs->validate();

		if ($query) {
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_id' => true,

			);

			$this->session->set_userdata($data);
			redirect('admin/page');
		} else {
			$this->login();
		}
	}

	public function project() {
		echo "hello";
	}

	public function addproject() {
		$this->load->model('projects', 'p');

		$data['populateselect'] = $this->p->populateProjectCat();
		$this->load->view('addnewproject', $data);
	}

	public function savingproject() {
		$data = array(
			'project_name'			=> $this->input->post('project_name'),
			'project_client'		=> $this->input->post('project_client_name'),
			'project_catid'			=> $this->input->post('project_catid'),
			'project_url'			=> $this->input->post('project_url'),
			'project_image'			=> $this->input->post('project_image'),
			'project_description'	=> $this->input->post('project_description'),
			'project_start'			=> $this->input->post('project_start'),
			'project_end'			=> $this->input->post('project_end')
		);

		$this->p->saveproject($data);
	}
}

?>