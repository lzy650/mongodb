<?php 
#实例化对象
$mon = new mongoClient("mongodb://localhost:27017/php47");
//var_dump($mon);
#选择要操作的数据库
$database = $mon -> php47;
#定义数据
$data = array('name'=>'wang','age'=>'22','sex'=>'nv','area'=>array('province'=>'henan','city'=>'shangqiu'));
#查询信息
$info = $database -> goods -> insert($data);
var_dump($info); 
