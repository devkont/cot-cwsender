<?php

defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('users', 'module');
require_once cot_incfile('extrafields');

global $db_users;

cot_extrafield_add($db_users, 'sendmail', 'checkbox', $R['input_checkbox'],'','1','','', '','');

$db->query("ALTER TABLE $db_users CHANGE `user_sendmail` `user_sendmail` TINYINT( 1 ) NULL DEFAULT '1'");
$db->update($db_users, array('user_sendmail' => '1'));