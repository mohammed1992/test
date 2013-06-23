<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class userInfo extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	public function Get_all_user()
	{
		//$query = $this->db->get('userInfo');

		/*$this->db->group_by('name'); 
		$query = $this->db->get('userInfo');*/

		/*$this->db->order_by('name','desc '); 
		$query = $this->db->get('userInfo');*/

		$this->db->limit(1); 		
		$query = $this->db->get('userInfo');
		echo $this->db->count_all_results();

		/*$this->db->like('name', 'حمد', 'before'); 
		$this->db->like('name', 'حمد', 'after'); 
		$this->db->like('name', 'حمد', 'both'); 
		$this->db->like('name', 'حمد', 'non'); 
		$query = $this->db->get('userInfo');*/

		/*$this->db->like('name', 'حمد'); 
		$query = $this->db->get('userInfo');*/

		/*$this->db->not_like('name', 'حمد'); 
		$query = $this->db->get('userInfo');*/

		/*$this->db->like('name', 'حمد'); 
		$this->db->or_like('name', 'ed', 'before'); 
		$query = $this->db->get('userInfo');*/

		/*$names = array('ali', 'mohammed', 'احمد');
		$this->db->where_not_in('name', $names);
		$query = $this->db->get('userInfo');*/

		/*$names = array('ali', 'mohammed');
		$this->db->or_where_in('name', $names);
		$query = $this->db->get('userInfo');*/

		/*$this->db->where('name !=', 'ali');
		$this->db->where('id >' ,2);
		$query = $this->db->get('userInfo');*/
		
		//$query = $this->db->get('userInfo',2,1);
		//$query = $this->db->get_where('userInfo',array('id' => 1));

		/*$this->db->select('name,city');
		$query = $this->db->get('userInfo');*/

		/*$this->db->select_max('id');
		$query = $this->db->get('userInfo');*/

		/*$this->db->select('name,city');
		$this->db->from('userInfo');
		$query = $this->db->get();*/

		/*$str = $this->db->last_query();
		echo $str;*/


		return $query->result(); 
	}
	public function add_user($username,$city)
	{
		$data = array(
		   'name' => $username ,
		   'city' => $city 
		);

		$this->db->insert('userInfo', $data); 

	}

}

/* End of file get_all_user.php */
/* Location: ./application/models/get_all_user.php */