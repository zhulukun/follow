<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchValid extends CI_Controller {

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

		$searchinfo=$_POST['searchinfo'];
		$searchtype=$_POST['searchtype'];

		$this->load->model('Follow_model');
		if ($searchtype === '跟台人员') {
			$arr=$this->Follow_model->get_followitem_by_name($searchinfo);

		}

		if ($searchtype === '日期') {

			$arr=$this->Follow_model->get_followitem_by_date($searchinfo);

		}

		if ($searchtype === '医院名称') {

			$arr=$this->Follow_model->get_followitem_by_hospital($searchinfo);

		}

		if ($searchtype === '主刀医生') {

			$arr=$this->Follow_model->get_followitem_by_doctor($searchinfo);

		}

		if ($searchtype === '手术部位') {

			$arr=$this->Follow_model->get_followitem_by_optsite($searchinfo);

		}

		if ($searchtype === '年龄') {

			$arr=$this->Follow_model->get_followitem_by_age($searchinfo);

		}

        $data['arr']=$arr;
		$this->load->view('history',$data);
	}
}
