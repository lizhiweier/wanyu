<?php
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function getSysInfo($field){
		$model = D("Admin/System");
		$info = $model->field($field)->find(1);
		return $info;
	}
}