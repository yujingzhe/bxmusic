<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Database extends Controller
{
	public function execute()
	{
		$view = new View();
		return $view->fetch();
	}

	public function export()
	{
		$view = new View();
		return $view->fetch();
	}

	public function import()
	{
		$view = new View();
		return $view->fetch();
	}
}