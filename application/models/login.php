<?php
class Login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

  public function userlogin($userdata){
    $this->db->select('id,username,email');
    $this->db->where('username',$userdata['username']);
    $this->db->where('password',sha1($userdata['password']));
    $query = $this->db->get('users');
    //echo $this->db->last_query();
    if ($query->num_rows() > 0)
    {
       $row = $query->row();

       $login = array(
	       		   'userid'    => $row->id,
                   'username'  => $row->username,
                   'email'     => $row->email,
                   'logged_in' => TRUE
               );

      $this->session->set_userdata($login);
      $data = 'loggedin';
    }else{
        $data = 'Username and Password did not match.';

    }
    return $data;
  }
  
  public function getbio($id){
		$query = $this->db->get('artist');
		if ($query->num_rows() > 0)
		{
			$data = $query->result_array();
		}
		return $data[0];
		//$bio = json_decode(file_get_contents ('http://webdmg.com/play/index.php/api/example/biobyid/id/'.$id));
		//return $bio[0];
	}

	public function updateUserInfo($postdata){
		$data = array(
               $_POST['name'] => $_POST['value'],
            );

		$this->db->where('id', $_POST['pk']);
		$this->db->update('users', $data);
	}

	public function updateUserBio($postdata){
		$data = array(
							$_POST['name'] => $_POST['value'],
						);

		$this->db->where('artistid', $_POST['pk']);
		$this->db->update('artist', $data);
	}

}
 ?>
