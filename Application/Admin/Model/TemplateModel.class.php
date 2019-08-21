<?php
namespace Admin\Model;
use Think\Model;
//模板模型
class TemplateModel extends Model{
	//设置允许接收的字段
	protected $insertFields = 'temp_name,temp_status,temp_time,temp_belong';
	//设置表单数据的验证规则
	protected $_validate = array(
		array('temp_name','require','模板名称不能为空！',1),
	);
}