<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cast extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect(base_url(), 'refresh');
		}
	}

	public function index()
	{
		$data['title'] = 'Casting';
		$data['projectname'] = 'WEBDMG';
		$data['main_content'] = 'casting';
		$data['status'] = $this->uri->segment(2);
		$this->load->view('main/main_template',$data);
	}

	public function addtrack()
	{
		$config['upload_path'] = './podcast/';
		$config['allowed_types'] = 'mp3';
		$config['overwrite'] = true;
		$config['remove_spaces'] = true;
		//print_r($config);
		//print_r($config['upload_path']);
		//print_r($this->upload->data());
		$config['max_size'] = '1000000';
		$config['max_width']  = '1024000';
		$config['max_height']  = '768000';
		
		$this->upload->initialize($config);
		$this->upload->do_upload();
		//die();
		
		if ( ! $this->upload->do_upload())
		{
			$data['title'] = 'Casting';
			$data['projectname'] = 'WEBDMG';
			$data['errors'] = $this->upload->display_errors();
			$data['main_content'] = 'casting';
			$this->load->view('main/main_template',$data);
		}
		else
		{
				$this->insert->insert($this->insert->map($this->upload->data(),$this->input->post()));
				redirect(base_url().'cast/1');
			}
		}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
