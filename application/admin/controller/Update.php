<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Update extends Controller
{
	public function index()
	{
		$view = new View();
		return $view->fetch();
	}
}