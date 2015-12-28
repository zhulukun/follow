<!DOCTYPE plain PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
<title>后台登陆</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/follow_main.css" />

 <script type=" text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/admin.js"></script>
<style type="text/css">

@media only screen and (min-width: 320px) and (max-width: 1024px){
    

html,body {
	height: 100%;
	background: url(<?php echo base_url();?>images/login-bg1024.png);

}
}
@media only screen and (min-width:1024px){


html,body {
        height: 100%;
        background: url(<?php echo base_url();?>images/login-bg1680.png);

}

}



.login-box {
    width: 100%;
    max-width: 500px;
    height: 400px;
    position: relative;
    top: 20%;
    margin-top: 10px;
}
</style>

</head>

<body>
<div class="box">
		<div class="login-box">
			<div class="login-title text-center">
				<h1><small>登录</small></h1>
			</div>
			<div class="login-content ">
			<div class="form">
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" id="username" name="username" class="form-control" placeholder="用户名">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12  ">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" id="password" name="password" class="form-control" placeholder="密码">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12" >
					<div class="input-group loginbtn">
						<button type="submit" class="btn btn-sm btn-info" id="submit">登录</button>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="keleyirap">


<!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓3列菜单开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
<div class="btn3 clearfix">

<div class="menu">
<div class="bt-name"><a href="<?php echo base_url();?>main.html" target="self">编辑</a></div>
</div><!--menu-->

<div class="menu">
<div class="bt-name"><a href="<?php echo base_url();?>index.php/history" target="self">历史记录</a></div>

</div><!--menu-->

<div class="menu">
<div class="bt-name">用户登陆</div>
<div class="sanjiao"></div>
<ul class="new-sub">
<li><a href="<?php echo base_url();?>index.php/admin" target="self">管理员登陆</a></li>
<li><a href="<?php echo base_url();?>index.php/login" target="self">用户登陆</a></li>
</ul>
</div><!--menu-->

</div><!--btn3-->
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑3列菜单end↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</div><!--keleyirap-->
<div class="btn-fullbg"></div>
<script>
//弹出垂直菜单
$(".keleyirap .menu").click(function () {
if ($(this).hasClass("cura")) {
$(this).children(".keleyirap .new-sub").hide(); //当前菜单下的二级菜单隐藏
$(".keleyirap .menu").removeClass("cura"); //同一级的菜单项
} else {
$(".keleyirap .menu").removeClass("cura"); //移除所有的样式
$(this).addClass("cura"); //给当前菜单添加特定样式
$(".keleyirap .menu").children(".keleyirap .new-sub").hide(); //隐藏所有的二级菜单
$(this).children(".keleyirap .new-sub").show(); //展示当前的二级菜单
}
});
//弹出垂直菜单end
//底部右侧弹出隐藏
$(".btn3").show();

var flag3 = 1;
$(".btn-fullbg").click(function() {
if (flag3 == 1) {
$(".expan3,.btn-fullbg").show();
$(".btn-open-close").addClass('expan2');
flag3 = 0;
} else {
$(".btn-fullbg,.new-sub,.btn3,.expan3").hide();
$(".menu").removeClass('cura');
$(".btn-open-close").removeClass('expan2');
flag3 = 0;
}
})
//底部右侧弹出隐藏end
</script>

</body>

</html>