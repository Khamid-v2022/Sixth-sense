<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oto1_ds_pd extends Base_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['page_name'] = "$20 Discount Approved!";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-oto1-ds-pd');
		$this->load->view('layout/footer');
	}
}