<?php
namespace Admin\Controller;
use Think\Controller;
//后台登陆控制器
class LoginController extends Controller{
	//登陆页面
	public function login(){
		if(IS_POST){
			// dump($_POST);die;
			$model = D('Manager');
			//验证用户名密码
			if($model->validate($model->_login_validate)->create()){
				if($model->login()){
					$this->success('登陆成功！',U('Admin/Index/index'));
					exit;
				}
			}
			$this->error($model->getError());
		}
		$this->display();
	}

	//验证码
	public function chk_code(){
		//验证码
		$Verify = new \Think\Verify();
		$Verify->entry();
	}

	//退出登陆
	public function logout(){
		session(null);
		$this->success('退出成功',U('login'));
	}
	
}