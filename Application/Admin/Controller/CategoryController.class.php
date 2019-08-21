<?php
namespace Admin\Controller;
//栏目控制器
class CategoryController extends BaseController{
	//栏目列表
	function cate_list(){
		$model = D('Category');
		$data = $model->getTree();
		// dump($data);die;
		// $this->assign('info',$info);
		$this->assign('data',$data);

		$this->display();
	}

	//添加栏目
	function cate_add(){
		$model = D('Category');
		if(IS_POST){
			//文章信息入库前，先处理缩略图
			if(!empty($_FILES['cate_litpic']['name'])){
				$upload = new \Think\Upload();
				$upload->maxSize = 2145720;
				$upload->rootPath = './Public/';
				$upload->savePath = './Uploads/category/';
				$upload->saveName = 'time';
				$upload->exts = array('jpg','gif','png','jpeg');
				$info = $upload->uploadOne($_FILES['cate_litpic']);
				if(!$info){
					 $this->error($upload->getError());
					 exit;
				}

				//处理表单数据
				$_POST['cate_litpic'] = $info['savepath'] . $info['savename'];
			}
			// dump($_POST);die;
			if($model->create(I('post.'),1)){
				if($model->add()){
					$this->success('添加成功',U('cate_list'));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
		}else{
			//如果不是表单提交，就展示页面信息
			//取出现有的所有分类，创建新的分类
			$data = $model->getTree();
			//取出所有模板信息
			$model1 = D('Template');
			$muban = $model1->field('temp_id,temp_name')->where("temp_belong=1")->select();
			$muban1 = $model1->field('temp_id,temp_name')->where("temp_belong=2")->select();
			// dump($data);die;
			$this->assign('muban1',$muban1);
			$this->assign('muban',$muban);
			$this->assign('data',$data);
			$this->display();
		}
	}

	//修改栏目
	function cate_edit(){
		//获取要修改信息的id
		$id = I('get.id');
		// echo $id;die;
		$model = D('Category');
		if(IS_POST){
			// dump($model->create(I('post.'),2));die;
			//文章信息入库前，先处理缩略图
			// dump($_FILES);die;
			if(!empty($_FILES['cate_litpic']['name'])){
				//文章信息入库前，先处理缩略图
				$upload = new \Think\Upload();
				$upload->maxSize = 2145720;
				$upload->rootPath = './Public/';
				$upload->savePath = './Uploads/category/';
				$upload->saveName = 'time';
				$upload->exts = array('jpg','gif','png','jpeg');
				$info = $upload->uploadOne($_FILES['cate_litpic']);
				//是否建立子目录
				$upload->autoSub = false;
				if(!$info){
					 $this->error($upload->getError());
					 exit;
				}
				//上传成功删除原图
				$cate_litpic = $model->field('cate_litpic')->find($id);
				$tu = './Public/'.$cate_litpic['cate_litpic'];
				// dump($cate);die;
				if(!unlink($tu)){
					 $this->error($upload->getError());
					exit;
				}
				//处理表单数据
				$_POST['cate_litpic'] = $info['savepath'] . $info['savename'];

			}
			// dump($_POST);die;
			if($model->create(I('post.'),2)){
				if(FALSE !== $model->where("cate_id=$id")->save()){
					$this->success('修改成功',U('cate_list'));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
		}else{
			//如果不是表单提交，取出当前要修改的信息
			$info = $model->find($id);
			//取出所有的分类信息
			$data = $model->getTree();
			//取出当前分类的所有子分类的id，然后在表单中不显示当前分类的子栏目
			$child = $model->getChildren($id);
			//取出所有模板信息
			$model1 = D('Template');
			$muban = $model1->field('temp_id,temp_name')->where("temp_belong=1")->select();
			$muban1 = $model1->field('temp_id,temp_name')->where("temp_belong=2")->select();
			 // dump($child);die;
			$this->assign('muban',$muban);
			$this->assign('muban1',$muban1);
			$this->assign('child',$child);
			$this->assign('info',$info);
			$this->assign('data',$data);
			$this->display();
		}
	}

	//删除栏目
	function cate_del(){
		//获取删除栏目的id
		$id = I('get.id');
		$model = D('Category');
		//删除栏目不是真正的从数据库删除，改变栏目状态为'0'
		if(IS_AJAX){
			$data['cate_status'] = 0;
			if($model->where("cate_id=$id")->save($data)){
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

	//显示模板目录
	function cate_temp(){
		$f = I('get.f');
		$this->assign('f',$f);
		// $temp_name = I('get.temp_name');
		// echo $temp_name;
		// if(IS_POST){
		// 	echo $f;
		// }
		// if(IS_AJAX){
		// 	// echo '1';die;
		// 	if(!empty($temp_name)){
		// 		$data['status']  = 1;
		// 		$data['msg'] = '添加成功';
		// 		$this->ajaxReturn($data);
		// 	}else{
		// 		$data['status']  = 0;
		// 		$data['msg'] = '添加失败';
		// 		$this->ajaxReturn($data);
		// 	}
		// }
		$this->display();
	}










}
