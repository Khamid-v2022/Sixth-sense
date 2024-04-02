<?php
class Base_Controller extends CI_Controller {

    public $data;

	public function __construct() {
		parent::__construct();
	}

    public function generate_json($msg, $status = true) {
        $resp['status'] = $status;
        $resp['msg'] = $msg;
        echo json_encode($resp);
    }
}
