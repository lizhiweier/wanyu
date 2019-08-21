<?php
namespace Admin\Model;
use Think\Model;
//文章模型
class ArticleModel extends Model{
	//获取所有文章数据
	public function getListData(){
		return $this->join('wy_category ON wy_article.cate_id = wy_category.cate_id')->getField("art_id,art_name,wy_category.cate_name,art_author,art_source,art_time,art_viewed,is_online");
	}
	//前台列表页获取文章信息，带图片
	public function getListInfo($id){
		return $this->field("art_id,art_name,art_attr,art_litpic,art_sort,art_des,art_time,is_online")->order("art_sort desc")->where("is_online='1' and cate_id=$id")->select();
		
	}
	//获取前台文章信息
	public function getArticleInfo($id){
		$info = $this->field("art_id,art_short_name,art_name,cate_id,art_keyword,art_des,art_author,art_source,is_comments,art_time,art_text,art_viewed,is_online")->where("is_online='1'")->find($id);
		return $info;
	}

	//获取文章信息
	public function getArtInfo($field,$limit,$where='',$order='art_id desc'){
		$info = $this->field($field)->where($where)->order($order)->select();
		return $info;
	}





}