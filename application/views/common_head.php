<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($title)): ?>
<title><?php echo $title; ?></title>
<?php else: ?>
 <title>Cat</title>
<?php endif; ?>
<?php if (isset($csses)): ?>
<?php foreach ($csses as $css): ?>
<link href="<?php echo $css; ?>" rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<?php endif; ?>
<?php if (isset($jses)): ?>
<?php foreach ($jses as $js): ?>
<script type="text/javascript" src="<?php echo $js; ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
</head>
<body>
  <!--nav-->
<div class="top-nav">
    <div class="top-nav-bord">
       <div class="w-left">
         欢迎来到、、&nbsp;请&nbsp;
         <a href="#" class="top-nav-url">登录</a>&nbsp;/&nbsp;
         <a href="#" class="top-nav-url">注册</a>
         </div>
         <div class="w-right">
         <?php if (!isset($index)): ?>
         <div class="top-nav-list"><a href="index.html" class="top-nav-url">首页</a></div>
         <?php endif ;?>
         <div class="top-nav-list"><a href="#" class="top-nav-url">我的购物车</a></div>
         <div class="top-nav-list"> <a href="#" class="top-nav-url">我的订单</a></div>
         <div class="top-nav-list"> <a href="#" class="top-nav-url">我的收藏</a> </div>
         </div>
    </div>
</div>
  <!--nav end-->
<div class="body-main">
  <!--brand&search-->
    <div class="top-bs">
      <div class="top-bs-title">
        有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>
        </div>
        <div class="top-bs-brand">
        有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>有图片<br/>
        </div>
        <div class="top-bs-search">
        <!--search-->
          <div class="top-bs-search-lb">
      <label for="search">搜索</label>
            </div>
            <div class="top-bs-search-bar">
      <input id="search" />
            <input type="button" id="search-bt" onmouseover="sbtp()" onmouseout="sbto()"/>
            </div>
         <!--search end-->
        </div>
    </div>  
  <!--brand&search end-->