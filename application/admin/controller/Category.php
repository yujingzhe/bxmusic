<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Category extends Controller
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

	public function operate()
	{
		$view = new View();
		return $view->fetch();
	}

	public function tree()
	{
		$view = new View();
		return $view->fetch();
	}
}