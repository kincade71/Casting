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
  
  public function latestSeason(){
	  
	$this->db->select_max('season');
	$query = $this->db->get('cast');
	//echo $this->db->last_query();
	foreach ($query->result() as $row)
	{
	        $data = $row->season;
	}
    return $data;
  }
  
  public function latestEpisode(){
	$season = $this->latestSeason();
	
	$this->db->where('season',$season);
	$this->db->select_max('episode');
	$query = $this->db->get('cast');
	//echo $this->db->last_query();
	foreach ($query->result() as $row)
	{
	        $data = $row->episode + 1;
	}
    return $data;
  }

}
