<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>后台管理</title>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/login.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/follow_main.css" />

		 <script type=" text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/admin.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/add.js"></script>

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<?php echo base_url();?>js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="<?php echo base_url();?>js/ace.min.js"></script>
		<script type="text/javascript">
		function ensure()
		{
			window.confirm("hello");
		}
		</script>
		<style type="text/css">
				body {
				    font-family: "Open Sans";
				    font-size: 15px;
				    color: #393939;
				    line-height: 1.5;
				}

.input-group input
{
	background: rgb(222, 222, 219) none repeat scroll 0% 0%;
	color: rgb(0, 0, 0);
}

		</style>
		<!-- inline scripts related to this page -->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							跟台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<ul class="nav nav-list">
						<li class="active">
							<a href="<?php echo base_url();?>index.php/main">
								<i class="icon-dashboard"></i>
								<span class="menu-text">添加用户</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/search">
								<i class="icon-edit"></i>
								<span class="menu-text">查询信息</span>
							</a>
						</li>

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">查询</li>
						</ul><!-- .breadcrumb -->
						
            <div class="tab-pane fade in active" id="userlist">
    			<div class="box">
		<div class="login-box" style="top:20%">
			<div class="title" style="text-align: center;font-size: 18px;">
			</div>
			<div class="login-content" >
			<form  method="post" action="<?php echo base_url();?>index.php/searchValid"> 
			<div class="form" >
				<div class="form-group">
					<div class="col-xs-12">
						<div class="input-group">
							<select class="input-xlarge" id="searchtype" name="searchtype" value="男">
		                          <option>跟台人员</option>
		                          <option>日期</option>
		                          <option>年龄</option>
		                          <option>医院名称</option>
		                          <option>主刀医生</option>
		                          <option>手术部位</option>
                   		 	</select>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-xs-12 ">
						<div class="input-group">
							<input type="text" id="searchinfo" name="searchinfo" class="form-control" placeholder="" style="border-radius:6px;">
							<span>日期范围查询格式:2015-11-08 2015-11-15</span><br/>
							<span>年龄范围查询格式:26 42</span>
						</div>

					</div>
				</div>
				
				<div class="form-group">
					<div class="col-xs-12" >
					<div class="input-group loginbtn" style="margin-top:16px">
						<input type="submit" class="btn btn-sm btn-info" value="查询">
					</div>
					</div>
				</div>
				</form>
				<!-- <div class="form-group">
					<div class="col-xs-6 link">
						<p class="text-center remove-margin"><small>忘记密码？</small> <a href="javascript:void(0)" ><small>找回</small></a>
						</p>
					</div>
					<div class="col-xs-6 link">
						<p class="text-center remove-margin"><small>还没注册?</small> <a href="javascript:void(0)" ><small>注册</small></a>
						</p>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
</div>

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
         <!-- <div class="panel-foot text-center">
           <ul class="pagination"><li id="pre"><a href="#">上一页</a></li></ul>
            <ul class="pagination pagination-group" id="pageul">
            	
            </ul>
             <ul class="pagination"><li id="next"><a href="#">下一页</a></li></ul>
        </div> -->
   </div>
            <footer>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
            </footer>
							
					</div>
				</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

		</div><!-- /.main-container -->




		
	
</body>
</html>

