<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tarif extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('tarif/tarif_model');
	}

	public function fetch_product()
	{
		$entity = $this->input->post('entity');
		$read = $this->tarif_model->get_product($entity);
		echo json_encode($read);
	}
	public function fetch_unite()
	{
		if ($this->input->is_ajax_request()) {

			$post = $this->tarif_model->get_unite();
			echo json_encode($post);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function fetch_user()
	{
		if ($this->input->is_ajax_request()) {

			$post = $this->tarif_model->get_user();
			echo json_encode($post);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function fetch_entity()
	{
		if ($this->input->is_ajax_request()) {

			$post = $this->tarif_model->get_entity();
			echo json_encode($post);
		} else {
			echo "No direct script access allowed";
		}
	}


	public function insert_tarif()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('fk_user', 'utilisateur', 'required');

			$this->form_validation->set_rules('libelle', 'Libelle', 'required');
			$this->form_validation->set_rules('date_debut', 'date debut', 'required');
			$this->form_validation->set_rules('date_fin', 'date fin', 'required');
			$this->form_validation->set_rules('statut', 'statut', 'required');


			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->tarif_model->insert_entry($ajax_data)) {
					$last_id = $this->db->insert_id();
					$data = array('responce' => 'success', 'message' => 'Bien Ajouté ', 'last_id' => $last_id);
				} else {
					$data = array('responce' => 'error', 'message' => 'Erreur Trouvé');
				}
			}
		} else {
			echo "No direct script access allowed";
		}

		echo json_encode($data);
	}

	public function insert_product()
	{

		if ($this->input->is_ajax_request()) {
			$produit_select = $this->input->post('produit_select[]');
			$UnitForm = $this->input->post('UnitForm[]');
			$name_entity = $this->input->post('name_entity[]');
			$prix_HT = $this->input->post('prix_HT[]');
			$tva = $this->input->post('tva[]');
			$Tttc = $this->input->post('Tttc[]');
			$tarif = $this->input->post('tarif');


			for ($i = 0; $i < count($produit_select); $i++) {
				$data = array(
					"fk_produit" => $produit_select[$i],
					"fk_unite" => $UnitForm[$i],
					"fk_entity" => $name_entity[$i],
					"prix_ht" => $prix_HT[$i],
					"tva" => $tva[$i],
					"ttc" => $Tttc[$i],
					"fk_tarif" => $tarif,
				);
				if ($this->tarif_model->insert_pr($data)) {
					$data = array('responce' => 'success', 'message' => ' added succefully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Erreur trouvé');
				}
			}
		}
		echo json_encode($data);
	}

	public function get_p()
	{
		if ($this->input->is_ajax_request()) {

			$post = $this->tarif_model->get_produits();
			echo json_encode($post);
		} else {
			echo "No direct script access allowed";
		}
	}



	public function price_product()
	{
		if ($this->input->is_ajax_request()) {

			$rowid = $this->input->post('fk_product');
			$post = $this->tarif_model->get_priceProduit($rowid);
			echo json_encode($post);
		} else {
			echo "No direct script access allowed";
		}
	}


	public function product_client()
	{
		if ($this->input->is_ajax_request()) {

			$rowid = $this->input->post('client');
			$post = $this->tarif_model->get_produit_client($rowid);
			echo json_encode($post);
		} else {
			echo "No direct script access allowed";
		}
	}


	public function fetch_client()
	{
		$entity = $this->input->post("entity");
		$societe = $this->tarif_model->get_societe($entity);
		echo json_encode($societe);
	}


	// -------------------------------------------------------------------------------













}
