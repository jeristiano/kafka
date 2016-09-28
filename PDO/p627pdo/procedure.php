<?php
mysql_connect('127.0.0.1','root','');
mysql_select_db('thinksite');
mysql_query('set names utf8');
$res = mysql_query('call p_query_users()');
print_r(mysql_fetch_assoc($res));