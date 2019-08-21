<?php
namespace Admin\Controller;

class RoleController extends BaseController{
	//角色管理方法
	function role_list(){
		$info = D("Role")->select();
		$this->assign('info',$info);
		$this->display();
	}

	//角色添加
	function role_add(){
		$model = D("Role");
		if(IS_POST){
			// dump($_POST);die;
			//将数据传入模型进行处理
			$z = $model->savaRoleData(I('post.'));
			if($z){
				$this->success('添加角色成功！',U("role_list"));
				exit;
			}else{
				$error = $model->getError();
				$this->error($error);
			}
		}
		//将所有权限取出，展示到表单
		$auth_infoA = D("Auth")->where("auth_level=0")->select();
		$auth_infoB = D("Auth")->where("auth_level=1")->select();
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
		$this->display();
	}
}






?>