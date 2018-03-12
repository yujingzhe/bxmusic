<?php
namespace app\admin\controller;
use think\Controller;


class Com extends Controller
{
	public function base()
	{
		return $this->fetch();	
	}

	public function login()
	{
		return $this->fetch();
		
            // var_dump($username);
   
	}
	
	public function dologin()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		dump($username.'====asd=='.$password);
	}

	public function cuowu()
	{
		return $this->fetch();
	}

	public function exception()
	{
		return $this->fetch();
	}

	public function map()
	{
		return $this->fetch();
	}

	public function chenggong()
	{
		return $this->fetch();
	}

	public function user()
	{
		return $this->fetch();
	}

}