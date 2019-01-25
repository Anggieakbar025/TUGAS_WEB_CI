<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
    
        public function index()
        {
            $this->load->model('Model_user');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) 
            {
                $this->load->view('login/login_view');
            } 
            else 
            {
                
                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));
    
                $where = array('username' => $username, 'password' => $password);            
                $cek = $this->Model_user->cekLogin($where);
                if ($cek > 0) 
                {    
                    $data_session = array(
                                    'status' => 'logged in'
                                );
                    
                    
                    $this->session->set_userdata($data_session);
                                                    
                    redirect('Welcome/index');
                    
                } else {
                    
                    $this->session->set_flashdata('pesan', '<strong>salah..</strong>');
                    
                    redirect('Login/index');
                       
                }
            }
               
        }

        public function logout()
        {
            $this->session->sess_destroy();
            
            redirect('Login/index');
        }
    
    }
    
    /* End of file Login.php */
    


?>