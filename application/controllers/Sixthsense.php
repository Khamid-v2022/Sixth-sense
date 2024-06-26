<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sixthsense extends Base_Controller {

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
		$data['page_name'] = "Sixthsensecode";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-sixthsense');
		$this->load->view('layout/footer');
	}

	public function privacy_policy() {
		$data['page_name'] = "Privacy Policy";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-privacy-policy');
		$this->load->view('layout/footer');
	}

	public function earning_disclaimer(){
		$data['page_name'] = "Earning Disclaimer";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-earning-disclaimer');
		$this->load->view('layout/footer');
	}

	public function testimonials_disclaimer() {
		$data['page_name'] = "TESTIMONIALS AND RESULTS DISCLOSURE";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-testimonials-and-results-disclaimer');
		$this->load->view('layout/footer');
	}

	public function terms_of_use() {
		$data['page_name'] = "Terms of Use";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-terms-of-use');
		$this->load->view('layout/footer');
	}

	public function sixthsensedlindex() {
		$data['page_name'] = "Sixth Sense Code Download Area";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-sixthsensedlindex');
		$this->load->view('layout/footer');
	}
}
