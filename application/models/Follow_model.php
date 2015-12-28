<?php

    class Follow_model extends CI_Model {  
                              
        function __construct()  
        {  
            parent::__construct();
             $this->load->database(); 
           //  mysqli_query("SET NAMES GBK",true); //防止中文乱码 


        }

        /**
         * get info by follow_name
         * 
         * @param nickname
         * @return array
         */
        function get_followitem_by_name($nickname)
        {
            $query=$this->db->query("SELECT id,date,nickname,hospital from yl_follow where nickname='{$nickname}' order by date DESC ");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);
                        
                     }

              }
            return $arr;
        }
        
        /**
         * get info by date
         * 
         * @param date
         * @return array
         */
        function get_followitem_by_date($date)
        {
           
            $arr = explode(' ',$date);
            $start_date=strtotime($arr[0]);
            $end_date=strtotime($arr[1]);
           
            $query=$this->db->query("select id,date,nickname,hospital from yl_follow order by date desc");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {
                   if (strtotime($row['date'])>=$start_date && strtotime($row['date'])<=$end_date) {
                       array_push($arr, $row);
                   }
                        
                        
                     }

              }
            return $arr;
        }

         /**
         * get info by age
         * 
         * @param age
         * @return array
         */
        function get_followitem_by_age($age)
        {
           
            $arr = explode(' ',$age);
            $start_age=$arr[0];
            $end_age=$arr[1];
           
            $query=$this->db->query("select id,date,nickname,hospital from yl_follow where patientAge between {$start_age} and {$end_age}  order by date desc");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {
                    
                       array_push($arr, $row);                        
                     }

              }
            return $arr;
        }


        /**
         * get info by hospital
         * 
         * @param date
         * @return array
         */
        function get_followitem_by_hospital($hospital)
        {
            $query=$this->db->query("select id,date,nickname,hospital from yl_follow where hospital='{$hospital}' order by date desc");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);
                        
                     }

              }
            return $arr;
        }              
         /**
         * get info by doctor
         * 
         * @param doctor
         * @return array
         */
        function get_followitem_by_doctor($doctor)
        {
            $query=$this->db->query("select id,date,nickname,hospital from yl_follow where doctorName='{$doctor}' order by date desc");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);
                        
                     }

              }
            return $arr;
        }              
        /**
         * get info by optsite
         * 
         * @param doctor
         * @return array
         */
        function get_followitem_by_optsite($optsite)
        {
            $query=$this->db->query("select id,date,nickname,hospital from yl_follow where optSite='{$optsite}' order by date desc");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);
                        
                     }

              }
            return $arr;
        }           

        //执行获取数据操作  
        function get($nickname)  
        {  
            $query = $this->db->query('select nums from yl_user where nickname="'.$nickname.'" order by date desc');
            foreach ($query->result() as $row)
                {
                    return $row->nums;
                }

        }  
        
        
        //执行添加数据操作  
        function insert($nickname,$prize)  
        {  
            $data = array(
                'nickname' => $nickname,
                'prize' => $prize,
            );
           $this->db->insert('yl_prize', $data);
           return $this->db->affected_rows();

        }  
                              
                              
        //执行更新数据操作  
        function update($nickname,$nums)  
        {
             $data = array(
                'nums' => $nums,
            );

            $this->db->where('nickname',$nickname);
           return $this->db->update('yl_user', $data);

        }  
                            
                            
        //执行删除数据操作  
        function delete()  
        {  
        //代码省略……  
        }  
    }

?>