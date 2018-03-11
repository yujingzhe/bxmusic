<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Songs extends Controller
{
	public function add()
	{
		$view = new View();
		return $view->fetch();
	}

	public function index()
	{
		$view = new View();
		return $view->fetch();
	}

	public function addall()
	{
		$view = new View();
		return $view->fetch();
	}

	public function bulkimport()
	{
		$view = new View();
		return $view->fetch();
	}
}