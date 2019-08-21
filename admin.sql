#管理员数据表
create table wy_manager(
	mg_id int auto_increment not null,
	mg_name varchar(30) not null,
	mg_pwd char(32) not null,
	mg_sex enum('1','2') not null default '1',
	mg_email varchar(30) not null,
	mg_phone char(11) not null,
	mg_role_id tinyint(3) unsigned default '0' not null,
	mg_des text not null default '',
	mg_time int(10) not null,
	is_enable enum('0','1') default '1' not null,
	primary key(`mg_id`)
)engine=Innodb auto_increment=1 default charset=utf8;

#权限表
create table wy_auth(
	`auth_id` smallint(6) unsigned not null auto_increment comment'权限ID',
	`auth_name` varchar(20) not null comment '权限名称',
	`auth_pid` smallint(6) unsigned not null comment '父ID',
	`auth_c` varchar(32) not null default '' comment '控制器',
	`auth_a` varchar(32) not null default '' comment '操作方法',
	`auth_path` varchar(32) not null comment '全路径',
	`auth_level` tinyint(4) not null default 0 comment '权限级别，从0开始计数',
	primary key(`auth_id`)
)engine=Innodb auto_increment=1 default charset=utf8;

#角色表
create table `wy_role`(
	`role_id` smallint(6) unsigned not null auto_increment,
	`role_name` varchar(20) not null comment '角色名称',
	`role_auth_ids` varchar(128) not null default comment '权限ids,1,2,5',
	`role_auth_ac` text comment '控制器-操作，控制器-操作......',
	primary key(`role_id`)
)engine=Innodb auto_increment=1 default charset=utf8;

#权限数据
insert into wy_auth values (101,'栏目管理',0,'','','101',0);
insert into wy_auth values (102,'图片管理',0,'','','102',0);
insert into wy_auth values (103,'留言管理',0,'','','103',0);
insert into wy_auth values (104,'会员管理',0,'','','104',0);
insert into wy_auth values (105,'管理员管理',0,'','','105',0);
insert into wy_auth values (106,'下载管理',0,'','','106',0);
insert into wy_auth values (107,'系统管理',0,'','','107',0);

insert into wy_auth values (108,'栏目管理',101,'category','cate_list','101-108',1);
insert into wy_auth values (109,'资讯管理',101,'category','cate_list','101-108',1);
insert into wy_auth values (110,'模板管理',101,'category','cate_list','101-108',1);



#栏目分类表
create table `wy_category`(
	`cate_id` smallint unsigned not null auto_increment comment '栏目id',
	`cate_name` varchar(100) not null comment '栏目名称',
	`cate_pid` smallint unsigned not null default '0' comment '栏目父ID，0：顶级栏目',
	`cate_url` varchar(200) not null default '' comment '栏目链接',
	`cate_list_temp` varchar(50) not null default '' commetn '栏目列表页模板',
	`cate_article_temp` varchar(50) not null default '' commetn '栏目文章页模板',
	`cate_sort` smallint unsigned not null default '0' comment '排序',
	`cate_keyword` varchar(200) not null default '' comment '栏目关键字',
	`cate_des` varchar(200) not null default '' comment '栏目描述',
	`is_outlink` enum('0','1') not null default '0' comment '是否站外链接',
	primary key(`cate_id`)
)engine=Innodb auto_increment=1 default charset=utf8 comment '栏目分类表';
#测试数据
insert into wy_category(`cate_name`,`cate_pid`,`cate_sort`) values('教育集团',0,0,);
alter table wy_category add `is_outlink` enum('0','1') not null default '0' comment '是否站外链接';

#栏目内容表
create table`wy_cate_cont`(
	`con_id` int unsigned not null auto_increment comment '内容id',
	`cate_id` smallint unsigned not null comment '栏目id',
	`con_content` text not null default '' comment '栏目内容',
	`con_time` int(11) not null default 0 comment '添加时间',
	primary key(`con_id`)
)engine=Innodb auto_increment=1 default charset=utf8 comment '文章表';

