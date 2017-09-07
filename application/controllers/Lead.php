<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Controller {

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

		$this->form_validation->set_rules('first_name','First Name','trim|required|max_length[70]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|max_length[70]');
		$this->form_validation->set_rules('email_address','Email Address','required|valid_email|callback_check_unique');
		$this->form_validation->set_rules('phone_number','Phone Number','required');
		$this->form_validation->set_rules('address','Address','required');	
		$this->form_validation->set_rules('home_sqf','Home square footage','required');	
	
		if($this->form_validation->run()==false)
		{
		
		$this->load->view('generate-lead');
		}
		else
		{
			
		$data['first_name']		=	$this->input->post('email_address');
		$data['last_name']		=	$this->input->post('last_name');
		$data['email_address']	=	$this->input->post('email_address');
		$data['phone_number']	=	$this->input->post('phone_number');
		$data['address']		=	$this->input->post('address');
		$data['home_sqf']		=	$this->input->post('home_sqf');
		$data['date_added']		=	time();

		$this->lead_model->insert_array('leads',$data);
		$this->session->set_userdata('sessionMessage','successfully submited your lead');
		header('location:'.base_url().'lead');
		
		}

		
	}

	function check_unique(){
						
	$email		=	$this->input->post('email_address');
	$check		=	$this->lead_model->get_where('email_address',$email,'leads');
		if($check->num_rows()>0)
		{
		$this->form_validation->set_message('check_unique','This email already exist');
		return false;
		}
		else
		{
		return true;
		}
	
	}

	function lead_listing(){

	$data['record']	=	$this->lead_model->select_all('*','leads');	
	$this->load->view('lead_listing',$data);

	}

	function detail($id){

	$data['record']	=	$this->lead_model->select_where('*','leads',array('id'=>$id));	
	$this->load->view('detail',$data);

	}



}
