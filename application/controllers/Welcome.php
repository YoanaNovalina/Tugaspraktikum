<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_pertama');
	}
	public function index()
	{
		$data = $this->model_pertama->getdata();
		foreach( $data as $toko){
			echo $toko->id."<b> | </b>";
			echo $toko->nama."<b> | </b>";
			echo $toko->alamat."<b> | </b>";
			echo $toko->tgl_lahir."<br>";
		}
	}
}
