<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	/*
	 * URI FUNCTIONS/ PUBLIC METHODS
	 */

	/**
	 * 1. kaizenmed/dashboard/index/ | kaizenmed/dashboard/
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

    /**
     * 2. kaizenmed/dashboard/clients/ 
     *      implementation of GroceryCRUD Library to access DB table clients and handle all CRUD
     *      -Creation of a new Clients
     *      -Reading of Clients or a single client
     *      -Updating of Clients
     *      -Deletion of Clients
     *      
     * Maps to the following URL
     *      kaizenmed/dashboard/clinets
     */

    public function clients()
    {
        //which table to work with
        $this->grocery_crud->set_table('clients')
        //set subject of the list
        ->set_subject('Client')
        //set the display theme
        ->set_theme('datatables')
        //which colunms to display in list
        ->columns('clinicID','name','surname','gender')
        //display DB colunms as what
        ->display_as('clinicID','e-Clinic ID')
        ->display_as('name','First Name(s)')
        ->display_as('surname','Surname')
        ->display_as('gender','Gender')
        ->display_as('idnumber','National ID Number')
        ->display_as('notes','Additional Information')
        ->display_as('email','Email Address')
        ->display_as('phone','Phone Number')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinicID','name','surname','gender','idnumber','email','phone','notes')
        //which fields are required to save data in the db
        ->required_fields('name','surname','gender','phone')
        //which table to link to
        //->set_relation('officeCode','offices','city')
        //make the ClientID field invisible to the user
        ->change_field_type('clinicID','invisible')
        //before inserting theb data run this callback function
        ->callback_before_insert(array($this,'_generateClinicID'))
        //add callback after insertion
        //->callback_after_insert(array($this, '_returnToCalendarAfterBooking'))
        //Add more custom fields to the CRUD UI
        //->add_action('Add Next of Kin', '', 'demo/action_more','ui-icon-plus')
        ->add_action('Add Medical Aid','','','',array($this,'_callBack'))
        ->add_action('Add Next of Kin', '', '','',array($this,'_callBack'))
        //added hack to add a client and redirect to booking details page
        //what it does is that it displays a message after successful insert
        //then redirects to the booking details page after insert
        ->set_lang_string(  'insert_success_message','Client Added to the system.'.
                            '<br/>'.
                            'Please wait to complete booking details.
        <script type="text/javascript">
        setTimeout(function(){
            window.location = "'.base_url('booking/create/web/').'";
        },3000);
        </script>
        <div style="display:none">
        ');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }


    /**
     * 3. kaizenmed/dashboard/pass_booking_date/
     *      Handles passing of booking date and time from POST variable into the current session variable 
     *      Then redirects to dashboard/clients/add/ to create a new clients record linked to the date and time
     *      stored in the session to be used after creation of the clients record for booking details.
     *      Not be accessed by the user but a quick hack for handling above mentioned functionality
     */

    public function pass_booking_date(){
    if(isset($_POST['date'])){
        $date = array('date'=> $_POST['date'],'time'=>$_POST['time']);
        $this->session->set_userdata('date',  $date);
        redirect('dashboard/clients/add/');
    }else{
        redirect('dashboard/');
    }
    }

    /**
     * 4. kaizenmed/dashboard/getClients/
     *    Ajax Request end point to retrieve clients
     *    via booking modal for selection of clients 
     */
    public function getClients(){
        $query ="SELECT * FROM clients WHERE name like '" . $_POST["keyword"] . "%' OR surname like '" . $_POST["keyword"] . "%' ORDER BY id LIMIT 10";
        $mydb = $this->db->query($query);

        $data = array();
        $i =0;
        if($mydb->num_rows() > 0) {
        foreach ($mydb->result_array() as $row) {
            $data[$i] = $row['name'].' '.$row['surname'];
            $i++;
            }
        }

        echo json_encode($data);
    }









    /*
     * PRIVATE FUNCTIONS not accessible via http://
     * note all functions prepended with a _ character cannot be accessed via browser URL
     * i.e kaizenmed/dashboard/_renderGroceryCRUDOutput/ will throw a 404
     */
    
    /*
     * 1. _renderGroceryCRUDOutput($output[GroceryCRUD array of .css and .js dependencies])
     * function that takes in rocery crud output and renders the view to the user.
     */
    
    function _renderGroceryCRUDOutput($output = null){
        $this->load->view('Require/grocery-crud-header.php',$output);
        $this->load->view('Dashboard/clients.php',$output);
    }

    /*
     * 2. _generateClinicID($post=[POST VARIABLE])
     * callback from public function clients(){...}
     * Runs at ->callback_before_insert(array($this,'_generateClinicID'))
     * and is run right before data is inserted in the DB.
     * Its main purpose is to automaticlly generate a new Client ID and then
     * add that id into the POST['clinicID'] variable that is then inserted in the clients table in the ClinicID field
     */

    function _generateClinicID($post=null){
        //generate client ID
        $query = $this->mydb->get_all("clients");
        $int = $query->row($query->num_rows())->id + 1;
        $post['clinicID'] = "CC".$int;
        $this->session->set_userdata('clinicID',$post['clinicID']);
        return $post;
    }

    /*
     * TODO:create callbacks for various things
     * such as adding Next of Kin and adding medical aid using this function, for now its just a placeholder.
     */

    function _callBack($primaryKey , $row){
        return base_url('some_function/some_method').'/'.$row->clinicID;
    }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
