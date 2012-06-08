<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	var $upload_path;
	
	function __construct(){
		parent::__construct();
		
		$this->upload_path = 'assets/uploads';
	}
	public function index()
	{
		
		//add assets specific to biodata
		$data['js'] = array(
			'assets/js/jquery.js',
			'assets/uploadify/swfobject.js',
			'assets/uploadify/jquery.uploadify.v2.1.0.min.js',
		);
		$data['css'] = array(
			'assets/uploadify/uploadify.css'
		);
		
		
		$this->load->view('uploadify', $data);
	}
	
	function uploadify(){
		$this->load->helper('uploadify');
		$img_data = img_uploadify($path = $this->upload_path);
		
		echo $img_data['file_name'];
		
		$config = array(
			'source_image' 		=> $img_data['full_path'],
			'new_image'	   		=> $this->upload_path. '/thumbs',
			'maintain_ratio'	=> true,
			'width'				=> 100,
			'height'			=>150
		);
			
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */