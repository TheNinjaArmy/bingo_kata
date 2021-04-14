<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	
    public $bingo_card = [];
    public $numbers = [];
    protected $numbers_called=0;


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
		$this->load->model('numbers_model');
		$numbers = $this->numbers_model->create();
	}

	public function bingo_card()
	{
		$this->load->helper('url');
		$bingo_card = [];
		$this->load->model('welcome_message');
		$bingo_card = $this->bingocard_model->create();
		$this->load->view('view_bingo_card');
		$this->bingocard_model->print_card($bingo_card);
	}

	public function call_number()
	{
		$this->load->helper('url');
		$this->load->model('numbers_model');
		$this->load->model('bingocard_model');
		$this->load->view('welcome_message');
		$this->bingocard_model->print_card($bingo_card);
		$this->numbers_model->call_number();
	}


}
