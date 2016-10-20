<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pertama extends CI_Controller{
	
	public function index()
	{
		echo "Belajar CodeIgniter";
	}

	public function kedua($nama,$usia)
		{
		echo "Nama saya {$nama} usia {$usia} <br />";
		}
}