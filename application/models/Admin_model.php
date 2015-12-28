<?php

    class Admin_model extends CI_Model {  
                              
        function __construct()  
        {  
            parent::__construct();
             $this->load->database(); 
        }  

        //identify  
        function valid($username,$password)  
        {  
        
           $query=$this->db->query('select * from yl_admin where username="'.$username.'" and password="'.$password.'"');
           if($query->num_rows()>0)
           {
                return true;
           }
           return false;

        }  

         function get($nickname)  
        {  
            return $this->db->query('select id from yl_user where nickname="'.$nickname.'"');
        }  

        function insert($id,$nickname,$password)  
        {  
            $data = array(
                'id' => $id,
                'nickname' => $nickname,
                'password' => $password,
            );
           $this->db->insert('yl_user', $data);
           return $this->db->affected_rows();

        }  
                    
     
    }

?>