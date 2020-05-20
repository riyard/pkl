<?php
class M_tambah extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('customer', $data);
      return true;
    }catch(Exception $e){
    }
  }

}
?>