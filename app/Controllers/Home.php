<?php
namespace App\Controllers;
//this loads on: localhost:port or localhost:port/home or localhost:port/home/index
class Home extends BaseController {
	public function index()	{
		echo view('welcome_message');
	}
}
