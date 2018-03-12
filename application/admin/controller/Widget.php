<?php
namespace app\admin\controller;
use think\Controller;

class Widget extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}