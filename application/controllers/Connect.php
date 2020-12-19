<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connect extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('id')) {
			$this->load->helper('url');
			redirect('dashboard');
		}
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('login_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('administration/connect');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$result = $this->login_model->can_login($this->input->post('username'), $this->input->post('password'));
			if ($result == '') {
				redirect('admin/dashboard', 'index');
			} else {
				$this->session->set_flashdata('message', $result);
				$this->index();
			}
		} else {
			$this->index();
		}
	}


	public function logout()
	{
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('default_controller');
	}
}
