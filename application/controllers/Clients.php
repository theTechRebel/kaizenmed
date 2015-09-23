<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Clients Module Controller
 * controls display of the underlying Clients Database Table
 * to the end user. Uses GroceryCRUD Library 
 * to handle all CRUD functions.
 *
 */

class Clients extends CI_Controller {
/* PRIVATE FUNCTIONS not accessible via http://

	/*
     * 1. _renderGroceryCRUDOutput($output[GroceryCRUD array of .css and .js dependencies])
     * function that takes in Grocery crud output and renders the view to the user.
     */
    
    function _renderGroceryCRUDOutput($output = null){
        $this->load->view('Require/grocery-crud-header.php',$output);
        $this->load->view('clients/clients.php',$output);
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


/* CALLBACKS for GroceryCRUD API */
    /* 
    *3. Callbacks for various actions using GroceryCRUD API
    *
    * Basically Callbacks are added to each individual
    * row in the clients table to bring out information 
    * linked to that particular row from other tables. 
    * It is pulling out information that is linked to that rows 
    * Primary Key represented as a Foreign Key in another table.
    *
    * Fomart: 
    *      _callBack($primaryKey [primary key of the selected row] , $row [data from the selected row]){
    *          return base_url('some_controller/some_method').'/'.$row->clinicID;
    *          [returning a URL structured with a method from a controller appended with 
    *           the clincID value from the selected row]
    *      }
    * 
     * 3.1. _personResponsibleForAccount: reffer to CallBack() Fomart in 3.
     *
     * Uses GroceryCRUD API to create additional functionality 
     * to link clients view with Person Responsible for Account View
     * using Primary Key in clients table linked with clinic_ID in 
     * clients_account table as foreign Key.
     * Gives ability to CRUD person responsible for account
     *
     * Returns a URL structure .../clients/account/ + clinicID to the 
     * Person Responsible for Account Action in 
     * http://localhost/kaizen/KaizenMed/clients view
     * 
     */
    function _personResponsibleForAccount($pk, $row){
       return base_url('clients/account').'/'.$row->clinicID;
    }

    /*
     * 3.2. _nearestFamilyFriend: reffer to CallBack() Fomart in 3.
     * Uses GroceryCRUD API to create additional functionality 
     * to link clients view with Nearest Family Friend View
     * using Primary Key in clients table linked with clinic_ID in 
     * clients_nearest_family_friend table as foreign Key.
     * Gives ability to CRUD nearest family friend
     *
     * Returns a URL structure .../clients/friend/ + clinicID to the 
     * Nearest Family Friend Action in 
     * http://localhost/kaizen/KaizenMed/clients view
     */
    function _nearestFamilyFriend($pk, $row){
        return base_url('clients/friend').'/'.$row->clinicID; 
    }

    /*
     * 3.3. _medicalAid: reffer to CallBack() Fomart in 3.
     * Uses GroceryCRUD API to create additional functionality 
     * to link clients view with Medical Aid View
     * using Primary Key in clients table linked with clinic_ID in 
     * clients_medical_aid table as foreign Key.
     * Gives ability to CRUD medical aid
     *
     * Returns a URL structure .../clients/medical/ + clinicID to the 
     * Medical Aid Action in 
     * http://localhost/kaizen/KaizenMed/clients view
     */
    function _medicalAid($pk, $row){
       return base_url('clients/medical').'/'.$row->clinicID;  
    }

    /*
     * 4. _refferedBy: reffer to CallBack() Fomart in 3.
     * Uses GroceryCRUD API to create additional functionality 
     * to link clients view with Reffered By View
     * using Primary Key in clients table linked with clinic_ID in 
     * clients_reffered table as foreign Key.
     * Gives ability to CRUD Reffered By
     *
     * Returns a URL structure .../clients/reffered/ + clinicID to the 
     * Reffered By Action in 
     * http://localhost/kaizen/KaizenMed/clients view
     */
    function _refferedBy($pk, $row){
        return base_url('clients/reffered').'/'.$row->clinicID; 
    }

    /*
     * 5. _familyDeatils: reffer to CallBack() Fomart in 3.
     * Uses GroceryCRUD API to create additional functionality 
     * to link clients view with Family Details View
     * using Primary Key in clients table linked with clinic_ID in 
     * clients_family table as foreign Key.
     * Gives ability to CRUD Family Details
     *
     * Returns a URL structure .../clients/family/ + clinicID to the 
     * Family Details Action in 
     * http://localhost/kaizen/KaizenMed/clients view
     */
    function _familyDeatils($pk, $row){
        return base_url('clients/family').'/'.$row->clinicID; 
    }

    /*
     * 6. _medicalHistory: reffer to CallBack() Fomart in 3.
     * Uses GroceryCRUD API to create additional functionality 
     * to link clients view with Medical History View
     * using Primary Key in clients table linked with clinic_ID in 
     * clients_results table as foreign Key.
     * Gives ability to CRUD Medical Results
     *
     * Returns a URL structure .../clients/results/ + clinicID to the 
     * Medical History Action in 
     * http://localhost/kaizen/KaizenMed/clients view
     */
    function _medicalHistory($pk,$row){
        return base_url('clients/results').'/'.$row->clinicID; 
    }
/* END OF CALLBACKS for GroceryCRUD API */
/* END OF PRIVATE FUNCTIONS*/

/* PUBLIC FUNCTIONS / URL END-POINTS from /clients/ controller. accessible via http:// */

        /**
         * 1. kaizenmed/clients/index/ | kaizenmed/clients/
         * Index Page for this controller.
         *
         * Maps to the following URL
         *      http://kaizenmed/clients/
         *  - or -
         *      http://kaizenmed/clients/index
         *  implementation of GroceryCRUD Library to access DB table clients and handle all CRUD
         *      -Creation of a new Clients
         *      -Reading of Clients or a single client
         *      -Updating of Clients
         *      -Deletion of Clients
         */

		public function index(){
			//which table to work with
        $this->grocery_crud->set_table('clients')
        //set subject of the list
        ->set_subject('Client');
        //set the display theme
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
        }
        //which colunms to display in list
        $this->grocery_crud->columns('clinicID','name','surname','gender')
        //display DB colunms as what
        ->display_as('clinicID','e-Clinic ID')
        ->display_as('name','First Name(s)')
        ->display_as('surname','Surname')
        ->display_as('gender','Gender')
        ->display_as('idnumber','National ID Number')
        ->display_as('notes','Additional Information')
        ->display_as('email','Email Address')
        ->display_as('phone','Phone Number')
        ->display_as('dob','Date of Birth')
        ->display_as('marital','Marital Status')
        ->display_as('language','Home language')
        ->display_as('occupation','Occupation')
        ->display_as('title','Title')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinicID','title','name','surname','gender',
                 'idnumber','email','phone','occupation','dob',
                 'marital','language','notes')
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
        ->add_action('Person Responsible for Account','','','',array($this,'_personResponsibleForAccount'))
        ->add_action('Medical Aid','','','',array($this,'_medicalAid'))
        ->add_action('Nearest Family / Friend','','','',array($this,'_nearestFamilyFriend'))
        ->add_action('Referred By','','','',array($this,'_refferedBy'))
        ->add_action('Family Details', '', '','',array($this,'_familyDeatils'))
        ->add_action('Medical History', '', '','',array($this,'_medicalHistory'));
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }


    /**
     * 2. kaizenmed/clients/read/
     *    Ajax Request end point to retrieve clients
     *    via booking modal for selection of clients 
     */
    public function read(){
        $query ="SELECT * FROM clients WHERE name like '" . $_POST["keyword"] . "%' OR surname like '" . $_POST["keyword"] . "%' ORDER BY clinicID LIMIT 10";
        $mydb = $this->db->query($query);

        $data = array();
        $i =0;
        if($mydb->num_rows() > 0) {
        foreach ($mydb->result_array() as $row) {
            $data[$i] = array('name' => $row['name'].' '.$row['surname'],
                              'clinicID'   => $row['clinicID']);
            $i++;
            }
        }

        echo json_encode($data);
    }


