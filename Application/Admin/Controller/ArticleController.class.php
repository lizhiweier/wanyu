<?php
namespace Admin\Controller;
//文章控制器
class ArticleController extends BaseController{
	//文章列表
	function article_list(){
		$model = D('Article');
		//获取表单所需数据
		$data = $model->getListData();
		// dump($data);die;
		$this->assign('data',$data);
		$this->display();
	}

	//发布文章
	function article_add(){
		if(IS_POST){
			$model = D('Article');
			//文章信息入库前，先处理缩略图
			$upload = new \Think\Upload();
			$upload->maxSize = 2145720;
			$upload->rootPath = './Public/';
			$upload->savePath = './Uploads/';
			$upload->saveName = 'time';
			$upload->exts = array('jpg','gif','png','jpeg');
			//是否建立子目录
			$upload->autoSub = true;
			//子目录命名规则
			$upload->subName = array('date','Ymd');
			$info = $upload->uploadOne($_FILES['art_litpic']);
			if(!$info){
				 $this->error($upload->getError());
				 exit;
			}

			//处理表单数据
			$_POST['art_attr'] = implode(',', $_POST['art_attr']);
			$_POST['art_litpic'] = $info['savepath'] . $info['savename'];

			//上传数据
			if($model->create($_POST,1)){
				// dump(I('post.'));die;
				if($model->add()){
					$this->success('添加成功',U('article_list'));
					exit;
				}
			}
			$error = $model->getError();
			$this->error($error);
			// dump($upload);die;
		}else{
			$cmodel = D('Category');
			//如果不是表单提交，就展示页面信息
			//取出现有的所有分类，创建新的分类
			$data = $cmodel->getTree();
			// dump($data);die;
			$this->assign('data',$data);
			$this->display();
		}
	}

	//修改文章下线
	function article_stop(){
		$id = I('get.id');
		$model = D('Article');
		//下架栏目，将字段is_online修改为0
		if(IS_AJAX){
			$data['is_online'] = 0;
			if($model->where("art_id=$id")->save($data)){
				$data['status']  = 1;
				$data['msg'] = '下线成功！';
				$this->ajaxReturn($data);
			}else{
				$data['status']  = 0;
				$data['msg'] = '下线失败！';
				$this->ajaxReturn($data);
			}
		}
	}

	//修改文章上线
	function article_online(){
		$id = I('get.id');
		$model = D('Article');
		//下架栏目，将字段is_online修改为0
		if(IS_AJAX){
			$data['is_online'] = 1;
			if($model->where("art_id=$id")->save($data)){
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

	//编辑文章
	function article_edit(){
		$art_id = I('get.art_id');
		$model = D('Article');
		//用户提交修改文章
		if(IS_POST){
			//文章信息入库前，先处理缩略图
			// dump($_FILES);die;
			if(!empty($_FILES['art_litpic']['name'])){
				$upload = new \Think\Upload();
				$upload->maxSize = 2145720;
				$upload->rootPath = './Public/';
				$upload->savePath = './Uploads/';
				$upload->saveName = 'time';
				$upload->exts = array('jpg','gif','png','jpeg');
				//是否建立子目录
				$upload->autoSub = true;
				//子目录命名规则
				$upload->subName = array('date','Ymd');
				$info = $upload->uploadOne($_FILES['art_litpic']);
				if(!$info){
					 $this->error($upload->getError());
					 exit;
				}
				//图片路径入库之前删除原图
				$art_litpic = $model->field('art_litpic')->find($art_id);
				$tu = './Public/'.$art_litpic['art_litpic'];
				if(!unlink($tu)){
					$this->error('删除原图失败',U("article_edit/art_id/$art_id"));
					exit;
				}
				//处理表单数据
				$_POST['art_attr'] = implode(',', $_POST['art_attr']);
				$_POST['art_litpic'] = $info['savepath'] . $info['savename'];
			}
			// dump($_POST);dump($_FILES);die;
			if($model->create($_POST,2)){
				if(FALSE !== $model->where("art_id=$art_id")->save()){
					$this->success('修改成功',U('article_list'));
					exit;
				}else{
					$this->error('入库失败');
				}
			}
			$error = $model->getError();
			$this->error($error);
		}
		//文章数据
		$data = $model->where("art_id=$art_id")->find();
		//栏目信息
		$cmodel = D('Category');
		//取出所有的分类信息
		$cdata = $cmodel->getTree();
		 // dump($data);dump($cdata);die;
		$this->assign('cdata',$cdata);
		$this->assign('data',$data);
		$this->display();
	}

	//删除文章
	function article_del(){
		//获取删除栏目的id
		$id = I('get.id');
		$model = D('Article');
		if(IS_AJAX){
			if($model->where("art_id=$id")->delete()){
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

	//回收站
	function recycle_list(){
		$this->display();
	}
}
