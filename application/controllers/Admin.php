<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
      {
          parent::__construct(); 
          $this->load->library('form_validation');
          $this->load->library('encryption');
          $this->load->model('admin_model');
          $this->load->database();

      }

    public function index()
    {$this->load->view('admin');
      


      /*  if($this->input->post())
       {
           $email=$this->input->post('user_email');
           $password=md5($this->input->post('password'));

           $result = $this->db->get_where('codeiniter_register',array('user_email'=>$email, 'password'=>$password,'account_status'=>1, 'role'=>'Admin'))->result_array();
           $uid =$result[0]['id'];
           $user_name=$result[0]['user_name'];
           $password=$reslut[0]['password'];
           $email=$result[0]['user_email']; 
           
           $this->session->set_userdata('admin_id',$uid);
           $this->session->set_userdata('user_name',$email);
           $this->session->set_userdata('password',$password);
       
        }

       if ($this->session->userdata['admin_id']){
           //redirect to dashboard
           $page_data['page_title']="Dashboard";
           $page_data['page']='dashboard';
           $this->load->view('admin',$page_data);
   
           
       }
       else
       {
           $page_data['page_title']="Login Admin";
           $this->load->view('admin',$page_data);
       
        }
       

        $page_data['page_title']="Home Page";
        $page_data['page']='home';
        $this->load->view('admin',$page_data);

     */   
    }

    /*

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }


    public function validation()
    {

    }
}
*/
}