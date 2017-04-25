<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginuser extends CI_Controller {

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

	}

	public function index()
	{
		if($this->session->userdata('logged_in')){
			redirect(base_url().'cast', 'refresh');
		}
		$data['title'] = 'Casting';
		$data['projectname'] = 'WEBDMG';
		$data['main_content'] = 'loginform';
		$this->load->view('main/main_template',$data);
	}

	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Casting';
			$data['projectname'] = 'WEBDMG';
			$data['main_content'] = 'loginform';
			$this->load->view('main/main_template',$data);
		}
		else
		{
			$login = $this->login->userlogin($this->input->post());
			if($login == 'loggedin'){
				redirect('/cast', 'refresh');
			}else{
				$data['title'] = 'Casting';
				$data['error'] = $login;
				$data['main_content'] = 'loginform';
				$this->load->view('main/main_template',$data);
			}

		}

	}

	public function logout(){
		$array_items = array('username' => '', 'email' => '', 'logged_in' => false);
		$this->session->unset_userdata($array_items);
		redirect(base_url(), 'refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
