<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['contents'] = 'admin/dashboard_view';
		$this->load->view('templates/main', $data);
	}
}