<?php
class Upload_model extends CI_Model
{

	function save_upload($title, $image)
	{
		$data = array(
			'title' => $title,
			'image' => $image
		);
		$result = $this->db->insert('llx_const', $data);
		return $result;
	}
}
