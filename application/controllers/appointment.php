<?php
class Appointment extends CI_Controller {
    
public function __construct()
	{
	
		parent::__construct();
		session_start();
		$this->load->helper(array('form','url'));
        $this->load->library('form_validation');
		
	}
	
	public function index($page = 'home')
	{
	$this->load->library('pagination');
	$this->load->library('table');
	
	$this->load->model('appointment_model');
    $data['search']= $this->appointment_model->search();
	// not working
	$config['base_url']='http://localhost:81/CodeIgniter/index.php/appointment/index';
	$config['total_rows']=$this->get($data['search'])->num_rows();
	$config['per_page']=2;
	$config['num_links']=29;  
	
	$this->pagination->initialize($config);
	$data['records']=$this->db->get($data['search'],$config['per_page'],$this->uri->segment(3));
	
	$data['title'] = ucfirst($page);
	$data['main_content'] = 'pages/A_Date_Doctor';
	$this->load->view('templates/template',$data); 
	}

	

public function create_appointment() //for inserting appointment later
 {

 $this->form_validation->set_rules('', '','required');  
$this->form_validation->set_rules('', '','required');
 $this->form_validation->set_rules('', '','required');  
$this->form_validation->set_rules('', '','required');

if( $this->form_validation->run()==false)
{
$this->index();  
}
else{
$this->load->model('appointment_model'); 
if($query= $this->appointment_model->insert_appointment()) 
{
redirect('thank_you/index');
}
else{
$this->index();
}
}
 }
 



}
?>