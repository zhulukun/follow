<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type:text/html; charset=utf-8');//使用gb2312编码，使中文不会变成乱码    

class AddUser extends CI_Controller {
	
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
	public function index()
	{
		//convert json to array

		//file_get_contents("php://input") Analysis the JSON from of the front end 

		$this->load->library('session');
		
		$post = (array)json_decode(file_get_contents("php://input"));

		$id=md5(uniqid(md5(microtime(true)),true));
		$nickname=$post['nickname'];
		$password=$post['password'];
		
    	$this->load->model('Admin_model');

    	$query = $this->Admin_model->get($nickname);  

    	if($query->num_rows()>=1)
    	{
    		$callback['status']='exists';
    		echo json_encode($callback);
    		return;
    	}

    		$query = $this->Admin_model->insert($id,$nickname,$password);
    		if($query>0)
    		{
    			/*
    			* operate yl_user table set inviterNums+=1;
    			*
    			*/
    			$callback['status']='success';

    			echo json_encode($callback);
    			return;


    		}  

    	



		
	}
	
}