/* ADDITIONAL ACTIONS
   Linking each row in clients trable with related information in other tables
   e.g linking client with clinicID CC34 in clients  table to Medical Aid information 
   on that client stored in clients_medical_aid using clinic_ID as foreign key with CC34
   as its value. 
*/

    /*
     *3. kaizenmed/clients/account
     *  function for CRUD person responsible for account for each client
     *  links from clients table using Primary Key of clients table
     *  used as foreign key in clients_account table
     *
     * account(clinicID[the clincID of the row selected from the clients table])
     * 
     */
    
    public function account($clinicID){
        //define parameter for which data you want to get from db
        $this->grocery_crud->where('clinic_ID',$clinicID)
        //which table to work with
        ->set_table('clients_account')
        //set subject of the list
        ->set_subject('Person Responsible for Account');
        //set the display theme depending on wether we are adding or editing
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
            $this->grocery_crud->field_type('clinic_ID', 'hidden', $clinicID);
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
            $this->grocery_crud->set_relation('clinic_ID','clients','{clinicID}: {name} {surname}');
        }
        //which colunms to display in list
         $this->grocery_crud->columns('clinic_ID','title','fname','sname')
        //display DB colunms as what
        ->display_as('clinic_ID','Related Patient')
        ->display_as('title','Title')
        ->display_as('fname','First Name')
        ->display_as('sname','Surname')
        ->display_as('name','Patient Name')
        ->display_as('address','Home Address')
        ->display_as('idnumber','National ID Number')
        ->display_as('address','Home Address')
        ->display_as('work','Work Address')
        ->display_as('post','Postal Address')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinic_ID','title','fname','sname','idnumber',
                 'address','work','post')
        //which fields are required to save data in the db
        ->required_fields('title','fname','sname','address');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }

    /*
     *4. kaizenmed/clients/friend
     *  function for CRUD nearest family friend for each client
     *  links from clients table using Primary Key of clients table
     *  used as foreign key in clients_nearest_family_friend table
     *
     * friend(clinicID[the clincID of the row selected from the clients table])
     */
    
    public function friend($clinicID){
        //define parameter for which data you want to get from db
        $this->grocery_crud->where('clinic_ID',$clinicID)
        //which table to work with
        ->set_table('clients_nearest_family_friend')
        //set subject of the list
        ->set_subject('Nearest Family Friend');
        //set the display theme
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
            $this->grocery_crud->field_type('clinic_ID', 'hidden', $clinicID);
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
            $this->grocery_crud->set_relation('clinic_ID','clients','{clinicID}: {name} {surname}');
        }
        //which colunms to display in list
         $this->grocery_crud->columns('clinic_ID','name','phone','relation')
        //display DB colunms as what
        ->display_as('clinic_ID','Related Patient')
        ->display_as('name','First Name')
        ->display_as('phone','Phone Number')
        ->display_as('relation','Relationship')
        ->display_as('address','Home Address')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinic_ID','name','phone','relation','address')
        //which fields are required to save data in the db
        ->required_fields('name','phone','relation');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }


    /*
     *5. kaizenmed/clients/medical
     *  function for CRUD Medical Aid for each client
     *  links from clients table using Primary Key of clients table
     *  used as foreign key in clients_medical_aid table
     *
     * medical(clinicID[the clincID of the row selected from the clients table])
     */
    
    public function medical($clinicID){
        //define parameter for which data you want to get from db
        $this->grocery_crud->where('clinic_ID',$clinicID)
        //which table to work with
        ->set_table('clients_medical_aid')
        //set subject of the list
        ->set_subject('Medical Aid');
        //set the display theme
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
            $this->grocery_crud->field_type('clinic_ID', 'hidden', $clinicID);
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
            $this->grocery_crud->set_relation('clinic_ID','clients','{clinicID}: {name} {surname}');
        }
        //which colunms to display in list
         $this->grocery_crud->columns('clinic_ID','name','members_name','number')
        //display DB colunms as what
        ->display_as('clinic_ID','Related Patient')
        ->display_as('name','Name')
        ->display_as('members_name','Members Name')
        ->display_as('number','Medical Aid Number')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinic_ID','name','members_name','number')
        //which fields are required to save data in the db
        ->required_fields('name','members_name','number');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }


    /*
     *5. kaizenmed/clients/reffered
     *  function for CRUD Reffered By for each client
     *  links from clients table using Primary Key of clients table
     *  used as foreign key in clients_reffered table
     *
     * reffered(clinicID[the clincID of the row selected from the clients table])
     */
    
    public function reffered($clinicID){
        //define parameter for which data you want to get from db
        $this->grocery_crud->where('clinic_ID',$clinicID)
        //which table to work with
        ->set_table('clients_reffered')
        //set subject of the list
        ->set_subject('Referred By');
        //set the display theme
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
            $this->grocery_crud->field_type('clinic_ID', 'hidden', $clinicID);
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
            $this->grocery_crud->set_relation('clinic_ID','clients','{clinicID}: {name} {surname}');
        }
        //which colunms to display in list
         $this->grocery_crud->columns('clinic_ID','name','address','phone')
        //display DB colunms as what
        ->display_as('clinic_ID','Related Patient')
        ->display_as('name','Name')
        ->display_as('address','Address')
        ->display_as('phone','Phone Number')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinic_ID','name','address','phone')
        //which fields are required to save data in the db
        ->required_fields('name');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }

    /*
     *5. kaizenmed/clients/family
     *  function for CRUD Family Details for each client
     *  links from clients table using Primary Key of clients table
     *  used as foreign key in clients_family table
     *
     * family(clinicID[the clincID of the row selected from the clients table])
     */
    
    public function family($clinicID){
        //define parameter for which data you want to get from db
        $this->grocery_crud->where('clinic_ID',$clinicID)
        //which table to work with
        ->set_table('clients_family')
        //set subject of the list
        ->set_subject('Family Details');
        //set the display theme
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
            $this->grocery_crud->field_type('clinic_ID', 'hidden', $clinicID);
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
            $this->grocery_crud->set_relation('clinic_ID','clients','{clinicID}: {name} {surname}');
        }
        //which colunms to display in list
         $this->grocery_crud->columns('clinic_ID','name','dob','allergies','blood_group','other')
        //display DB colunms as what
        ->display_as('clinic_ID','Related Patient')
        ->display_as('name','Name(s)')
        ->display_as('dob','Date of Birth')
        ->display_as('allergies','Drug Allergies')
        ->display_as('blood_group','Blood Group')
        ->display_as('other','Other')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinic_ID','name','dob','allergies','blood_group','other')
        //which fields are required to save data in the db
        ->required_fields('name');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }

    /*
     *6. kaizenmed/clients/results
     *  function for CRUD Medical Results for each client
     *  links from clients table using Primary Key of clients table
     *  used as foreign key in clients_results table
     *
     * results(clinicID[the clincID of the row selected from the clients table])
     */
    
    public function results($clinicID){
        //define parameter for which data you want to get from db
        $this->grocery_crud->where('clinic_ID',$clinicID)
        //which table to work with
        ->set_table('clients_results')
        //set subject of the list
        ->set_subject('Medical History');
        //set the display theme
        if ($this->grocery_crud->getState() == 'add' OR $this->grocery_crud->getState() == 'edit')
        {
            $this->grocery_crud->set_theme('datatables');
            $this->grocery_crud->field_type('clinic_ID', 'hidden', $clinicID);
        }
        else
        {
            $this->grocery_crud->set_theme('twitter-bootstrap');
            $this->grocery_crud->set_relation('clinic_ID','clients','{clinicID}: {name} {surname}');
        }
        //which colunms to display in list
         $this->grocery_crud->columns('clinic_ID','date','illness','diagnosis','doctor','prescription')
        //display DB colunms as what
        ->display_as('clinic_ID','Patient')
        ->display_as('date','Date of Visit(s)')
        ->display_as('illness','Illness')
        ->display_as('diagnosis','Dignosis Given')
        ->display_as('doctor','Doctor seen')
        ->display_as('prescription','Prescription')
        //->display_as('officeCode','Office City')
        //which fields to show in forms
        ->fields('clinic_ID','date','illness','diagnosis','doctor','prescription')
        //which fields are required to save data in the db
        ->required_fields('date','illness','diagnosis','doctor');
        //render the output
        $this->_renderGroceryCRUDOutput($this->grocery_crud->render());
    }
/* END OF ADDITIONAL ACTIONS */
/* END OF PUBLIC FUNCTIONS */
}

/* End of file Clients.php */
/* Location: ./application/controllers/Clients.php */


