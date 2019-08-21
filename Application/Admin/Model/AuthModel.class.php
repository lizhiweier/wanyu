<?php
namespace Admin\Model;
use Think\Model;
//权限模型
class AuthModel extends Model{
	//设置允许接收的字段
	protected $insertFields = 'auth_name,auth_pid,auth_c,auth_a';
	//设置表单数据的验证规则
	protected $_validate = array(
		array('auth_name','require','权限名称不能为空',1),
	);
	//插入添加权限的数据
	public function saveData($auth_data){
		//1，先保存表单的四个字段
		$newid = $this->add($auth_data);
		//2，根据已有的信息计算auth_path和auth_level的数据
		//auth_path的制作
		if($auth_data['auth_pid'] == 0){
			//如果是顶级权限，权限路径就是本身id
			$path = $newid;
		}else{
			//如果非顶级权限，权限路径就是父类路径-自身id
			$pinfo = $this->find($auth_data['auth_pid']);
			// return $pinfo;die;
			$p_path = $pinfo['auth_path'];
			$path = $p_path."-".$newid;
		}

		//auth_level的制作
		//auth_level的值就是auth_path中'-'的数量
		$level = substr_count($path,'-');
		//将auth_path和auth_level的值更新到数据库中
		$data['auth_path'] = $path;
		$data['auth_level'] = $level;
		return $this->where("auth_id=$newid")->save($data);
	}
}