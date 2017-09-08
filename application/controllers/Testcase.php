<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testcase extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
	
	parent::__construct();
	$this->load->model('lead_model');
	
	} 


	public function index()
	{

		
		$data['first_name']		=	'Test';
		$data['last_name']		=	'Test last';
		$data['email_address']	=	'testcase@gmail.com';
		$data['phone_number']	=	'123456789';
		$data['address']		=	'test address';
		$data['home_sqf']		=	'123';
		$data['date_added']		=	time();

		$id 	=	$this->lead_model->insert_array('leads',$data);
		echo "<p style='color:blue; font-weight:bold;font-size:20px;'>Test Case For Lead Insertion</p>";

		if($id>0){

			echo "Status: <span style='color:green; font-weight:bold;font-size:20px;'>Passed</span>";
			echo "</br>";
			echo "<p><strong>Your Test record are</strong></p>";
			echo "</br>";
			echo "<p><strong>First Name</strong>= Test</p>";
			echo "</br>";
			echo "<p><strong>Email Address</strong>= testcase@gmail.com</p>";
			echo "</br>";
			echo "<p><strong>Phone Number</strong>= 123456789</p>";
			echo "</br>";
			echo "<p><strong>Address</strong>= test address</p>";
			echo "</br>";
			echo "<p><strong>Home Squre Footage</strong>= 123</p>";
			echo "</br>";
			echo "<p><strong>Date Inserted</strong>= '".date('Y-m-d',time())."'</p>";

			$this->lead_model->delete_where(array('id'=>$id),'leads');

		}else{
			echo "Status: <span style='color:red; font-weight:bold;font-size:20px;'>Passed</span>";
			echo "</br>";
			echo "<p><strong>Error:</strong>Database are not configure properly</p>";

		}

		exit;
	}

	

}
