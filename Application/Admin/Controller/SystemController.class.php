<?php
namespace Admin\Controller;
//系统控制器
class SystemController extends BaseController{
	//系统信息
	function system_base(){
		$model = D("System");
		if(IS_POST){
			if($model->create(I('post.'),2)){
				// dump($_POST);die;
				if($model->where("sys_id=1")->save()){
					$this->success("修改成功",U("system_base"));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		$info = $model->find(1);
		// dump($info);die;
		$this->assign('info',$info);
		$this->display();
	}

	//系统日志
	function system_log(){
		$this->display();
	}
}