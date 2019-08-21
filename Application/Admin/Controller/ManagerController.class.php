<?php
namespace Admin\Controller;
//管理员控制器
class ManagerController extends BaseController{
	//管理员列表
	function manager_list(){
		$info = D("Manager as m")->field("m.*,r.role_id,r.role_name")->join('wy_role as r ON m.mg_role_id = r.role_id')->select();
		// dump($info);die;
		$this->assign('info',$info);
		$this->display();
	}

	//添加管理员
	function manager_add(){
		$model = D("Manager");
		if(IS_POST){
			$_POST['mg_time'] = time();
			$_POST['mg_pwd'] = md5($_POST['mg_pwd']);
			$_POST['mg_pwd2'] = md5($_POST['mg_pwd2']);                             
			if($model->create(I('post.'),1)){
				if($model->add()){
					$this->success("添加管理员成功！",U("manager_list"));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		$role_info = D("Role")->field("role_id,role_name")->select();
		// dump($role_info);die;
		$this->assign('role_info',$role_info);
		$this->display();
	}

	




}




?>