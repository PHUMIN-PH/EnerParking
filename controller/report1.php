<?php
class report1 extends CI_Controller {
    function __construct() {
		parent::__construct();
	}

        public function index()
        {
                $this->load->view('report1/');
        }
}