<?php
namespace Admin\Controller;
class IndexController extends BaseController {
    public function index(){
    	//根据登陆用户 获得其角色 根据角色获得对应的权限
    	//获得用户信息
    	$mg_id = session('id');
    	if($mg_id == 1){
    		$auth_infoA = D('Auth')->where("auth_level=0")->select();
	    	$auth_infoB = D('Auth')->where("auth_level=1")->select();
    	}else{
    		//1.根据用户信息取出角色id
    		$mg_info = D('Manager')->find($mg_id);
	    	$role_id = $mg_info['mg_role_id'];

	    	//2.根据$role_id获得其拥有的权限ids信息
	    	$role_info = D('Role')->find($role_id);
	    	$auth_ids = $role_info['role_auth_ids'];

	    	//3.根据$auth_ids获得当前角色对应的全部权限信息
	    	$auth_infoA = D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();
	    	$auth_infoB = D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
    	}
    	//取出管理员信息
    	$mg_info = D('Manager as m')->field('m.mg_name,r.role_name')->join('wy_role as r on m.mg_role_id=r.role_id')->find($mg_id);
    	
    	// dump($info);die;
    	$this->assign('mg_info',$mg_info);
    	$this->assign('auth_infoA',$auth_infoA);
    	$this->assign('auth_infoB',$auth_infoB);
        $this->display();
    }

    public function welcome(){
    	$this->display();
    }
}