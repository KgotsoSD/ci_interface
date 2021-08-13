<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_Model
{
   
    function insert($data)
    {
        $this->db->insert('admin',$data);
        return $this->db->insert_id();
        
        
    }
}