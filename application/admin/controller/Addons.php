<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Addons extends Controller
{
	public function adminlist()
	{
		$view = new View();
		return $view->fetch();
	}

	public function configa()
	{
		$view = new View();
		return $view->fetch();
	}
		
	public function create()
	{
		$view = new View();
		return $view->fetch();
	}
	
	public function edit()
	{
		$view = new View();
		return $view->fetch();
	}
		
	public function edithook()
	{
		$view = new View();
		return $view->fetch();
	}

	public function hooks()
	{
		$view = new View();
		return $view->fetch();
	}
		
	public function index()
	{
		$view = new View();
		return $view->fetch();
	}		


}