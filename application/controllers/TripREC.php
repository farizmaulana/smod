<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TripREC extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login','refresh');
		} else {
			if (!$this->ion_auth->in_group('admin')) {
				redirect('auth/login','refresh');
			}
		}
	}

	public function index()
	{
		$user = $this->ion_auth->user()->row();
		
		$data['pageTitle'] = "Trip Recloser";
		$data['contents'] = 'admin/triprec_view';
		$data['user'] = $user;
		$data['menu'] = "Manajemen Gangguan";
		$data['menu_tagline'] = "History Trip Recloser";
		$data['sub_menu'] = "Trip Recloser";

		$this->load->view('templates/main', $data);
	}
}