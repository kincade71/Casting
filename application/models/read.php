<?php
class Read extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function readcast($id = null){
    if(isset($id)){
      $this->db->where('castid',$id);
    }
    $query = $this->db->get('cast');
	//echo $this->db->last_query();
    if ($query->num_rows() > 0)
    {
      $data = $query->result_array();
    }else{
      $data = NULL;
    }
    return $data;
  }

}
