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

       function is_can_update($id)
       {
          $query=$this->db->query("SELECT updatetime FROM yl_follow WHERE id='{$id}'");
          $arr =array();

            if($query->num_rows() > 0){

                foreach ($query->result_array() as $row) {

                        array_push($arr, $row);

                     }

              }
          if (count($arr)==0) 
          {
              return FALSE;
          }
          
           if(strtotime("now") - strtotime($arr[0]['updatetime'])<60*60*24*2)
           {
                return TRUE;
           }

           return FALSE;
       }

        function insert($id,$user_id,$nickname,$username,$date,$hospital,$department,$doctorName,$assistantName,$medicalRecordNo,$patientName,$patientAge,$patientSex,$diagnosis,$operationName,$optStartTime,$optEndTime,$optSite,$optroute,$optsegement,$cuteBoneSegment,$cbStartTime,$cbEndTime,$powerStall,$flowStall,$pulseStall,$knife1UseStyle,$knife1type,$knife2UseStyle,$knife2type,$knife3UseStyle,$knife3type,$bloodingSize,$selfBloodReturnSize,$bloodInSize,$putamenHarm,$putamenHarmReason,$cerebroLeakage,$cerebroLeakageReason,$nerveHurt,$nerveHurtReason,$elecPhyTest,$elecPhyTestReason,$optAwaken,$optAwakenReason,$knifeAbrasion,$knifeAbrasionReason,$otherException,$followCommit,$doctorSugest,$beforImage,$middleImage)
        {
            $this->db->query("insert into yl_follow(id,user_id,nickname,username,date,hospital,department,doctorName,assistantName,medicalRecordNo,patientName,patientAge,patientSex,diagnosis,operationName,optStartTime,optEndTime,optSite,optroute,optsegement,cuteBoneSegment,cbStartTime,cbEndTime,powerStall,flowStall,pulseStall,knife1UseStyle,knife1type,knife2UseStyle,knife2type,knife3UseStyle,knife3type,bloodingSize,selfBloodReturnSize,bloodInSize,putamenHarm,putamenHarmReason,cerebroLeakage,cerebroLeakageReason,nerveHurt,nerveHurtReason,elecPhyTest,elecPhyTestReason,optAwaken,optAwakenReason,knifeAbrasion,knifeAbrasionReason,otherException,followCommit,doctorSugest,beforImage,mideleImage) values('{$id}','{$user_id}','{$nickname}','{$username}','{$date}','{$hospital}','{$department}','{$doctorName}','{$assistantName}','{$medicalRecordNo}','{$patientName}',$patientAge,'{$patientSex}','{$diagnosis}','{$operationName}','{$optStartTime}','{$optEndTime}','{$optSite}','{$optroute}','{$optsegement}','{$cuteBoneSegment}','{$cbStartTime}','{$cbEndTime}','{$powerStall}','{$flowStall}','{$pulseStall}','{$knife1UseStyle}','{$knife1type}','{$knife2UseStyle}','{$knife2type}','{$knife3UseStyle}','{$knife3type}','{$bloodingSize}','{$selfBloodReturnSize}','{$bloodInSize}','{$putamenHarm}','{$putamenHarmReason}','{$cerebroLeakage}','{$cerebroLeakageReason}','{$nerveHurt}','{$nerveHurtReason}','{$elecPhyTest}','{$elecPhyTestReason}','{$optAwaken}','{$optAwakenReason}','{$knifeAbrasion}','{$knifeAbrasionReason}','{$otherException}','{$followCommit}','{$doctorSugest}','{$beforImage}','{$middleImage}')");
            return $this->db->affected_rows();
        }


        //判断用户名密码是否合法
        function valid($username,$password)  
        {  
           $query=$this->db->query('select * from yl_user where nickname="'.$username.'" and password="'.$password.'"');
           if($query->num_rows()>0)
           {
                return true;
           }
           return false;
        } 


        //更改跟台信息
        function update($id,$nickname,$username,$date,$hospital,$department,$doctorName,$assistantName,$medicalRecordNo,$patientName,$patientAge,$patientSex,$diagnosis,$operationName,$optStartTime,$optEndTime,$optSite,$optroute,
          $optsegement,$cuteBoneSegment,$cbStartTime,$cbEndTime,$powerStall,$flowStall,$pulseStall,
          $knife1UseStyle,$knife1type,$knife2UseStyle,$knife2type,$knife3UseStyle,$knife3type,
          $bloodingSize,$selfBloodReturnSize,$bloodInSize,$putamenHarm,$putamenHarmReason,$cerebroLeakage,$cerebroLeakageReason,
          $nerveHurt,$nerveHurtReason,$elecPhyTest,$elecPhyTestReason,$optAwaken,$optAwakenReason,$knifeAbrasion,$knifeAbrasionReason,$otherException,$followCommit,$doctorSugest)
        {
            $query=$this->db->query("UPDATE yl_follow SET nickname='{$nickname}',username='{$username}',date='{$date}',optSite='{$optSite}',hospital='{$hospital}',department='{$department}',doctorName='{$doctorName}',assistantName='{$assistantName}',medicalRecordNo='{$medicalRecordNo}',patientName='{$patientName}',patientAge={$patientAge},patientSex='{$patientSex}',diagnosis='{$diagnosis}',operationName='{$operationName}',optStartTime='{$optStartTime}',optEndTime='{$optEndTime}',optroute='{$optroute}',optsegement='{$optsegement}',cuteBoneSegment='{$cuteBoneSegment}',cbStartTime='{$cbStartTime}',cbEndTime='{$cbEndTime}',powerStall='{$powerStall}',flowStall='{$flowStall}',pulseStall='{$pulseStall}',knife1UseStyle='{$knife1UseStyle}',knife1type='{$knife1type}',knife2UseStyle='{$knife2UseStyle}',knife2type='{$knife2type}',knife3UseStyle='{$knife3UseStyle}',knife3type='{$knife3type}',bloodingSize='{$bloodingSize}',selfBloodReturnSize='{$selfBloodReturnSize}',bloodInSize='{$bloodInSize}',putamenHarm='{$putamenHarm}',putamenHarmReason='{$putamenHarmReason}',cerebroLeakage='{$cerebroLeakage}',cerebroLeakageReason='{$cerebroLeakageReason}',nerveHurt='{$nerveHurt}',nerveHurtReason='{$nerveHurtReason}',elecPhyTest='{$elecPhyTest}',elecPhyTestReason='{$elecPhyTestReason}',optAwaken='{$optAwaken}',optAwakenReason='{$optAwakenReason}',knifeAbrasion='{$knifeAbrasion}',knifeAbrasionReason='{$knifeAbrasionReason}',otherException='{$otherException}',followCommit='{$followCommit}',doctorSugest='{$doctorSugest}' WHERE id='{$id}'");
            
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else
            {
              return FALSE;
            }
        } 

        //用户更改密码
        function renew_password($nickname,$re_password)
        {
          $query=$this->db->query("UPDATE yl_user SET password='{$re_password}' WHERE nickname='{$nickname}'");
          if ($this->db->affected_rows()>0) 
          {
            return TRUE;
          }

          return FALSE;
        }

    }

?>
