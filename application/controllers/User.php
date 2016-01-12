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
		$this->load->helper('url');
		$data['userinfo']=isset($_SESSION['username'])?$_SESSION['username']:'';
		$nickname=$_POST['nickname'];
		$oldpassword=$_POST['oldpassword'];
		$password=$_POST['password'];
		$repassword=$_POST['re_password'];

		$data['oldpassword']=$oldpassword;
		$data['password']=$password;
		$data['repassword']=$repassword;
		if (!$this->User_model->valid($nickname,$oldpassword)) {
			$data['error']='老密码不正确';
			$this->load->view('update_password',$data);
			return;
		}

		

		if ($password != $repassword) {
			$data['error']='新密码不一致';
			$this->load->view('update_password',$data);
			return;
		}

		if (empty($password)) {
			$data['error']='新密码不能为空';
			$this->load->view('update_password',$data);
			return;
		}

		if($this->User_model->renew_password($nickname,$password))
		{
			$data['error']='修改成功';
			$this->load->view('update_password',$data);
			return;
		}

		$data['error']='修改失败';
		$this->load->view('update_password',$data);
		return;

		
	}

	public function update_password()
	{
		$this->load->helper('url');
	    $this->load->library('session');

		$data['userinfo']=isset($_SESSION['username'])?$_SESSION['username']:'';
		$data['oldpassword']='';
		$data['password']='';
		$data['repassword']='';
		$data['error']='';
		$this->load->view('update_password',$data);

	}
	
}
