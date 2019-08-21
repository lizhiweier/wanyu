<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//取出配置文件信息
    	$info = D('Admin/System')->find();
    	
    	//职业教育信息
    	$field = 'cate_id,cate_name,cate_des,cate_pid,cate_litpic';
    	$where = 'cate_pid=9 and cate_status="1"';
    	$edu_info = D('Admin/Category')->getCateInfo($field,$where);

    	//新闻信息
    	$field = 'art_id,art_name,art_litpic,art_des';
        $limit = 4;
    	$where = 'is_online="1" and FIND_IN_SET("c",art_attr) and FIND_IN_SET("p",art_attr)';
    	$news_info = D('Admin/Article')->getArtInfo($field,$limit,$where);
    	// dump($news_info);die;
    	
    	$this->assign('news_info',$news_info);
    	$this->assign('edu_info',$edu_info);
    	$this->assign('info',$info);
        $this->display();
    }
}