<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Affiliates extends Base_Controller {
    public function index() {
		$data['page_name'] = "Sixth Sense Code Affiliate";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-affiliates');
		$this->load->view('layout/footer');
	}

    public function toolsPage() {
        $data['page_name'] = "Sixth Sense Code Affiliate Tools";
		$this->load->view('layout/header_common', $data);
		$this->load->view('pages/page-affiliates-tools');
		$this->load->view('layout/footer');
    }
}
