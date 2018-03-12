<?php
namespace app\admin\controller;
use think\Controller;

class Audit extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}