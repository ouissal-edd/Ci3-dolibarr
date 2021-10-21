<?php

class Companyc_model extends CI_Model
{
	public function get_const()
	{

		$this->db->select('*');
		$this->db->from('llx_const');
		$this->db->where('entity="1"');


		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}


	public function get_contry()
	{

		$this->db->select('*');
		$this->db->from('llx_c_country');
		$this->db->where('label !=', '-');
		$this->db->ORDER_BY('label', 'asc');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function get_departement()
	{

		$this->db->select('*');
		$this->db->from('llx_c_departements');
		$this->db->ORDER_BY('code_departement', 'asc');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function get_devise()
	{

		$this->db->select('*');
		$this->db->from('llx_c_currencies');
		$this->db->ORDER_BY('code_iso', 'asc');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}




	public function update_entry($name, $data)
	{
		$this->db->where("name =  '$name' and entity = 1");
		$this->db->update('llx_const', $data);
	}
}