#文章表
create table `wy_article`(
	`art_id` int unsigned not null auto_increment comment '文章id',
	`art_name` varchar(200) not null comment '文章标题',
	`art_short_name` varchar(100) not null default '' comment '文章简略标题',
	`art_attr` set('h','c','f','p','a','s','b','j') not null default '' comment '文章自定义属性',
	`cate_id` smallint(6) unsigned not null comment '文章所属栏目',
	`art_litpic` varchar(100) not null default '' comment '文章缩略图',
	`art_sort` smallint unsigned not null default '0' comment '文章排序',
	`art_keyword` varchar(200) not null default '' comment '文章关键字',
	`art_des` varchar(200) not null default '' comment '文章描述',
	`art_author` varchar(20) not null comment '文章作者',
	`art_source` varchar(50) not null default '' comment '文章来源',
	`is_comments` enum('0','1') not null default '0' comment '是否允许评论',
	`art_time` int(11) not null default 0  comment '文章发布时间',
	`art_text` text not null comment '文章内容',
	`art_viewed` int not null default 0 comment '文章浏览次数',
	`is_online` enum('0','1') not null default '1' comment '文章是否上线',
	primary key(`art_id`)
)engine=Innodb auto_increment=1 default charset=utf8 comment '文章表';

#模板表
create table `wy_template`(
	`temp_id` smallint(6) unsigned not null auto_increment comment '模板id',
	`temp_name` varchar(40) not null comment '模板名称',
	`temp_status` enum('0','1') not null default '1' comment '模板状态',
	`temp_time` int(11) not null default 0 comment '模板添加时间',
	primary key(`temp_id`)
)engine=Innodb auto_increment=1 default charset=utf8 comment '模板表';

#系统设置表
create table `wy_system`(
	`sys_id` tinyint unsigned not null auto_increment comment '系统设置id',
	`sys_name` varchar(50) not null comment '网站名称',
	`sys_url` varchar(50) not null comment '网站域名',
	`sys_keyword` varchar(200) not null comment '网站关键字',
	`sys_des1` varchar(200) not null comment '网站描述1',
	`sys_des2` varchar(255) not null comment '网站描述2',
	`sys_des3` varchar(255) not null comment '网站描述3',
	`sys_concept` varchar(80) not null comment '公司理念',
	`sys_phone` varchar(20) not null comment '公司电话',
	`sys_mail` varchar(20) not null comment '公司邮箱',
	`sys_adress` varchar(60) not null comment '公司地址',
	`sys_dir` varchar(50) not null default '' comment '静态文件路径',
	`sys_updir` varchar(50) not null default './upload/' comment '上传文件配置路径',
	`sys_cright` varchar(70) not null default '' comment '网站底部版权信息',
	`sys_beian` varchar(50) not null default '' comment '网站备案号',
	primary key(`sys_id`)
)engine=Innodb auto_increment=1 default charset=utf8 comment '系统设置表';
insert into `wy_system` values(null,'河南万豫教育集团','http://www.wanyu.cc/','河南万豫，万豫教育，中职教育，高职教育','河南万豫教育集团是河南范围内知名的教育集团','河南万豫教育集团是河南知名的教育集团，开展中职教育、高职教育、航空服务、航空管理、职业培训、教育技术、IT技术、国际留学、国际合作办学等业务，布局辐射河南区域，通过多区域、多层次、一体化的办学发展战略，开展高素质、多技能、应用型的人才培养，逐步形成区域一流的教育集团。','百年大计，教育为本，依托河南省高校，布局全河南地区，构筑“IT教育、职业教育、高等教育、国际教育”系列化高品质教育服务体系，诚邀海内外热爱教育事业的人士或机构，展开多种形式的合作。','依托河南境内高校，发展多层次、国际化、高技术水平的办学之路','0371—60339550','wyj@yuhangedu.com','河南省郑州市郑东新区博学路街道王新街9号','','./upload/','Copyright  ©  2019   版权所有：河南万豫教育集团','豫ICP备18010447号');

#图集表


