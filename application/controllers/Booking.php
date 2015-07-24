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

    private function _readAPI($start,$end){

        //search database
        //get events begining with start date and ending with end date
        //return an object in event data format
        
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
                        'start' => '2015-07-09'
                        ),
                    3   => array(
                        'id'    => 999,
                        'title' => 'Repeating Event',
                        'start' => '2015-07-09'
                        ),
                    4   => array(
                        'title' => 'Joyce Samuriwo',
                        'treatment' => 'Liver cyclerosis',
                        'Doctor'    => 'C.Masiya',
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

        return $data;
    }
}