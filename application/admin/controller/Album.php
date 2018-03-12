<?php
namespace app\admin\controller;
use think\Controller;


class Album extends Controller
{
	public function add()
	{
		return $this->fetch();
	}

	public function index()
	{
		return $this->fetch();
	}
}