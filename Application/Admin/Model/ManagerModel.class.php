<?php
namespace Admin\Model;
use Think\Model;
//管理员模型
class ManagerModel extends Model{
	//设置允许接收的字段
	protected $insertFields = 'mg_name,mg_pwd,mg_pwd2,mg_sex,mg_phone,mg_email,mg_role_id,mg_des,mg_time,mg_des,yanzhengma';
	//设置表单数据的验证规则
	protected $_validate = array(
		array('mg_name','require','管理员名称不能为空',1),
		array('mg_pwd2','mg_pwd','两次输入的密码不一致',1,'confirm'),
		array('mg_email','email','邮箱输入格式不正确',2),
		array('mg_phone','number','手机号码为11位的数字',2),
	);
	//设置登陆表单验证规则
	public $_login_validate = array(
		array('yanzhengma','require','验证码不能为空！',1,),
		array('yanzhengma','check_verify','验证码不正确!',1,'callback'),
		array('mg_name','require','用户名不能为空!',1),
		array('mg_pwd','require','密码不能为空!',1),
	);

	//验证码
	function check_verify($code){    
		$verify = new \Think\Verify();    
		return $verify->check($code);
	}

	//登陆
	public function login(){
		//取出用户提交的用户名和密码
		//可以从模型中取，因为我们会在控制器中调用模型的create方法接收表单
		//这个方法可以接收数据并放入模型的属性中
		$username = $this->mg_name;
		$password = $this->mg_pwd;
		//判断账号是否存在
		$user = $this->where(array('mg_name'=>array('eq',$username)))->find();
		if($user){
			if($user['mg_pwd'] == md5($password)){
				//登陆成功把id和usernae存入session
				session('id',$user['mg_id']);
				session('username',$user['mg_name']);
				return true;
			}else{
				$this->error='密码不正确!';
				return false;
			}

		}else{
			$this->error='用户名不存在！';
			return false;
		}
	}

	//判断是否有权限访问当前页面
	public function chkPri(){
		//超级管理员拥有所有权限
		$mg_id = session('id');
		if($mg_id == 1){
			return true;
		}
		//首页所有人都可以访问
		if(CONTROLLER_NAME == 'Index'){
			return true;
		}
		//查询一个管理员是否有权限访问
		//1.当前访问的控制器和方法
		$nowac = CONTROLLER_NAME."-".ACTION_NAME;

		//2.
		$info = $this->field('r.role_auth_ac')->join('wy_role as r ON wy_manager.mg_role_id = r.role_id')->find($mg_id);
		$role_ac = $info['role_auth_ac'];

		// return $role_ac;

		//3.系统里边有一些权限不用控制，所有用户都可以访问
		$allowac = "Manager-login,Manager-logout,login-chk_code";

		// if(strpos($role_ac,$nowac)==false && strpos($allowac,$nowac)==false){
		if(strpos($role_ac,$nowac) == false){
			return false;
		}else{
			return true;
		}
	}







}





?>
