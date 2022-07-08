<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome_admin extends CI_Controller {

	// session  
	public function __construct(){
		parent::__construct();
		$this->load->model('modelku');
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
	}

	// controller untuk halaman home - mengambil data produk dari database
	public function index(){
		$data['produk'] = $this->modelku->tampil_data()->result();
		$this->load->view('home', $data);
	}

	// controller untuk halaman detail produk - mengambil data produk dari database
	public function detail_produk($id_produk){
		$data['produk'] = $this->modelku->detail_produk($id_produk);
		$this->load->view('detail_produk', $data);
	}

	// controller untuk button tambah ke keranjang - mengambil data produk dari database
	public function btn_tambah_ke_keranjang($id_produk){
		$produk = $this->modelku->find($id_produk);

		$data = array(
			'id' => $produk->id_produk,
			'qty' => 1,
			'price' => $produk->harga_produk,
			'name' => $produk->nama_produk,
			'image' => $produk->foto_produk
		);
		$this->cart->insert($data);
		redirect('welcome_admin/detail_produk/'.$id_produk);
	}

	// controller untuk halaman detail keranjang belanja - mengambil data produk dari database
	public function detail_keranjang_belanja(){
		$this->load->view('detail_keranjang_belanja');
	}

	// controller untuk hapus kerajang belanja
	public function hapus_keranjang_belanja(){
		$this->cart->destroy();
		redirect('welcome_admin/detail_keranjang_belanja');
	}

	// controller untuk pembayaran
	public function fungsi_form_pembayaran(){
		$this->load->view('form_pembayaran');
	}

	// controller untuk proses pesanan
	public function ke_proses_pesanan(){
		$dataInputan = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'metode_pembayaran' => $this->input->post('metode_pembayaran'),
			'bank' => $this->input->post('bank'),
			'jasa_pengiriman' => $this->input->post('jasa_pengiriman'),
		);
		$this->cart->destroy();
		$this->modelku->tambahDataPembayaran('tabel_pembayaran', $dataInputan);
		$this->load->view('proses_pesanan');
		// redirect('welcome_admin/proses_pemesanan');
	}
}