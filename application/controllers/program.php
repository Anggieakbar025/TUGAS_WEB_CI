<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Program extends CI_Controller {
    
        public function index()
        {   
            $this->load->view('isi/viewprogram');
            
        }
        public function Register()
        {
            $this->load->view('login/register_view');
        }
    
    
    }
    
    /* End of file Program.php */
    

?>