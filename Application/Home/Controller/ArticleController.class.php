<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller{
	public function article_show(){
		//接收文章id
		$id = I('get.id');
		//取出文章信息
		$model = D('Admin/Article');
		$info = $model->getArticleInfo($id);
		//取出栏目信息
		$model1 = D('Admin/Category');
		//取出当前文章所属栏目
		$cateinfo = $model1->getCatename($info['cate_id']);
		//取出当前栏目所属的上级栏目
		$pname = $model1->getPname($info['cate_id']);
		$info['cate_name'] = $cateinfo['cate_name'];
		$info['cate_pname'] = $pname['cate_name'];
		// dump($info);die;
		//防止恶意刷新
		$ip = get_client_ip();
		$time = 3600;
		$allowT = md5($ip);
		//判断是否session是否过期
		//第一次访问允许页面刷新提交
		if(!isset($_SESSION[$allowT])){
			$refresh = true; 
			$_SESSION[$allowT] = time();
		//访问过期重新赋值，允许刷新提交
		}else if(time() - $_SESSION[$allowT]>$time){
			$refresh = true;	
			$_SESSION[$allowT] = time();
		//不满足条件，阻止刷新提交
		}else{
			$refresh = false;
		}
		$this->assign('refresh',$refresh);
		$this->assign('info',$info);
		$this->display();
	}
	//统计浏览次数
	public function tongji(){
		$id = I('get.id');
		$model = D('Admin/Article');
        if(!$_GET['id']){return;}  
        $shownum = $model->where("art_id = $id")->setInc('art_viewed');  
	}









}