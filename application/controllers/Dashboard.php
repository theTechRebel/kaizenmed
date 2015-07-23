<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	/*
	 * URI FUNCTIONS
	 */


	/**
	 * 1. kaizenmed/dashboard/index()
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://kaizenmed/dashboard/
	 *	- or -
	 * 		http://kaizenmed/dashboard//index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://kaizenmed/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /kaizenmed/dashboard/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('Require/header');
		$this->load->view('Dashboard/dashboard');
        $this->load->view('Require/footer');
	}
}
