<?php
namespace Admin\Model;
use Think\Model;
//栏目内容模型
class CatecontModel extends Model{
	//设置允许接收的字段
	protected $insertFields = 'cate_id,con_content,con_time';
}