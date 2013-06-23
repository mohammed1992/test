<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestDatatMepper extends CI_Controller {

	public function index()
	{
		$test = new Test();
		/*$test->name='حازم';
		$test->city='غزة';
		$test->save();*/
		$data['uList']=$test->get();
		$this->load->view('userInfoview',$data);
	}

}

/* End of file testDatatMepper.php */
/* Location: ./application/controllers/testDatatMepper.php */