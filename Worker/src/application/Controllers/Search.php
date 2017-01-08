<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	
	public function index()
	{
		$this->load->view("search");
		$name = $this->input->post("name");
		$this->load->library("Gracenote");
		$this->library->Gracenote->register();
		echo "Done";
	}
}