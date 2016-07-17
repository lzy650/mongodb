<?php 
#实例化对象
$mon = new mongoClient("mongodb://localhost:27017/php47");
//var_dump($mon);
#选择要操作的数据库
$database = $mon -> php47;
#查询信息
$info = $database -> goods -> find();
var_dump($info); 
#遍历对象
foreach ($info as $k => $v) {
	echo $v['name']."<br />";
}