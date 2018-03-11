<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Think extends Controller
{
	public function add()
	{
		$view = new View();
		return $view->fetch();
	}

	public function edit()
	{
		$view = new View();
		return $view->fetch();
	}

	public function lists()
	{
		$view = new View();
		return $view->fetch();
	}
}