<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Menu extends Controller
{
	public function edit()
	{
		$view = new View();
		return $view->fetch();
	}

	public function index()
	{
		$view = new View();
		return $view->fetch();
	}
	public function import()
	{
		$view = new View();
		return $view->fetch();
	}

	public function sort()
	{
		$view = new View();
		return $view->fetch();
	}
}