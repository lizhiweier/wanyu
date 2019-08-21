<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function __construct(){
		//先调用父类的构造函数
		parent::__construct();
		//判断是否登陆
		$id = session('id');
		if(!$id){
			$this->error('必须先登陆',U('Login/login'));
			exit;
		}
		//验证权限
		$ManaModel = D('Manager');
		$auth = $ManaModel->chkPri();
		// dump($auth);die;
		if(!$auth){
			$this->error('无权访问！',U('Index/index'));
		}
	}
}