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


	public function index()  //llama al metodo del controlador mediante http://bingo_kata.com/
	{
		$this->load->helper('url');   //define base_url()
		$this->load->view('welcome_message');  //carga la pagina principal
		$this->load->model('numbers_model');   //carga la clase numbers 
		$numbers = $this->numbers_model->create();   //crea los numeros del bingo que se llaman
	}

	public function bingo_card()
	{
		$this->load->helper('url');
		$bingo_card = $this->bingocard_model->create();   //crea la tarjeta de bingo
		$this->load->view('welcome_message');
		$this->bingocard_model->print_card($bingo_card);   //imprime la tarjeta bingo
	}

	public function call_number()
	{
		$this->load->helper('url');
		$this->load->model('numbers_model');
		$this->load->model('bingocard_model');
		$this->load->view('welcome_message');
		$this->bingocard_model->print_card($bingo_card);
		$this->numbers_model->call_number();   //llama al siguiente numero en la lista del bingo
	}


}
