<?php
namespace Admin\Model;
use Think\Model;
//角色模型
class RoleModel extends Model{
	//设置允许接收的字段
	protected $insertFields = 'role_name,role_note,role_auth_ids';
	//设置表单数据的验证规则
	protected $_validate = array(
		array('role_name','require','角色名称不能为空',1),
	);

	public function savaRoleData($role_data){
		//1，将ids分割为字符串
		$role_data['role_auth_ids'] = implode(',',$role_data['role_auth_ids']);
		//2，将现有数据存入数据库
		$newid = $this->add($role_data);
		//3，根据现有的ids查询所有的权限控制器和方法拼凑成字符串
		$auth_info = D("Auth")->field("auth_c,auth_a")->select($role_data['role_auth_ids']);
		$s = "";
		foreach($auth_info as $k=>$v){
			if(!empty($v['auth_c']) && !empty($v['auth_a'])){
				$s .= $v['auth_c']."-".$v['auth_a'].",";
			}
		}
		$s = rtrim($s,',');//去除最后一个逗号
		$data['role_auth_ac'] = $s;
		return $this->where("role_id=$newid")->save($data);
		
	}





}


