<?php

class Tarif_model extends CI_Model
{
	public function get_product($entity)
	{

		$this->db->select('*');
		$this->db->from('llx_product');
		$this->db->where('entity', $entity);



		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function get_unite()
	{
		$this->db->select('*');
		$this->db->from('llx_c_units');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}
	public function get_user()
	{
		$this->db->select('*');
		$this->db->from('llx_user');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function get_entity()
	{
		$this->db->select('*');
		$this->db->from('llx_entity');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function insert_entry($data)
	{
		return $this->db->insert('llx_tarif', $data);
	}

	public function insert_pr($data)
	{
		return $this->db->insert('llx_tarif_product', $data);
		die($this->db->last_query());
	}

	public function get_produits()
	{




		$this->db->select('*');
		$this->db->from('llx_tarif_product p');
		$this->db->join('llx_c_units u', 'u.rowid=p.fk_unite');
		$this->db->join('llx_tarif t', 't.rowid=p.fk_tarif');
		$this->db->join('llx_product pt', 'pt.rowid=p.fk_produit');



		$query = $this->db->get();
		// die($this->db->last_query());

		if (count($query->result()) > 0) {
			return $query->result();
		}
	}





	public function get_produit_client($fk_soc)
	{




		$this->db->select('*');
		$this->db->from('llx_tarif_product p');
		$this->db->join('llx_c_units u', 'u.rowid=p.fk_unite');
		$this->db->join('llx_tarif t', 't.rowid=p.fk_tarif');
		$this->db->join('llx_product pt', 'pt.rowid=p.fk_produit');
		$this->db->join('llx_societe s', 's.rowid=t.fk_soc');

		$this->db->where('fk_soc', $fk_soc);




		$query = $this->db->get();
		// die($this->db->last_query());

		if (count($query->result()) > 0) {
			return $query->result();
		}
	}


	public function get_products_client()
	{

		$this->db->select('*');
		$this->db->from('llx_tarif_product p');
		$this->db->join('llx_product pt', 'pt.rowid=p.fk_produit');



		$query = $this->db->get();
		// die($this->db->last_query());

		if ($query->num_rows() != 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	public function get_priceProduit($fk_product)
	{

		$this->db->select('*');
		$this->db->from('llx_tarif_product p');
		$this->db->join('llx_c_units u', 'u.rowid=p.fk_unite');
		$this->db->join('llx_tarif t', 't.rowid=p.fk_tarif');
		$this->db->join('llx_product pt', 'pt.rowid=p.fk_produit');
		$this->db->where('fk_produit ', $fk_product);



		$query = $this->db->get();
		// die($this->db->last_query());

		if (count($query->result()) > 0) {
			return $query->result();
		}
	}

	public function get_societe($ent)
	{

		$this->db->select('*');
		$this->db->from('llx_societe');
		$this->db->where('entity', $ent);
		$this->db->where('client in (1,2,3)');
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->result();
		}
	}
}
