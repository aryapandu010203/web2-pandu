<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Home',
		];

		$this->load->view('home_vw', $data);
	}

	public function  celana()
	{
		$data['meta'] = [
			'title' => 'Celana',
		];
		$this->load->view('celana_vw', $data);
	}

	public function jaket()
	{
		$data['meta'] = [
			'title' => 'Jaket',
		];
		$this->load->view('Jaket_vw', $data);
	}
}
