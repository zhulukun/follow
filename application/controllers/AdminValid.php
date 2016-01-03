<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminValid extends CI_Controller {

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
		$post = (array)json_decode(file_get_contents("php://input"));

		$username=$post['username'];
		$password=$post['password'];

		$this->load->model('Admin_model');

      	$bool = $this->Admin_model->valid($username,$password);
      	if(!$bool)
      	{
			$callback['status']='invalid';
			echo json_encode($callback);
			return;
		}

		$this->session->set_userdata('admin',$username);
		$callback['status']='valid';
		echo json_encode($callback);
		return;
	}
}
