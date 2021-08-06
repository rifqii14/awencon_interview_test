<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Inventory_model','im');
	}
	
	public function index(){

		$data['produk'] = $this->im->select();
		$this->load->view('inventory_view',$data);
	}

	public function add(){
		$data['Nama_barang'] = $this->input->post('nama_barang');
		$data['Kode_barang'] = $this->input->post('kode_barang');
		$data['Jumlah_barang'] = $this->input->post('jumlah_barang');
		$data['Tanggal'] = $this->input->post('tanggal');

		$this->im->add($data);

		echo "<script>
		alert('Berhasil Disimpan!');
		window.location.href='".base_url()."Inventory';
		</script>";
	}

	public function updateForm(){
		$id_barang =  $this->input->post('id_barang');

		$data['produk'] = $this->im->selectById($id_barang);

		$this->load->view('updateForm_view',$data);
	}

	public function update(){
		$id_barang =  $this->input->post('id_barang');
		$data['Nama_barang'] = $this->input->post('nama_barang');
		$data['Kode_barang'] = $this->input->post('kode_barang');
		$data['Jumlah_barang'] = $this->input->post('jumlah_barang');
		$data['Tanggal'] = $this->input->post('tanggal');

		$this->im->update($id_barang,$data);

		echo "<script>
		alert('Berhasil Diupdate!');
		window.location.href='".base_url()."Inventory';
		</script>";
	}

	public function search(){
		$nama_barang =  $this->input->post('search');
		$data['produk'] = $this->im->selectByNama($nama_barang);

		$this->load->view('inventory_view',$data);
	}
}
