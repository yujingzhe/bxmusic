<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Attribute extends Controller
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
}