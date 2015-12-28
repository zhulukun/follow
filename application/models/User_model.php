<?php

    class User_model extends CI_Model {  
                              
        function __construct()  
        {  

            parent::__construct();
            $this->load->database(); 
        }

        /**
         * get user_id by the username  
         *
         * @param $username
         * @return $user_id
         *
         */
        function get_user_id($username)
        {
          $query=$this->db->query("SELECT id FROM yl_user WHERE nickname='{$username}'");

          $arr=array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);

                     }

              }

          return $arr[0]['id'];
        }

        function get($username)
        {            
             $query=$this->db->query("select * from yl_user where nickname='{$username}'");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);

                     }

              }
              
            return $arr;
        }

       function getHistory($nickname)
       {
            $query=$this->db->query("select id,date,nickname,hospital from yl_follow where nickname='{$nickname}' order by date desc");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);
                        
                     }

              }
            return $arr;
       }

        function getHistoryInfo($id)
       {
            $query=$this->db->query("select * from yl_follow where id='{$id}'");  

             $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);

                     }

              }
            return $arr;
       }

        function insert($id,$user_id,$nickname,$username,$date,$hospital,$department,$doctorName,$assistantName,$medicalRecordNo,$patientName,$patientAge,$patientSex,$diagnosis,$operationName,$optStartTime,$optEndTime,$optSite,$optroute,$optsegement,$cuteBoneSegment,$cbStartTime,$cbEndTime,$powerStall,$flowStall,$pulseStall,$knife1UseStyle,$knife1type,$knife2UseStyle,$knife2type,$knife3UseStyle,$knife3type,$bloodingSize,$selfBloodReturnSize,$bloodInSize,$putamenHarm,$putamenHarmReason,$cerebroLeakage,$cerebroLeakageReason,$nerveHurt,$nerveHurtReason,$elecPhyTest,$elecPhyTestReason,$optAwaken,$optAwakenReason,$knifeAbrasion,$knifeAbrasionReason,$otherException,$followCommit,$doctorSugest,$beforImage,$middleImage)
        {
            $this->db->query("insert into yl_follow(id,user_id,nickname,username,date,hospital,department,doctorName,assistantName,medicalRecordNo,patientName,patientAge,patientSex,diagnosis,operationName,optStartTime,optEndTime,optSite,optroute,optsegement,cuteBoneSegment,cbStartTime,cbEndTime,powerStall,flowStall,pulseStall,knife1UseStyle,knife1type,knife2UseStyle,knife2type,knife3UseStyle,knife3type,bloodingSize,selfBloodReturnSize,bloodInSize,putamenHarm,putamenHarmReason,cerebroLeakage,cerebroLeakageReason,nerveHurt,nerveHurtReason,elecPhyTest,elecPhyTestReason,optAwaken,optAwakenReason,knifeAbrasion,knifeAbrasionReason,otherException,followCommit,doctorSugest,beforImage,mideleImage) values('{$id}','{$user_id}','{$nickname}','{$username}','{$date}','{$hospital}','{$department}','{$doctorName}','{$assistantName}','{$medicalRecordNo}','{$patientName}',$patientAge,'{$patientSex}','{$diagnosis}','{$operationName}','{$optStartTime}','{$optEndTime}','{$optSite}','{$optroute}','{$optsegement}','{$cuteBoneSegment}','{$cbStartTime}','{$cbEndTime}','{$powerStall}','{$flowStall}','{$pulseStall}','{$knife1UseStyle}','{$knife1type}','{$knife2UseStyle}','{$knife2type}','{$knife3UseStyle}','{$knife3type}','{$bloodingSize}','{$selfBloodReturnSize}','{$bloodInSize}','{$putamenHarm}','{$putamenHarmReason}','{$cerebroLeakage}','{$cerebroLeakageReason}','{$nerveHurt}','{$nerveHurtReason}','{$elecPhyTest}','{$elecPhyTestReason}','{$optAwaken}','{$optAwakenReason}','{$knifeAbrasion}','{$knifeAbrasionReason}','{$otherException}','{$followCommit}','{$doctorSugest}','{$beforImage}','{$middleImage}')");
            return $this->db->affected_rows();
        }


        function valid($username,$password)  
        {  
           $query=$this->db->query('select * from yl_user where nickname="'.$username.'" and password="'.$password.'"');
           if($query->num_rows()>0)
           {
                return true;
           }
           return false;
        }  
    }

?>
