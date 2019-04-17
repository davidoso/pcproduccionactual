<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produccion extends CI_Controller {

	// Constructor para cargar el modelo principal
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produccion_m', 'pm');
	}

	// Mostrar página inicial/home con 4 tablas para mostrar los movimientos del día de hoy, ayer, mensual y anual acumulado
	public function index()
	{
		$this->load->view('home');
	}
}
?>