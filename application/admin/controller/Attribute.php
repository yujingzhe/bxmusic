<?php
namespace app\admin\controller;
use think\Controller;

class Attribute extends Controller
{
	public function edit()
	{
		return $this->fetch();
	}

	public function index()
	{
		return $this->fetch();
	}
}