<?php

/**
 * 
 */
class Form_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function get_ids(){
		$this->db->from('id_types');
		return $this->db->get()->result_array();
	}
}

?>