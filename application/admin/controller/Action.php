<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Action extends Controller
{
	public function actionlog()
	{
		$view = new View();
		return $view->fetch();
	}
		public function edit()
	{
		$view = new View();
		return $view->fetch();
	}

}