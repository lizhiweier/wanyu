<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller{
	//显示列表页
	public function show_list(){
		//接收栏目id，找出栏目模板并输出
		$cate_id = I('get.id');
		//取出上级栏目名
		$model = D('Admin/Category');
		$p_name = $model->getPname($cate_id);
		//取出该栏目信息,包括栏目模板信息
		$info = $model->getListInfo($cate_id);
		// dump($info);die;
		//取出栏目内容
		$model = D('Admin/Catecont');
		$info1 = $model->field('con_content')->where("cate_id=$cate_id")->find();
		$info['p_name'] = $p_name['cate_name'];
		$info['con_content'] = $info1['con_content'];
    	// dump($info);die;
		$this->assign('info',$info);
		$this->display($info['temp_name']);
	}






}