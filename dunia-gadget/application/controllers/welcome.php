<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// constructor untuk memuat model  
	public function __construct(){
		parent::__construct();
		$this->load->model('modelku');
	}

	// controller untuk halaman index/awal dari website
	public function index(){
		$this->load->view('index');
	}

	// controller untuk masuk/login
	public function nav_masuk(){
		$this->load->view('login');
	}

	public function fungsi_masuk(){
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));

		$dataPenunjuk = array(
			'username' => $user,
			'password' => $pass,
		);
		$cek = count($this->modelku->getData_khusus("data_user", $dataPenunjuk));
		if($cek > 0){
			$data_session = array(
				'user' => $user,
				'status' => "login",
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/welcome_admin'));
		}else{
			redirect(base_url('index.php/welcome/nav_masuk'));
		}
	}

	// controller untuk daftar/register
	public function nav_daftar(){
		$this->load->view('register');
	}

	public function fungsi_daftar(){
		$dataInputan = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$this->modelku->insertData('data_user', $dataInputan);
		redirect(base_url('index.php/welcome/nav_masuk'));
	}

	// controller untuk keluar/logout
	public function nav_logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/welcome'));
	}
}