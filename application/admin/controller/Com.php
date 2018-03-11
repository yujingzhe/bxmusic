<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Com extends Controller
{
	public function base()
	{
		$view = new View();
		return $view->fetch();	
	}

	public function login()
	{
		$view = new View();
		return $view->fetch();
	}

	public function cuowu()
	{
		$view = new View();
		return $view->fetch();
	}

	public function exception()
	{
		$view = new View();
		return $view->fetch();
	}

	public function map()
	{
		$view = new View();
		return $view->fetch();
	}

	public function chenggong()
	{
		$view = new View();
		return $view->fetch();
	}

	public function user()
	{
		$view = new View();
		return $view->fetch();
	}

}