<?php

class Membership extends CI_model {
	
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('tbl_users');

		if ($query->num_rows() == 1) {
			return true;
		}
	}
}

?>