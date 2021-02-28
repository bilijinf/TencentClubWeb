<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include"php/head.php"; ?>
    <link rel="stylesheet" href="css/发光按钮.css">
    <title>腾讯俱乐部2021课题</title>
    <style>
    	#a1 {
  			filter: hue-rotate(115deg);
		}
    </style>
  </head>
  <body>
    <?php include"php/body.php"; ?>
    <div id="wrap" onmouseout="hidediv()" style="z-index: 0;">
      <!-- 图片列表 -->
      <div class="img-list">
        <img src="picture/2.jpg" alt="" />
        <img src="picture/2.jpg" alt="" />
        <img src="picture/2.jpg" alt="" />
        <img src="picture/2.jpg" alt="" />
        <img src="picture/2.jpg" alt="" />
      </div>
 
      <!-- 小箭头 -->
      <div class="arrow">
        <a href="javascript:;" class="left"><</a>
        <a href="javascript:;" class="right">></a>
      </div>
 
      <!-- 小圆点 -->
      <ul class="circle-list">
        <li class="circle active" data-n="0"></li>
        <li class="circle" data-n="1"></li>
        <li class="circle" data-n="2"></li>
        <li class="circle" data-n="3"></li>
        <li class="circle" data-n="4"></li>
      </ul>
    </div>
    <?php include"php/轮播.php" ?>
    <a href="login.php" id="a1">登录</a>
    <a href="register.php">注册</a>
    <?php include"php/粒子.php"; ?>
  </body>
</html>