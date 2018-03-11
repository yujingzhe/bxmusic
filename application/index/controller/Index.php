<?php
namespace app\index\controller;

use think\Db;
use think\Request;
//use think\Controller;
class Index 
{
	use \traits\controller\Jump;
    public function index()
    {
        //return $name;
        //
        
        $data = Db::name('user')->find();
        var_dump($data);

    }
    public function hello(Request $request, $name = 'World')
	{
		/*$request = Request::instance();
		dump($request);
		// 获取当前URL地址 不含域名
		echo 'url: ' . $request->url() . '<br/>';
		return 'Hello,' . $name . '！';*/

		//echo $this->request->url();
		//var_dump($request);
		//echo 'url: ' . request()->url() . '<br/>';
		//dump(input('get.name'));
		/*echo '请求方法：' . $request->method() . '<br/>';
		echo '资源类型：' . $request->type() . '<br/>';
		echo '访问IP：' . $request->ip() . '<br/>';
		echo '是否AJax请求：' . var_export($request->isAjax(), true) . '<br/>';
		echo '请求参数：';
		dump($request->param());
		echo '请求参数：仅包含name';
		dump($request->only(['name']));
		echo '请求参数：排除name';
		dump($request->except(['name']));*/
		$this->success('欢迎使用ThinkPHP5.0','hello');
	}
	public function create()
	{
		// 插入记录
		/*$result = Db::execute('insert into bxmusic_user (id, name ,status) values (5, "thinkphp",
		1)');
		dump($result);*/
		// 查询数据
		/*$result = Db::query('select * from bxmusic_user where id = 5');
		dump($result);*/
		$list = Db::name('user')
				->where('id', '<>' ,18)
				->column('name');
		dump($list);
	}
}
