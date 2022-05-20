<?php
defined('BASEPATH') or exit('No direct script allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('menu/index', $data);
	}
}
