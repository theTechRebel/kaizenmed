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
        if($this->session->userdata('logged_in') == FALSE) {
            redirect('auth');
        }else{
            $this->load->view('Require/header');
            $this->load->view('Dashboard/dashboard');
            $this->load->view('Require/footer');
        }
	}
    public function groceryCRUDUnderTheHood()
    {
        $this->grocery_crud->set_table('employees');
        $output = $this->grocery_crud->render();

        echo "<pre>";
        print_r($output);
        echo "</pre>";
        die();
    }

    public function clients()
    {
        //which table to work with
        $this->grocery_crud->set_table('employees')
        //set subject of the list
        ->set_subject('Employee')
        //set the display theme
        ->set_theme('datatables')
        //which colunms to display in list
        ->columns('lastName','firstName','email','jobTitle','officeCode')
        //display DB colunms as what
        ->display_as('lastName','Last Name')
        ->display_as('firstName','First Name')
        ->display_as('email','Email Address')
        ->display_as('jobTitle','Job Title')
        ->display_as('officeCode','Office City')
        //which fields to show in forms
        //->fields('lastName','firstName','extension','email','jobTitle')
        //which fields are required to save data in the db
        ->required_fields('firstName','lastName','email','jobTitle')
        //which table to link to
        ->set_relation('officeCode','offices','city')
        //Add more custom fields to the CRUD UI
        //->add_action('Add Next of Kin', '', 'demo/action_more','ui-icon-plus')
        //->add_action('Add Medical Aid','','demo/action_more','ui-icon-plus')
        ->add_action('Call Back', '', '','ui-icon-image',array($this,'_callBack'));
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }

    function _renderGroceryCRUDOutput($output = null){
        $this->load->view('Require/grocery-crud-header.php',$output);
        $this->load->view('Dashboard/employees.php',$output);
    }

    function _callBack($primary_key , $row)
    {
        return base_url('aid/new/').'/'.$row->lastName;
    }
}
