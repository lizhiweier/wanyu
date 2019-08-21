<?php
namespace Admin\Controller;
//栏目内容控制器
class CatecontController extends BaseController{
	//添加栏目内容
	public function cate_cont(){
		//获取要添加信息的id
		$id = I('get.id');
		// echo $id;die;
		$model = D('Catecont');
		if(IS_POST){
			//完善提交数据
			$_POST['con_time'] = time();
			$_POST['cate_id'] = $id;
			// dump($_POST);die;
			if($model->create($_POST,1)){
				// dump($model->create($_POST,2));die;
				if(FALSE !== $model->add()){
					$this->success('添加成功',U('Category/cate_list'));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		$this->display();
	}

	//修改栏目内容
	public function cate_contedit(){
		//获取要修改信息的id
		$id = I('get.id');
		// echo $id;die;
		$model = D('Catecont');
		if(IS_POST){
			//完善提交数据
			$_POST['con_time'] = time();
			// $_POST['cate_id'] = $id;
			// dump($_POST);die;
			if($model->create($_POST,2)){
				// dump($model->create($_POST,2));die;
				if(FALSE !== $model->where("cate_id=$id")->save()){
					$this->success('修改成功',U('Category/cate_list'));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		$data = $model->where("cate_id=$id")->find();
		$this->assign('data',$data);
		$this->display();
	}




}
