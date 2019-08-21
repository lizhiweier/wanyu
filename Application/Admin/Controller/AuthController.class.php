<?php
namespace Admin\Controller;

class AuthController extends BaseController{
	//权限管理
	function auth_list(){
		$data = D("Auth")->order('auth_path')->select();
		// dump($info);die;
		$this->assign('data',$data);
		$this->display();
	}

	//添加权限
	function auth_add(){
		$model = D("Auth");
		if(IS_POST){
			// dump($_POST);die;
			//保存数据
			$z = $model->saveData(I('post.'));
			if($z){
				$this->success('添加权限成功！',U("auth_list"));
				exit;
			}else{
				$error = $model->getError();
				$this->error($error);
			}
		}
		//将所有顶级权限展示到表单
		$info = $model->field("auth_id,auth_name,auth_level")->where("auth_level=0")->select();
		$this->assign('info',$info);
		$this->display();
	}
}






?>