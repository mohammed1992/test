<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserInfo');
	}
	public function index()
	{
		$data['uList']=$this->UserInfo->Get_all_user();
		$this->load->view('userInfoview',$data);
	}
	public function addu()
	{		
		$this->load->view('myform');
	}
	public function add()
	{
		$username = $this->input->post('username');
		$city = $this->input->post('city');	
		$this->UserInfo->add_user($username,$city);
		redirect('User');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
