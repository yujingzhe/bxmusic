<?php

namespace app\admin\controller;
use think\Controller;
use think\View;
class Index extends Controller
{
	public function index()
	{
		$view = new View();
		return $view->fetch();
	}
}