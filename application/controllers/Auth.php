<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
    /*
     * Controller to Auth module
     *
     * Controls Access to the system hence Auth for Authorization
     */

    /* PRIVATE FUNCTIONS*/

    /* 1. _startSession(detail[name surname etc],userlevel[admin, nurse, reception etc])
     *   starts a users session on the system initiating that they have
     *    officially logged in.
     *
    */

    private function _startSession($details,$userlevel){
        $userdata = array(
            'logged_in' => TRUE,
            'details' => $details,
            'userlevel' =>$userlevel
        );

        $this->session->set_userdata($userdata);
    }
    /* END OF PRIVATE FUNCTIONS*/



    /* URL END-POINTS that are associated with the /auth/ controller. */
   /*
    * 1. index()
    *  called at /auth/ and /auth/index/
    *  the log in function that logs a user in on the site
    * provides interface to enter email and password.
    *
   */

  public function index(){
      if($this->session->userdata('logged_in') == TRUE){
          redirect('dashboard');
      }else{
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

      if($this->form_validation->run() == FALSE) {

          $this->load->view('Require/header');
          $this->load->view('Auth/login');
          $this->load->view('Require/footer');
      } else {
        $mydb = $this->
                mydb->
                get_all_where("users",
                                array(  'username' => $this->input->post('username'),
                                        'password' => $this->input->post('password')));
        $data = $mydb->row_array(0);

        if(count($data) > 1) {
            if($data['status'] == 0){
                $data = array( 'error' => 'You have been deactivated from the system. Please contact the administrator for act');

                $this->load->view('Require/header');
                $this->load->view('Auth/login', $data);
                $this->load->view('Require/footer');
            }else{
                $this->_startSession($data['details'],$data['userlevel']);
                redirect('dashboard');
            }

        }else{
            $data = array( 'error' => 'Your username and password combination is incorrect');

            $this->load->view('Require/header');
            $this->load->view('Auth/login', $data);
            $this->load->view('Require/footer');
        }
        }
      }
  }


    /*
     * 2. log_out()
     *  called at /auth/log_out/
     *  function used to log a user out of the system
     *
    */
    public function log_out(){
    $this->session->sess_destroy();
    redirect('auth');
  }


    /*
     * 4. recover()
     *  called at /auth/recover/
     *  function used to recover lost password
     *  when a user doesent remember their ppassword
    */
      public function recover(){
       if($this->session->userdata('logged_in')==TRUE) {
           redirect('dashboard');
       }else{
          $this->form_validation->set_rules('username', 'Username', 'required');

          if($this->form_validation->run() == FALSE) {

              $this->load->view('Require/header');
              $this->load->view('Auth/recover');
              $this->load->view('Require/footer');

          }else{
            $mydb = $this->mydb->get_all_where("users", array('username'=>$_POST['username']), 1);
            $password = $mydb->row_array(0);

              if(count($password) > 1){
                  $data['error'] = "Your password is: ".$password['password'];

                  $this->load->view('Require/header');
                  $this->load->view('Auth/recover', $data);
                  $this->load->view('Require/footer');
              }else{
                  $data['error'] = "Username not recognised by the system, please enter a valid Username";

                  $this->load->view('Require/header');
                  $this->load->view('Auth/recover', $data);
                  $this->load->view('Require/footer');
              }


          }
      }
    }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
