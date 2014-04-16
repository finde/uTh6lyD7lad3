<?php
class Pagination extends CI_Controller {
    
public function __construct()
	{
		parent::__construct();
		
	$this->load->library('calendar');			
	}

public function index()
	{
	$this->load->library('pagination');
	$this->load->library('table');
		
	$config['base_url']='http://localhost:81/jh/pagination/index';
	$config['total_rows']=$this->db->get('doctor')->num_rows();
	$config['per_page']=2;
	$config['num_links']=29;
	$config['full_tag_open']='<div id="pagination">';
	$config['full_tag_open']='</div>';
	
	$this->pagination->initialize($config);
	
	$data['records']=$this->db->get('doctor',$config['per_page'],$this->uri->segment(3));
	
	$this->load->view('pages/pagination_test',$data); 
	
}


function show_date($year=null,$month=null)
{
if(!$year){
$year=date('Y');
}
if(!$month){
$month=date('m');
}

$this->load->model('pagination_model'); 
if($this->input->post('day'))
{
$this->pagination_model->add_calendar_data(
"$year-$month-$day",
$this->input->post('data')
);

}
$data['calendar']= $this->pagination_model->generate($year,$month);
$this->load->view('pages/pagination_test',$data);

}




}
?>