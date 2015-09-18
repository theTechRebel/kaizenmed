<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Auth Module Controller
 * Controls Access to the system (login) hence Auth for Authorization
 */

class Api extends CI_Controller {

		public function doctor($source,$surname,$name){
    	switch ($source) {
    		case 'app':
    				$mydb = $this->mydb->get_all_where("doctors", array('surname'=>$surname,'name'=>$name), 1);
    				$doc = $mydb->row_array(0);

    				if(count($doc) > 1){
    						$data = json_encode($doc);
    				}else{
    					$data = json_encode(array('error'=>'Your username and password combination is incorrect.'));
    				}
    			break;
    		
    		default:
    			# code...
    			break;
    	}

    	echo($data); 
    }

  public function results($ward,$doctor){
  		$data = array(0=>array('name'=>'Kenneth','surname'=>'Dube','condition'=>'Heart Failure','treated'=>'16-07-15','results'=>'Cardiac Arrest'),
                      1=>array('name'=>'Jeb','surname'=>'Bush','condition'=>'Meningitis','treated'=>'18-08-15','results'=>'Brain damage'),
                      2=>array('name'=>'Barack','surname'=>'Obama','condition'=>'Prostate cancer','treated'=>'22-08-15','results'=>'Prostate amputation'),
                      3=>array('name'=>'Hilary','surname'=>'Clinton','condition'=>'Lung cancer','treated'=>'31-08-15','results'=>'Lung puncture'),
                      4=>array('name'=>'Saviour','surname'=>'Kasukuwere','condition'=>'Mitosis','treated'=>'02-09-15','results'=>'Extreme liver mitosis'),
                      5=>array('name'=>'Patric','surname'=>'Chinamasa','condition'=>'Gonoreah','treated'=>'04-09-15','results'=>'thrush on genitals'),
                      6=>array('name'=>'Super','surname'=>'Mandiwanzira','condition'=>'Tuberculosis Melitus','treated'=>'06-09-15','results'=>'Extreme lung infection'),
                      7=>array('name'=>'Strive ','surname'=>'Masiyiwa','condition'=>'Stroke','treated'=>'08-09-15','results'=>'Half body paralysis'),
                      8=>array('name'=>'Oliver','surname'=>'Mtukudzi','condition'=>'Abdominal cramps','treated'=>'09-09-15','results'=>'Atheritis'),
                      9=>array('name'=>'Jacob','surname'=>'Zuma','condition'=>'HIV/AIDS','treated'=>'11-09-15','results'=>'HIV negetive'),
                      10=>array('name'=>'Albert','surname'=>'Einstein','condition'=>'Genius','treated'=>'15-09-15','results'=>'Still a genius'));
        echo json_encode($data);
  }
}
