<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->modelku->getPengguna('pengguna');
		$this->load->view('welcome_message', $this->data);
	}
}
