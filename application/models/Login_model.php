<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
       $this->db->where('email',$email);
       $query=$this->db->get('codeigniter_register');
       if($query->num_rows()>0)
       {
           foreach($query->result() as $row)
                if($row->is__email_verified=='yes')
                {
                    $store_password=$this->encrypt->decode($row->password);
                    if($password== $store_password)
                    {
                        $this->session->set_user_data('id',$row->id);
                    }
                    else
                    {
                       return 'Wrong Password';
                    }
                }

                else
                {
                      return 'First verified your email address';
                
                }

        }
    }
}
?>