<?php
namespace Admin\Model;
use Think\Model;
//栏目模型
class CategoryModel extends Model{
	//设置允许接收的字段
	protected $insertFields = 'cate_pid,cate_name,cate_url,cate_litpic,cate_list_tempid,cate_article_tempid,cate_sort,cate_keyword,cate_des,is_outlink';
	//设置表单数据的验证规则
	protected $_validate = array(
		array('cate_name','require','栏目名称不能为空！',1),
		// array('cate_url','url','栏目链接格式错误！',1),
		array('cate_sort','number','排序规则必须是0或者1数字',1),	
	);

	//获取树状结构
	public function getTree(){
		$data = $this->where("cate_status='1'")->select();
		// return $data;die;
		return $this->_getTree($data);
	}

	//递归排序形成树形
	//$level用来显示栏目级别
	private function _getTree($data,$pid=0,$level=0){
		//定义空数组用来存储最后的结果
		static $_ret = array();
		//遍历数据库中的栏目
		foreach($data as $k=>$v){
			//如果没有下级栏目停止遍历
			if($v['cate_pid'] == $pid){
				$v['level'] = $level;
				$_ret[] = $v;
				$this->_getTree($data,$v['cate_id'],$level+1);
			}
		}
		return $_ret;
	}

	//取出一个栏目下所有的子分类
	public function getChildren($id){
		//取出所有的分类信息
		$data = $this->select();
		return $this->_getChildren($data,$id,TRUE);
	}

	//递归取出该栏目的子栏目
	private function _getChildren($data,$pid,$isClear=FALSE){
		//定义空数组用来存储最后的结果
		// static $_ret = array();
		if($isClear){
			$_ret = array();
		}
		foreach ($data as $k => $v)
		{
			if($v['cate_pid'] == $pid)
			{
				$_ret[] = $v['cate_id'];
				$this->_getChildren($data, $v['cate_id']);
			}
		}
		return $_ret;
	}

	//取出导航信息
	public function getNavData(){
		$data = $this->where("cate_status='1'")->order("cate_sort")->select();
		$res = array();
		//找出顶级分类
		foreach($data as $k=>$v){
			if($v['cate_pid'] == 0){
				//找出二级分类
				foreach($data as $k1=>$v1){
					if($v1['cate_pid'] == $v['cate_id']){
						$v['children'][] = $v1;
					}
				}
				$res[] = $v;
			}
		}
		return $res;
	}

	//取出当前顶级栏目下的所有栏目
	public function getCate($cate_id){
		$info = $this->where("cate_id=$cate_id")->find();
		$info1 = $this->field("cate_id,cate_name,cate_url,cate_pid")->where("cate_pid=".$info['cate_pid'])->select();
		return $info1;
	}

	//取出当前栏目的上级栏目
	public function getPname($cate_id){
		$info = $this->field('cate_pid')->where("cate_id=$cate_id")->find();
		$info1 = $this->field('cate_name')->where("cate_id=".$info['cate_pid'])->find();
		return $info1;
	}

	//取出当前文章的当前栏目名
	public function getCatename($cate_id){
		$info = $this->field('cate_pid,cate_name')->where("cate_id=$cate_id")->find();
		return $info;
	}

	//前台list控制器，取出该栏目信息,包括栏目模板信息
	public function getListInfo($id){
		$info = $this->join('wy_template ON wy_template.temp_id = wy_category.cate_list_tempid')->where("cate_status='1'")->find($id);
		return $info;
	}

	//获取栏目信息
	public function getCateInfo($field='',$where=''){
		$info = $this->field($field)->where($where)->select();
		return $info;
	}



}