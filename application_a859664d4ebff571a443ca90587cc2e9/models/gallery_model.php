<?php 

class Gallery_model extends CI_model {

	var $gallery_path;
	var $gallery_path_url;

	// function Gallery_model() {
	// 	parent::CI_Model();
		
	// }

	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	    $this->gallery_path = realpath(APPPATH . '../upload');
	    $this->gallery_path_url = base_url() . 'upload/';
	}

	function do_upload() {

		$config = array(
			'allowed_types' => 'jpeg|jpg|gif|png',
			'upload_path'	=> $this->gallery_path,
			'max_size'		=> 2000,
			'remove_spaces' => true
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$image_data = $this->upload->data();

		$config = array(
			'source_image'	=> $image_data['full_path'],
			'new_image'		=> $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width'			=> 150,
			'height'		=> 150,
		);

		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

	}

	public function get_images() {
		$files = scandir($this->gallery_path);
		$files =  array_diff($files, array(".", '..', 'thumbs'));

		$images = array();

		foreach ($files as $file) {
			# code...
			$images[] = array(
				'url'	=> $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url. "thumbs/" . $file
			);
		}

		return $images;
	}
}

?>