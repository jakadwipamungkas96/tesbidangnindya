<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model('m_barang');
	}
	
	public function index()
	{
		$data['databarang'] = $this->m_barang->getBarang();

		$this->load->view('v_barang', $data);
	}
}
