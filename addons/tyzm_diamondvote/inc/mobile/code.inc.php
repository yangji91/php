<?php 
/**
 * 钻石投票模块处理程序
 *
 * @author 微实惠科技
 * @url http://www.wshwx.com/
 */
defined('IN_IA') or exit('Access Denied');
global $_W, $_GPC;
error_reporting(0);
load()->classs('captcha');
session_start();
$captcha = new Captcha();
$captcha->build(150, 40);
$hash = md5(strtolower($captcha->phrase) . $_W['config']['setting']['authkey']);
isetcookie('__code', $hash);
$_SESSION['__code'] = $hash;
$captcha->output();