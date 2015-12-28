<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{

			
		$action =$this->uri->segment(4,0);
		$action1 =$this->uri->segment(3,0);
		echo $action1;
		if($action=='delimg')
		{
			$filename = $post['imagename'];
			if(!empty($filename))
			{
				unlink('uploads/'.$filename);
				echo '1';
			}
			else
			{
				echo '删除失败.';
			}
		}
		else{
				$picname = $_FILES['mypic']['name'];
				$picsize = $_FILES['mypic']['size'];
				if ($picname != "") {
					if ($picsize > 1024000*5) {
						echo '图片大小不能超过5M';
						exit;
					}
					$type = strstr($picname, '.');
					if ($type != ".gif" && $type != ".jpg" && $type != ".png") {
						echo '图片格式不对！';
						exit;
					}
					$rand = rand(100, 999);
					$pics = date("YmdHis") . $rand . $type;
					//上传路径
					$pic_path = "files/". $pics;
					move_uploaded_file($_FILES['mypic']['tmp_name'], $pic_path);
								}
					$size = round($picsize/1024,2);
					$arr = array(
						'name'=>$picname,
						'pic'=>$pics,
						'size'=>$size
					);
					echo json_encode($arr);
				}
			}
	
}

