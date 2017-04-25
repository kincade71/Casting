<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed extends CI_Controller {

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
		$data['main_content'] = 'feed';
		$data['feed'] = $this->read->readcast();
		$data['edit'] = $this->read->readcast($this->uri->segment(2));
		$this->load->view('main/main_template',$data);
	}

	public function updatetrack()
	{
		$this->insert->update($this->input->post());
		redirect(base_url().'feed');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
