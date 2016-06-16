<?php

$config = array();
$config['shop_site_url']        = 'http://localhost/shop';
$config['cms_site_url']         = 'http://localhost/cms';
$config['microshop_site_url']   = 'http://localhost/microshop';
$config['circle_site_url']      = 'http://localhost/circle';
$config['admin_site_url']       = 'http://localhost/admin';
$config['mobile_site_url']      = 'http://localhost/mobile';
$config['wap_site_url']         = 'http://localhost/wap';
$config['chat_site_url']        = 'http://localhost/chat';
$config['wechat_site_url']      = 'http://localhost/wechat/ems/';
$config['node_site_url']        = 'http://localhost:8091';
$config['delivery_site_url']    = 'http://localhost/delivery';
$config['chain_site_url']       = 'http://localhost/chain';
$config['member_site_url']      = 'http://localhost/member';
$config['upload_site_url']      = 'http://localhost/data/upload';
$config['resource_site_url']    = 'http://localhost/data/resource';
$config['cms_modules_url']      = 'http://localhost/admin/modules/cms';
$config['microshop_modules_url']= 'http://localhost/admin/modules/microshop';
$config['circle_modules_url']   = 'http://localhost/admin/modules/circle';
$config['admin_modules_url']    = 'http://localhost/admin/modules/shop';
$config['mobile_modules_url']   = 'http://localhost/admin/modules/mobile';
$config['version']              = '201602150687S';
$config['setup_date']           = '2016-06-16 22:43:57';
$config['gip']                  = 0;
$config['dbdriver']             = 'mysql';
$config['tablepre']             = 'shop_';
$config['db']['1']['dbhost']       = 'localhost';
$config['db']['1']['dbport']       = '3306';
$config['db']['1']['dbuser']       = 'root';
$config['db']['1']['dbpwd']        = 'centling';
$config['db']['1']['dbname']       = 'shop';
$config['db']['1']['dbcharset']    = 'UTF-8';
$config['db']['slave']                  = $config['db']['master'];
$config['session_expire']   = 3600;
$config['lang_type']        = 'zh_cn';
$config['cookie_pre']       = '7B9B_';
$config['cache_open'] = false;
//$config['redis']['prefix']        = 'nc_';
//$config['redis']['master']['port']        = 6379;
//$config['redis']['master']['host']        = '127.0.0.1';
//$config['redis']['master']['pconnect']    = 0;
//$config['redis']['slave']             = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'shopnc';
$config['debug']            = false;
$config['url_model'] = false;
$config['subdomain_suffix'] = '';
//$config['session_type'] = 'redis';
//$config['session_save_path'] = 'tcp://127.0.0.1:6379';
$config['node_chat'] = true;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['sms']['gwUrl'] = 'http://sdk4report.eucp.b2m.cn:8080/sdk/SDKService';
$config['sms']['serialNumber'] = '';
$config['sms']['password'] = '';
$config['sms']['sessionKey'] = '';
$config['queue']['open'] = false;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
//$config['oss']['open'] = false;
//$config['oss']['img_url'] = '';
//$config['oss']['api_url'] = '';
//$config['oss']['bucket'] = '';
//$config['oss']['access_id'] = '';
//$config['oss']['access_key'] = '';
$config['https'] = false;
return $config;