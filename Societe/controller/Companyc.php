<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Companyc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('company/companyc_model');
	}

	public function fetch_const()
	{
		$read = $this->companyc_model->get_const();
		echo json_encode($read);
	}





	// -----------------------Select--------------------------------------------

	public function contry()
	{
		$post = $this->companyc_model->get_contry();
		echo json_encode($post);
	}

	public function departement()
	{
		$post = $this->companyc_model->get_departement();
		echo json_encode($post);
	}

	public function devise()
	{
		$post = $this->companyc_model->get_devise();
		echo json_encode($post);
	}



	// -------------------------------------------------------------------------------





	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$nom = $this->input->post('nom[]');
			$adress = $this->input->post('adress[]');

			for ($i = 0; $i < count($nom); $i++) {
				$data = array(
					"value" => $adress[$i],
				);
				if ($this->companyc_model->update_entry($nom[$i], $data)) {
					$data =  array('responce' => 'success', 'message' => ' updated succefully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Erreur trouvé');
				}
			}
		}

		echo json_encode($data);
	}

	public function jour()
	{
		if ($this->input->is_ajax_request()) {
			$journame = $this->input->post('journame[]');
			$jourvalue = $this->input->post('jourvalue[]');

			for ($i = 0; $i < count($journame); $i++) {
				$data = array(
					"value" => $jourvalue[$i],
				);
				if ($this->companyc_model->update_entry($journame[$i], $data)) {
					$data =  array('responce' => 'success', 'message' => ' updated succefully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Erreur trouvé');
				}
			}
		}

		echo json_encode($data);
	}

	public function reseau()
	{
		if ($this->input->is_ajax_request()) {
			$resoname = $this->input->post('resoname[]');
			$resovalue = $this->input->post('resovalue[]');

			for ($i = 0; $i < count($resoname); $i++) {
				$data = array(
					"value" => $resovalue[$i],
				);
				if ($this->companyc_model->update_entry($resoname[$i], $data)) {
					$data =  array('responce' => 'success', 'message' => ' updated succefully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Erreur trouvé');
				}
			}
		}

		echo json_encode($data);
	}

	public function comptable()
	{
		if ($this->input->is_ajax_request()) {
			$compname = $this->input->post('compname[]');
			$compvalue = $this->input->post('compvalue[]');

			for ($i = 0; $i < count($compname); $i++) {
				$data = array(
					"value" => $compvalue[$i],
				);
				if ($this->companyc_model->update_entry($compname[$i], $data)) {
					$data = array('responce' => 'success', 'message' => ' updated succefully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Erreur trouvé');
				}
			}
		}

		echo json_encode($data);
	}


	function ajax_upload()
	{
		$chemin = $this->input->post('chemin');
		if (isset($_FILES["files"]["name"])) {
			$allowed = array('gif', 'png', 'jpg', 'pdf', 'jpeg');
			$filename = $_FILES['files']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if (in_array($ext, $allowed)) {
				$temp_name = $_FILES['files']['tmp_name'];
				move_uploaded_file($temp_name, $chemin . "/" . $_FILES['files']['name']);
				$datam = array('responce' => 'success', 'message' => 'fichier updated succefully');
			} else {
				$datam = array('responce' => 'error', 'message' => 'Le fichier n\'est pas accepté');
			}
			$namelogo = $this->input->post('name');
			$data = array(
				"value" => $_FILES["files"]["name"]
			);
			$this->companyc_model->update_entry($namelogo, $data);
		}

		echo json_encode($datam);
	}
}
