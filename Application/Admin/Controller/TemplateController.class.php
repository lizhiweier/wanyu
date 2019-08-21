<?php
namespace Admin\Controller;
//模板控制器
class TemplateController extends BaseController{
	//模板列表
	public function temp_list(){
		$model = D('Template');
		$data = $model->select();
		$this->assign('data',$data);
		$this->display();
	}

	//添加模板
	public function temp_add(){
		if(IS_POST){
			$model = D('Template');
			$_POST['temp_time'] = time();
			// dump($_POST);die;
			if($model->create(I('post.'),1)){
				if($model->add()){
					$this->success('添加模板成功',U('temp_list'));
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		$this->display();
	}

	//修改模板
	public function temp_edit(){
		$id = I('get.id');
		$model = D('Template');
		if(IS_POST){
			// dump($_POST);die;
			if($model->create(I('post.'),2)){
				if($model->where("temp_id=$id")->save()){
					$this->success('修改模板信息成功！',U('temp_list'));
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		//取出模板数据，展示到表单
		$data = $model->find($id);
		// dump($data);die;
		$this->assign('data',$data);
		$this->display();
	}

	//删除模板
	public function temp_del(){
		//获取删除模板的id
		$id = I('get.id');
		$model = D('Template');
		if(IS_AJAX){
			if($model->where("temp_id=$id")->delete()){
				$data['status']  = 1;
				$data['msg'] = '删除成功！';
				$this->ajaxReturn($data);
			}else{
				$data['status']  = 0;
				$data['msg'] = '删除失败！';
				$this->ajaxReturn($data);
			}
		}
	}


}
