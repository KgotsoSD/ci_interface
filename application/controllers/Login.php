<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller
{

     public function __contruct()
     {
         parent::construct();
         $this->load->library('form_validation');
         $this->load->library('encrypt');
         $this->load->model('login_model');


        
     }
     function index()
     {
         $this->load->view('login');

     }
     
     function validation()
     {
         $this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email');
         $this->form_validation->set_rules('user_password','Password','required');

         if ($this->form_validation->run())
         {
             $result=$this->login_model->can_login($this->input->post('user_email'),$this->input->post('user_password'));
             if ($result=='')
             {
                 redirect('private_area');

             }
             else
             {
               $this->session->set_flashdata('message',$result);
               redirect('login');

             }

         }
         else
         {
         $this->index();
         }
     }
}
?>