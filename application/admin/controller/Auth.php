<?php
namespace app\admin\controller;
use think\Controller;

class Auth extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
}