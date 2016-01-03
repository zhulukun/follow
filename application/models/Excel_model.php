<?php

    class Excel_model extends CI_Model {  
                              
        function __construct()  
        {  
            parent::__construct();
             $this->load->database();
        }  

        function get()
        {
          return $this->db->get('yl_follow');
        }
                    
     
    }

?>