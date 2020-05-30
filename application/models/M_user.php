<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function cek_login($table, $field1, $field2)
	{
		/*$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('user')->row();*/

		$this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
	}
	
}