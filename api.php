<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,45);
//拼接图片地址
$picpath = "https://cdn.jsdelivr.net/gh/Alkaidcheat/img/blob/main/".$num.".jpg";
//重定位到图片
die(header("Location: $picpath"));
?>
