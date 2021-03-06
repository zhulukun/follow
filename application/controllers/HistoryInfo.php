<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoryInfo extends CI_Controller {

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
		$id=$this->uri->segment(4,0);
		$this->load->model('User_model');
		
      	$arr = $this->User_model->getHistoryInfo($id);
      	$data['arr']=$arr;
      	if ($this->User_model->is_can_update($id))
      	{
      		$this->load->view('historyInfo_update',$data);
      	}
      	else
      	{
      		$this->load->view('historyInfo',$data);
      	}
		
	}

	
}
