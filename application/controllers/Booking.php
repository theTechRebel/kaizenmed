<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Booking Module Controller 
* controls all Booking CRUD & related .js functions
*/

class Booking extends CI_Controller {
/* PRIVATE FUNCTIONS not accessible via http://
    
    /*
     * 1. _readAPI(start [date of starting retrieval of data], end [date of ending of retrieval of data])
     *  called at /booking/read/
     *  provides access to the underlying data in the DB
     *  returns it as an associative array of data i a specific format
     *  data format to be retrieved:
     *   $data = array(
     *               0   => array(
     *                       'title' => 'Joyce Samuriwo',
     *                       'clinicID'  => 'CC34'   
     *                       'details' => 'Liver cyclerosis',
     *                       'doctor'    => 'C.Masiya',
     *                       'start' => '2015-07-12T10:30:00',
     *                       'end'   => '2015-07-12T12:30:00'
     *                   )
     *               );
    */

    private function _readAPI($start,$end){
        $sql = "SELECT * FROM bookings WHERE date >= '$start' AND date <= '$end'";
        $mydb = $this->db->query($sql);
        $i = 0;
        foreach($mydb->result_array() as $row){
           $data[$i] = $row;
           $i++;
        }
        return $data;
    }
/* END OF PRIVATE FUNCTIONS*/

/* URL END-POINTS that are associated with the /booking/ controller. */
    /*
     * 1. read(source [web,app, etc])
     *  called at /booking/read/
     *  provides access to the underlying data
     *  returns it as JSON for web api
     *  still thinking of what to do with App api
    */

    public function read($source){

        switch ($source){
            case 'web':
                $eventsAsJSON = $this->_readAPI($this->input->get('start'),$this->input->get('end'));
                echo json_encode($eventsAsJSON);
                break;

            case 'app':

                break;
        }
    }


    /*
     * 2. create(source [web,app, etc])
     *  called at /booking/create/
     *  creates a new booking
     *  validates a form before input in the db
    */

    public function create($source){

        switch ($source){
            case 'web':
                $this->form_validation->set_rules('doctor', 'Doctor', 'required');
                $this->form_validation->set_rules('details', 'Appointment Details', 'required');
                $this->form_validation->set_rules('end', 'Appointment End time', 'required');

                if($this->form_validation->run() == FALSE) {
                    $query ="SELECT * FROM clients WHERE clinicID = '" . $this->session->clinicID . "' LIMIT 1";
                    $mydb = $this->db->query($query);
                    $client = $mydb->row_array(0);


                    $this->db->order_by("id", "asc");
                    $mydb = $this->db->get('doctors');

                    $dateAndTime = $this->session->date;

                    $data = array('client'=> $client['name'].' '.$client['surname'].' Clinic ID:'.$client['clinicID'],
                        'date'  => $dateAndTime['date'],
                        'time'  => $dateAndTime['time'],
                        'doctors'=>$mydb);

                    $this->load->view('Require/header');
                    $this->load->view('Booking/create',$data);
                    $this->load->view('Require/footer');
                }else{
                    $dateAndTime = $this->session->date;
                    
                    $data = array('clinicID'    => $this->session->clinicID,
                                  'title'      => $this->input->post('client'),
                                  'doctor'      => $this->input->post('doctor'),
                                  'details'     => $this->input->post('details'),
                                  'start'       => $dateAndTime['date'].' '.$dateAndTime['time'],
                                  'end'         => $dateAndTime['date'].' '.$this->input->post('end'),
                                  'date'        => $dateAndTime['date']);

                    $this->mydb->insert('bookings',$data);
                    //changed to use header() because on apache live environment 
                    //was getting php headers already sent error
                    //probably because redirect() function in CI returns 
                    //some sort of information before redirecting which messes up
                    //stuff especially when you are working with JS.
                    header("Location:".base_url("calendar/"));
                }
                break;

            case 'app':

                break;
        }
    }

    /*
     * 3. update(source [web,app, etc])
     *  called at /booking/update/
     *  updates the details of an existing booking
    */
    public function update($source){
        switch($source){
            case "web":
                  $data = array(  'title'     => $this->input->post('title'),
                                  'doctor'    => $this->input->post('doctor'),
                                  'date'      => $this->input->post('date'),
                                  'details'   => $this->input->post('details'),
                                  'start'     => $this->input->post('start'),
                                  'end'       => $this->input->post('end'),
                                  'clinicID'  => $this->input->post('clinicID'));
                  
                if($this->mydb->update('bookings', $data, array('id'=>$this->input->post('id')))){
                    return true;
                }else{
                    return false;
                }
                    
            break;

            case "app":

            break;
        }
    }
}


/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */