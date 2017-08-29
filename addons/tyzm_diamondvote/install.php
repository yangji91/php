<?php

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_blacklist')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `type` varchar(1) DEFAULT '0',
  `value` varchar(50) DEFAULT NULL COMMENT '值',
  `content` varchar(50) DEFAULT NULL COMMENT '昵称，IP地区',
  `status` tinyint(1) DEFAULT '0',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `content` (`content`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_count')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `pv_total` int(1) NOT NULL,
  `share_total` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `indx_uniacid` (`uniacid`),
  KEY `indx_rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_domainlist')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `rid` int(11) DEFAULT '0',
  `type` tinyint(1) DEFAULT '0' COMMENT '1，主域名，0备选域名',
  `domain` varchar(50) DEFAULT NULL COMMENT '域名',
  `extensive` tinyint(1) DEFAULT '0' COMMENT '是否泛域名',
  `description` varchar(255) NOT NULL COMMENT '备注',
  `status` tinyint(1) DEFAULT '0',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `content` (`domain`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_friendship')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `eventrule` mediumtext,
  `config` mediumtext,
  `packata` mediumtext,
  `status` tinyint(1) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_gift')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `ptid` varchar(128) NOT NULL COMMENT '订单号',
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(11) DEFAULT '0',
  `uniontid` varchar(30) NOT NULL COMMENT '商户单号',
  `paytype` varchar(20) NOT NULL COMMENT '支付类型',
  `oauth_openid` varchar(50) NOT NULL,
  `openid` varchar(50) NOT NULL DEFAULT '0' COMMENT '用户openid',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '微信头像',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '微信昵称',
  `user_ip` varchar(15) NOT NULL COMMENT '客户端ip',
  `gifttitle` varchar(8) DEFAULT '0' COMMENT '礼物名称',
  `giftcount` int(10) NOT NULL DEFAULT '1' COMMENT '礼物数量',
  `gifticon` varchar(255) NOT NULL COMMENT '礼物图标',
  `fee` decimal(10,2) NOT NULL COMMENT '支付金额',
  `giftvote` varchar(50) NOT NULL COMMENT '抵票数',
  `ispay` int(1) NOT NULL COMMENT '支付状态',
  `isdeal` tinyint(1) NOT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '状态',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `indx_tid` (`tid`),
  KEY `indx_rid` (`rid`),
  KEY `indx_ptid` (`ptid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_looklist')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `oauth_openid` varchar(50) NOT NULL,
  `user_ip` varchar(15) NOT NULL,
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_redpack')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(11) DEFAULT '0',
  `unionid` varchar(50) NOT NULL DEFAULT '0' COMMENT '用户unionid',
  `openid` varchar(50) NOT NULL DEFAULT '0' COMMENT '用户openid',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '昵称',
  `user_ip` varchar(15) NOT NULL COMMENT '客户端ip',
  `mch_billno` varchar(28) DEFAULT '',
  `total_amount` int(10) DEFAULT '0',
  `total_num` int(3) NOT NULL,
  `client_ip` varchar(15) NOT NULL,
  `send_time` varchar(14) DEFAULT '0',
  `send_listid` varchar(32) DEFAULT '0',
  `return_data` text,
  `return_code` varchar(16) NOT NULL,
  `return_msg` varchar(256) NOT NULL,
  `result_code` varchar(16) NOT NULL,
  `err_code` varchar(32) NOT NULL,
  `err_code_des` varchar(128) NOT NULL,
  `rewards` varchar(20) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态',
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_reply')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `thumb` varchar(255) DEFAULT '' COMMENT '封面',
  `description` varchar(255) DEFAULT '',
  `starttime` int(10) DEFAULT '0',
  `endtime` int(10) DEFAULT '0',
  `apstarttime` int(10) DEFAULT '0' COMMENT '报名时间start',
  `apendtime` int(10) DEFAULT '0' COMMENT '报名时间end',
  `votestarttime` int(10) DEFAULT '0' COMMENT '投票时间start',
  `voteendtime` int(10) DEFAULT '0' COMMENT '投票时间end',
  `topimg` varchar(255) DEFAULT '' COMMENT '背景图片',
  `bgcolor` varchar(255) DEFAULT '' COMMENT '背景颜色',
  `style` varchar(255) DEFAULT '' COMMENT '风格',
  `infomsg` mediumtext COMMENT '活动介绍',
  `eventrule` mediumtext COMMENT '活动规则',
  `prizemsg` mediumtext COMMENT '奖品简介',
  `endintro` mediumtext COMMENT '活动结束说明',
  `config` mediumtext COMMENT '相关配置',
  `addata` mediumtext COMMENT '广告配置',
  `giftdata` mediumtext NOT NULL COMMENT '礼物配置数据',
  `bill_data` mediumtext NOT NULL COMMENT '海报数据',
  `applydata` mediumtext NOT NULL COMMENT '报名信息配置',
  `area` varchar(100) DEFAULT '0' COMMENT '地区限制',
  `shareimg` varchar(255) DEFAULT '' COMMENT '分享图标',
  `sharetitle` varchar(100) DEFAULT '' COMMENT '分享标题',
  `sharedesc` varchar(300) DEFAULT '' COMMENT '分享简介',
  `status` tinyint(1) DEFAULT '0',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `indx_rid` (`rid`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_viporder')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(10) DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `ptid` varchar(128) NOT NULL,
  `uniacid` int(11) DEFAULT '0',
  `uniontid` varchar(30) NOT NULL,
  `paytype` varchar(10) NOT NULL,
  `oauth_openid` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `user_ip` varchar(15) NOT NULL,
  `packname` varchar(8) DEFAULT '0',
  `packicon` varchar(255) NOT NULL,
  `packtime` varchar(255) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `packnum` varchar(50) NOT NULL,
  `ispay` int(1) NOT NULL,
  `isdeal` tinyint(1) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_tid` (`tid`),
  KEY `indx_ptid` (`ptid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_votedata')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(11) DEFAULT '0',
  `oauth_openid` varchar(50) NOT NULL,
  `openid` varchar(50) NOT NULL DEFAULT '0' COMMENT '用户openid',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '微信头像',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '微信昵称',
  `user_ip` varchar(15) NOT NULL COMMENT '客户端ip',
  `votetype` tinyint(1) DEFAULT '0' COMMENT '投票类型，0投票，1钻石',
  `reward` tinyint(1) NOT NULL COMMENT '抽奖状态',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `indx_tid` (`tid`),
  KEY `indx_rid` (`rid`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);

$sql="
CREATE TABLE IF NOT EXISTS ".tablename('tyzm_diamondvote_voteuser')." (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `noid` int(10) unsigned NOT NULL DEFAULT '0',
  `rid` int(10) unsigned NOT NULL DEFAULT '0',
  `uniacid` int(11) DEFAULT '0',
  `oauth_openid` varchar(50) NOT NULL DEFAULT '0' COMMENT '真实用户openid',
  `openid` varchar(50) NOT NULL DEFAULT '0' COMMENT '用户openid',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '微信头像',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '微信昵称',
  `user_ip` varchar(15) NOT NULL COMMENT '客户端ip',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `introduction` varchar(255) DEFAULT NULL COMMENT '个人介绍',
  `img1` varchar(255) DEFAULT '' COMMENT '图1',
  `img2` varchar(255) DEFAULT '' COMMENT '图2',
  `img3` varchar(255) DEFAULT '' COMMENT '图3',
  `img4` varchar(255) DEFAULT '' COMMENT '图4',
  `img5` varchar(255) DEFAULT '' COMMENT '图5',
  `details` mediumtext COMMENT '投票详情',
  `joindata` mediumtext NOT NULL COMMENT '报名信息',
  `formatdata` mediumtext COMMENT '上传图片mediaid',
  `votenum` int(255) DEFAULT '0' COMMENT '投一票数量',
  `giftcount` decimal(10,2) NOT NULL COMMENT '礼物数量',
  `vheat` int(11) NOT NULL DEFAULT '0' COMMENT '虚拟热度',
  `status` tinyint(1) DEFAULT '0' COMMENT '状态',
  `locktime` int(10) DEFAULT '0' COMMENT '锁定时间',
  `attestation` tinyint(1) DEFAULT '0' COMMENT '认证状态',
  `atmsg` varchar(255) NOT NULL DEFAULT '' COMMENT '认证简介',
  `lastvotetime` int(10) NOT NULL COMMENT '最新投票时间',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `indx_rid` (`rid`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
";
pdo_query($sql);