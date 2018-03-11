<?php

namespace app\admin\controller;
use think\Controller;
use think\View;

class Profile extends Controller
{
	public function addfield()
	{
		$view = new View();
		return $view->fetch();
	}

	public function addgroup()
	{
		$view = new View();
		return $view->fetch();
	}

	public function group()
	{
		$view = new View();
		return $view->fetch();
	}

	public function index()
	{
		$view = new View();
		return $view->fetch();
	}
	public function memberfield()
	{
		$view = new View();
		return $view->fetch();
	}

	public function sortgroup()
	{
		$view = new View();
		return $view->fetch();
	}
}