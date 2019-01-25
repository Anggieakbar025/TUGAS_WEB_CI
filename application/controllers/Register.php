<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Register extends CI_Controller {
    
        public function registeruser()
        {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
            $this->form_validation->set_rules('fname', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('contact', 'Contact', 'required');
            $this->form_validation->set_rules('nis', 'NIS', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
            
            if ($this->form_validation->run() == TRUE) {

                // load model to connect to the db
                $this->load->model('Model_user');
                $this->Model_user->insertUser($data);
                
                $this->session->set_flashdata('succes', 'Berhasil Register');
                
                redirect('Welcome/login');
                
            } 

            else {

                $this->load->view('login/register_view');
                                
                
            }
            
        }
    
    }
    
    /* End of file Register.php */
    

?>