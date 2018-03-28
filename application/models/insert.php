<?php
class Insert extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  public function insert($data){
    $this->db->insert('cast', $data);
  }
  
  public function update($data){
    $this->db->where('castid', $data['castid']);
    $this->db->update('cast', $data);
  }


  public function map($uploads, $formdata){
    return array(
      "title" => str_replace('_',' ',$uploads['raw_name']),
      "subtitle" => $formdata['subtitle'],
      "author" => ucfirst($this->session->userdata('username')),
      "summary" => $formdata['summary'],
      "enclosure_length" => number_format($uploads['file_size']),
      "duration" => date('H:i:s',strtotime($formdata['duration'])),
      "keywords" => $formdata['keywords'],
      "Date" => date('D, d M  Y',strtotime($formdata['Date'])).' 00:00:00',
      "explicit" => $formdata['explicit'],
      "season" => $formdata['season'],
      "episode" => $formdata['episode'],
    );
  }
}
