<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	//公共头部
	public function header(){
		$model = D('Admin/Category');
    	$data = $model->getNavData();
    	//取出配置文件信息
    	$info = D('Admin/System')->field('sys_concept')->find();
    	// dump($info);die;
    	$this->assign('info',$info);
    	$this->assign('data',$data);
		$this->display(T('Home@Public:header'));
	}


	//公共尾部
	public function footer(){
		//取出系统配置信息
		$info = D('Admin/System')->find();
		// dump($info);die;
		$this->assign('info',$info);
		$this->display(T('Home@Public:footer'));
	}

	//列表页公共栏目列表
	public function header1(){
		$cate_id = I('get.id');
		$model = D('Admin/Category');
		$data = $model->getCate($cate_id);
		//dump($info);die;
		$this->assign('data',$data);
		$this->display(T('Home@Public:header1'));
	}
}