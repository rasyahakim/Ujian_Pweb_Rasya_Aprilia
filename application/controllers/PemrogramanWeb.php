<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemrogramanWeb extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_PemrogramanWeb');
	}
	public function index()
	{
		$data['npm'] = $this->M_PemrogramanWeb->read();
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function tambah()
	{
		$data['npm'] = $this->M_PemrogramanWeb->read();
		$this->load->view('header', $data);
		$this->load->view('tambah');
		$this->load->view('footer');
		if(isset($_POST['tambah'])){
			$this->M_PemrogramanWeb->create();
		}
	}
	public function edit($id)
	{
		$data['npm'] = $this->M_PemrogramanWeb->get_row($id);
		$this->load->view('header', $data);
		$this->load->view('edit');
		$this->load->view('footer');
		if(isset($_POST['edit'])){
			$this->M_PemrogramanWeb->update();
		}
	}
	function delete($id){
		$this->M_PemrogramanWeb->hapus($id);
		redirect('PemrogramanWeb', 'refresh');
	}
}