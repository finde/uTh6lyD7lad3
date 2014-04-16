<?php

class Contact extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('contact-name', 'Your Name', 'required');
		$this->form_validation->set_rules('contact-email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('contact-subject', 'Subject', 'required');
		$this->form_validation->set_rules('inputMessage', 'Message', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			 $this->index();
		}
		else
		{
		 $this->load->model('mailer');          
        $res = $this->mailer->message();
		$this->load->view('pages/thanks_contact');
		}
	}
}
?>