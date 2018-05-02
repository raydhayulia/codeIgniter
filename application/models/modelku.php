<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelku extends CI_Model {
	public function getPengguna($table)
	{
		$data = $this->db->get($table);
    return $data->result_array();
	}
}
