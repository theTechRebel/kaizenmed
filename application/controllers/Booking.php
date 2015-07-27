<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    /*
     * Booking Module that controls all Booking CRUD & .js functions
     *
     */

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

    public function create($source){

        switch ($source){
            case 'web':
                $this->form_validation->set_rules('doctor', 'Doctor', 'required');
                $this->form_validation->set_rules('details', 'Appointment Details', 'required');
                $this->form_validation->set_rules('end', 'Appointment End time', 'required');

                if($this->form_validation->run() == FALSE) {
                    $mydb = $this->mydb->get_all_where('clients', array('clinicID'=>$this->session->clinicID), 1);
                    $client = $mydb->row_array(0);

                    $mydb = $this->mydb->get_all('doctors');

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
                    
                    $data = array('date'        => $dateAndTime['date'],
                                  'clinicID'    => $this->session->clinicID,
                                  'client'      => $this->input->post('client'),
                                  'doctor'      => $this->input->post('doctor'),
                                  'details'     => $this->input->post('details'),
                                  'start'       => $dateAndTime['time'],
                                  'end'         => $this->input->post('end'));

                    $this->mydb->insert('bookings',$data);
                    redirect('dashboard');
                }
                break;

            case 'app':

                break;
        }
    }

    private function _readAPI($start,$end){

        $like_condition = array('date'=>$start,'date'=>$end);
        $mydb = $this->mydb->get_all_like('bookings',$like_condition);

        $data = array();
        $i = 0;
        foreach($mydb->result_array() as $row){
           $data[$i] = $row;
        }


        //search database
        //get events begining with start date and ending with end date
        //return an object in event data format
        /*
        $data = array(
                    0   => array(
                        'title' => 'All Day Event',
                        'start' => '2015-07-01'
                        ),
                    1   => array(
                        'title' => 'Long Event',
                        'start' => '2015-07-07',
                        'end'   => '2015-07-10'
                        ),
                    2   => array(
                        'id'    => 999,
                        'title' => 'Repeating Event',
                        'start' => 'Sat Jul 23 2015 11:00:00 '
                        ),
                    3   => array(
                        'id'    => 999,
                        'title' => 'Repeating Event',
                        'start' => 'Sat Jul 25 2015 11:00:00 '
                        ),
                    4   => array(
                        'title' => 'Joyce Samuriwo',
                        'treatment' => 'Liver cyclerosis',
                        'doctor'    => 'C.Masiya',
                        'time'  => '11:45 AM',
                        'start' => '2015-07-12T10:30:00',
                        'end'   => '2015-07-12T12:30:00'
                        ),
                    5   => array(
                        'title' => 'Lunch',
                        'start' => '2015-07-12T12:00:00'
                        ),
                    6   => array(
                        'title' => 'Birthday Party',
                        'start' => '2015-06-13T07:00:00'
                        ),
                    7   => array(
                        'title' => 'Click for Google',
                        'url'   => 'http://google.com/',
                        'start' => '2015-06-28'
                        )
                    );
                    */
        return $data;
    }
}