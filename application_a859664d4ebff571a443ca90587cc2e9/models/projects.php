<?php

class Projects extends CI_model {
	function populateProjectCat() {
		$this->db->select('*');
		$this->db->from('lib_category');

		$query = $this->db->get();

		return $query->result();
	}

	public function saveproject($item) {
		//print_r($item);
		$this->db->insert('projects', $item); 
		redirect('admin/page');
	}

	public function populatejSon() {
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->order_by('project_id', 'desc');

		$query = $this->db->get();

		return $query->result();
	}
}

?>

