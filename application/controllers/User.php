<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html; charset=utf-8');//使用gb2312编码，使中文不会变成乱码    

class User extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_gnicknamee/general/urls.html
	 */
	public function renew_password()
	{

		$this->load->library('session');
		$this->load->model('User_model');
		$post = (array)json_decode(file_get_contents("php://input"));

		$nickname=$post['nickname'];
		$password=$post['password'];

		if($this->User_model->renew_password($nickname,$password))
		{
			$callback['status']='ok';
			echo json_encode($callback);
			return;
		}

		$callback['status']='fail';
		echo json_encode($callback);
		return;
	}

	public function update_password()
	{
		$this->load->helper('url');
	    $this->load->library('session');

		$data['userinfo']=isset($_SESSION['username'])?$_SESSION['username']:'';
		$this->load->view('update_password',$data);

	}
	
}
