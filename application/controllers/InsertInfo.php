<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertInfo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_gnicknamee/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
		  if (!isset($_SESSION['username'])) {
	    	# code...
	    	$callback['status']='invalid';
			echo json_encode($callback);
			return;
	    }
		$this->load->model('User_model');
		$post = (array)json_decode(file_get_contents("php://input"));
		$id=md5(uniqid(md5(microtime(true)),true));
		//print_r($arr);
		$user_id=$_SESSION['user_id'];
		$nickname=$_SESSION['username'];

		$username=$post['username'];
		$date=$post['date'];
		$hospital=$post['hospital'];
		$department=$post['department'];
		$doctorName=$post['doctorName'];
		$assistantName=$post['assistantName'];
		$medicalRecordNo=$post['medicalRecordNo'];
		$patientName=$post['patientName'];
		$patientAge=$post['patientAge'];
		$patientSex=$post['patientSex'];
		$diagnosis=$post['diagnosis'];
		$operationName=$post['operationName'];
		$optStartTime=$post['optStartTime'];
		$optEndTime=$post['optEndTime'];
		$optSite=$post['optSite'];
		$optroute=$post['optroute'];
		$optsegement=$post['optsegement'];
		$cuteBoneSegment=$post['cuteBoneSegment'];
		$cbStartTime=$post['cbStartTime'];
		$cbEndTime=$post['cbEndTime'];
		$powerStall=$post['powerStall'];
		$flowStall=$post['flowStall'];
		$pulseStall=$post['pulseStall'];
		$knife1UseStyle=$post['knife1UseStyle'];
		$knife1type=$post['knife1type'];
		$knife2UseStyle=$post['knife2UseStyle'];
		$knife2type=$post['knife2type'];
		$knife3UseStyle=$post['knife3UseStyle'];
		$knife3type=$post['knife3type'];
		$bloodingSize=$post['bloodingSize'];
		$selfBloodReturnSize=$post['selfBloodReturnSize'];
		$bloodInSize=$post['bloodInSize'];
		$putamenHarm=$post['putamenHarm'];
		$putamenHarmReason=$post['putamenHarmReason'];
		$cerebroLeakage=$post['cerebroLeakage'];
		$cerebroLeakageReason=$post['cerebroLeakageReason'];
		$nerveHurt=$post['nerveHurt'];
		$nerveHurtReason=$post['nerveHurtReason'];
		$elecPhyTest=$post['elecPhyTest'];
		$elecPhyTestReason=$post['elecPhyTestReason'];
		$optAwaken=$post['optAwaken'];
		$optAwakenReason=$post['optAwakenReason'];
		$knifeAbrasion=$post['knifeAbrasion'];
		$knifeAbrasionReason=$post['knifeAbrasionReason'];
		$otherException=$post['otherException'];
		$followCommit=$post['followCommit'];
		$doctorSugest=$post['doctorSugest'];
		$beforImage=$post['beforImage'];
		$middleImage=$post['middleImage'];

		$result=$this->User_model->insert($id,$user_id,$nickname,$username,$date,$hospital,$department,$doctorName,$assistantName,$medicalRecordNo,$patientName,$patientAge,$patientSex,$diagnosis,$operationName,$optStartTime,$optEndTime,$optSite,$optroute,$optsegement,$cuteBoneSegment,$cbStartTime,$cbEndTime,$powerStall,$flowStall,$pulseStall,$knife1UseStyle,$knife1type,$knife2UseStyle,$knife2type,$knife3UseStyle,$knife3type,$bloodingSize,$selfBloodReturnSize,$bloodInSize,$putamenHarm,$putamenHarmReason,$cerebroLeakage,$cerebroLeakageReason,$nerveHurt,$nerveHurtReason,$elecPhyTest,$elecPhyTestReason,$optAwaken,$optAwakenReason,$knifeAbrasion,$knifeAbrasionReason,$otherException,$followCommit,$doctorSugest,$beforImage,$middleImage);
		if($result>0)
		{
			$callback['status']='valid';
			echo json_encode($callback);
			return;
		}

	}
}
