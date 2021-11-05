<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}

	public function form(){
		$this->load->view("admin/add_form");
	}

	public function view(){
		$this->load->view("admin/view_table");
	}
}
