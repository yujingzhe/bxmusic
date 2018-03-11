<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Config extends Controller
{
	public function cache()
	{
		$view = new View();
		return $view->fetch();
	}

	public function edit()
	{
		$view = new View();
		return $view->fetch();
	}
	public function email()
	{
		$view = new View();
		return $view->fetch();
	}

	public function group()
	{
		$view = new View();
		return $view->fetch();
	}
	public function index()
	{
		$view = new View();
		return $view->fetch();
	}

	public function sort()
	{
		$view = new View();
		return $view->fetch();
	}
	public function updrive()
	{
		$view = new View();
		return $view->fetch();
	}

	public function view()
	{
		$view = new View();
		return $view->fetch();
	}
}