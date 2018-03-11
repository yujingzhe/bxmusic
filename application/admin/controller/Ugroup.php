<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Ugroup extends Controller
{
	public function index()
	{
		$view = new View();
		return $view->fetch();
	}

	public function edit()
	{
		$view = new View();
		return $view->fetch();
	}

	public function addGroup()
	{
		$view = new View();
		return $view->fetch();
	}

	public function add()
	{
		$view = new View();
		return $view->fetch();
	}
}