<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SixthsenseDs extends Base_Controller {

	public function index()
	{
		$data['page_name'] = "12$ Discount Approved";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-sixthsense-ds');
		$this->load->view('layout/footer');
	}
}
