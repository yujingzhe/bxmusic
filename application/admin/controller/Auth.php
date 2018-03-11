<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Auth extends Controller
{
	public function index()
	{
		$view = new View();
		return $view->fetch();
	}
}