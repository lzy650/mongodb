<?php 
#实例化对象
$mon = new mongoClient("mongodb://localhost:27017/php47");
//var_dump($mon);
#选择要操作的数据库
$database = $mon -> php47;
#修改信息
$info = $database -> goods -> remove(array('name'=>'wang'));
var_dump($info); 
