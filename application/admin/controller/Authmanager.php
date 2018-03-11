<?php
namespace app\admin\controller;
use think\Controller;
use think\View;

class Authmanager extends Controller
{
	public function category()
	{
		$view = new View();
		return $view->fetch();
	}

	public function index()
	{
		$view = new View();
		return $view->fetch();
	}

	public function editgroup()
	{
		$view = new View();
		return $view->fetch();
	}

	public function group()
	{
		$view = new View();
		return $view->fetch();
	}

	public function managergroup()
	{
		$view = new View();
		return $view->fetch();
	}

	public function tree()
	{
		$view = new View();
		return $view->fetch();
	}

	public function user()
	{
		$view = new View();
		return $view->fetch();
	}
}