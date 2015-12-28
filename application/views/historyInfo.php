<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" /><base target="_blank" />
<meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="follow" />
<meta name="description" content="hovertree" />
<title>跟台管理系统</title>
<link rel="stylesheet" href="<?php echo base_url();?>css/follow_main.css" /> 
<link href="<?php echo base_url();?>css/bootstrap2.0/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap2.0/bootstrap-responsive.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cookie.js"></script>

<style type="text/css">

a:link{
text-decoration:none;
}
a:visited{
text-decoration:none;
}
a:hover{
text-decoration:none;
}
a:active{
text-decoration:none;
}
.btn
{
  padding: 6px 36px;
}
</style>
</head>
<body>

<div class="container" style="margin-bottom:120px;">
  <div class="row">
       <?php foreach ($arr as $item): ?>  
    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseOne">
          基本信息
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class=""></legend>
      </div>    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">跟台人员:</label>
          <div class="controls">
            <input placeholder="跟台人员" id="username" class="input-xlarge" type="text" value="<?php echo $item['username'];?>" readonly="readonly">
             
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">日期:</label>
          <div class="controls">
            <input placeholder="点击自动获取日期" id="date" class="input-xlarge" type="text" value="<?php echo $item['date'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">医院名称:</label>
          <div class="controls">
            <input placeholder="医院名称" id="hospital" class="input-xlarge" type="text" value="<?php echo $item['hospital'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">科室:</label>
          <div class="controls">
            <input placeholder="科室" id="department" class="input-xlarge" type="text" value="<?php echo $item['department'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">主刀医生:</label>
          <div class="controls">
            <input placeholder="主刀医生" id="doctorName" class="input-xlarge" type="text" value="<?php echo $item['doctorName'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">一助:</label>
          <div class="controls">
            <input placeholder="一助" id="assistantName" class="input-xlarge" type="text" value="<?php echo $item['assistantName'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    </fieldset>
  </form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseTwo">
          术前信息
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class=""></legend>
      </div>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">患者病历号:</label>
          <div class="controls">
            <input placeholder="患者病历号" id="medicalRecordNo" class="input-xlarge" type="text" value="<?php echo $item['medicalRecordNo'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">姓名:</label>
          <div class="controls">
            <input placeholder="姓名" id="patientName" class="input-xlarge" type="text" value="<?php echo $item['patientName'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">年龄:</label>
          <div class="controls">
            <input placeholder="年龄" id="patientAge" class="input-xlarge" type="text" value="<?php echo $item['patientAge'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">
          <label class="control-label">性别:</label>
          <div class="controls">
                     <select class="input-xlarge" id="patientSex" disabled="disabled">
                          <option><?php echo $item['patientSex'];?></option>
                    </select>
  </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">术前诊断:</label>
          <div class="controls">
            <input placeholder="术前诊断" id="diagnosis" class="input-xlarge" type="text" value="<?php echo $item['diagnosis'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术名称:</label>
          <div class="controls">
            <input placeholder="手术名称" id="operationName" class="input-xlarge" type="text" value="<?php echo $item['medicalRecordNo'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术开始时间:</label>
          <div class="controls">
            <input placeholder="手术开始时间" id="optStartTime" class="input-xlarge" type="text" value="<?php echo $item['optStartTime'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术结束时间:</label>
          <div class="controls">
            <input placeholder="手术结束时间" id="optEndTime" class="input-xlarge" type="text" value="<?php echo $item['optEndTime'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    

    </fieldset>
  </form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseThree">
         术中信息
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
       
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class=""></legend>
      </div>
    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">手术部位:</label>
          <div class="controls">
            <select class="input-xlarge" id="optSite" disabled="disabled">
      <option><?php echo $item['optSite'];?></option>
     </select>
          </div>

        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">手术入路:</label>
          <div class="controls">
            <select class="input-xlarge" id="optroute" disabled="disabled">
      <option><?php echo $item['optroute'];?></option>
    </select>
          </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术节段:</label>
          <div class="controls">
            <input placeholder="手术节段" id="optsegement" class="input-xlarge" type="text" value="<?php echo $item['optsegement'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">截骨节段:</label>
          <div class="controls">
            <input placeholder="截骨节段" id="cuteBoneSegment" class="input-xlarge" type="text" value="<?php echo $item['cuteBoneSegment'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">切骨开始时间:</label>
          <div class="controls">
            <input placeholder="切骨开始时间" id="cbStartTime" class="input-xlarge" type="text" value="<?php echo $item['cbStartTime'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">切骨时长:</label>
          <div class="controls">
            <input placeholder="切骨时长" id="cbEndTime" class="input-xlarge" type="text" value="<?php echo $item['cbEndTime'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">功率档位:</label>
          <div class="controls">
            <select class="input-xlarge" id="powerStall" disabled="disabled">
      <option><?php echo $item['powerStall'];?></option>
     </select>
          </div>

        </div>

    

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">流量档位:</label>
          <div class="controls">
            <select class="input-xlarge" id="flowStall" disabled="disabled">
      <option><?php echo $item['flowStall'];?></option>
     </select>
          </div>

        </div>

    

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">脉冲档位:</label>
          <div class="controls">
            <select class="input-xlarge" id="pulseStall" disabled="disabled">
                 <option><?php echo $item['pulseStall'];?></option>
          </select>
          </div>

        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">刀头1类型:</label>
          <div class="controls">
            <select class="input-xlarge" id="knife1UseStyle" disabled="disabled">
      <option><?php echo $item['knife1UseStyle'];?></option>
      </select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">刀头1使用方法:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" class="" id="knife1type" readonly="readonly"><?php echo $item['knife1type'];?></textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">刀头2类型:</label>
          <div class="controls">
            <select class="input-xlarge" id="knife2UseStyle" disabled="disabled">
      <option><?php echo $item['knife2UseStyle'];?></option>
      </select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">刀头2使用方法:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="knife2type" class="" readonly="readonly"><?php echo $item['knife2type'];?></textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">刀头3类型:</label>
          <div class="controls">
            <select class="input-xlarge" id="knife3UseStyle" disabled="disabled">
      <option><?php echo $item['knife3UseStyle'];?></option>
     </select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">刀头3使用方法:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="knife3type" class="" readonly="readonly"><?php echo $item['knife3type'];?> </textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">出血量(ml):</label>
          <div class="controls">
            <input placeholder="出血量" id="bloodingSize" class="input-xlarge" type="text" value="<?php echo $item['bloodingSize'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">自体血回输量(ml):</label>
          <div class="controls">
            <input placeholder="自体血回输量" id="selfBloodReturnSize" class="input-xlarge" type="text" value="<?php echo $item['selfBloodReturnSize'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">输血量(ml):</label>
          <div class="controls">
            <input placeholder="输血量" id="bloodInSize" class="input-xlarge" type="text" value="<?php echo $item['bloodInSize'];?>" readonly="readonly">
            <p class="help-block"></p>
          </div>
        </div>

    </fieldset>
  </form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseFour">
         术中异常
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
       
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class=""></legend>
      </div>
    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">硬膜损伤:</label>
          <div class="controls">
            <select class="input-xlarge" id="putamenHarm" disabled="disabled">
      <option><?php echo $item['putamenHarm'];?></option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">原因:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="putamenHarmReason" class="" readonly="readonly"><?php echo $item['putamenHarmReason'];?></textarea>
            </div>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">脑脊液漏:</label>
          <div class="controls">
            <select class="input-xlarge" id="cerebroLeakage" disabled="disabled">
      <option><?php echo $item['cerebroLeakage'];?></option></select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">原因:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="cerebroLeakageReason" class="" readonly="readonly"><?php echo $item['cerebroLeakageReason'];?></textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">神经根损伤:</label>
          <div class="controls">
            <select class="input-xlarge" id="nerveHurt" disabled="disabled">
      <option><?php echo $item['nerveHurt'];?></option></select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">原因:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="nerveHurtReason" class="" readonly="readonly"><?php echo $item['nerveHurtReason'];?> </textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">电生理检测:</label>
          <div class="controls">
            <select class="input-xlarge" id="elecPhyTest" disabled="disabled">
      <option><?php echo $item['elecPhyTest'];?></option>
     </select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">原因:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="elecPhyTestReason" class="" readonly="readonly"><?php echo $item['elecPhyTestReason'];?> </textarea>
            </div>
          </div>
        </div>
    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">术中唤醒:</label>
          <div class="controls">
            <select class="input-xlarge" id="optAwaken" disabled="disabled">
      <option><?php echo $item['optAwaken'];?></option>
     </select>
          </div>

        </div>

    

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">原因:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="optAwakenReason" class="" readonly="readonly"> <?php echo $item['optAwakenReason'];?></textarea>
            </div>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label" >刀头损耗:</label>
          <div class="controls">
            <select class="input-xlarge" id="knifeAbrasion" disabled="disabled">
      <option><?php echo $item['knifeAbrasion'];?></option>
        </select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">原因:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="knifeAbrasionReason" class="" readonly="readonly"><?php echo $item['knifeAbrasionReason'];?> </textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">其他异常:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="otherException" class="" readonly="readonly"><?php echo $item['otherException'];?></textarea>
            </div>
          </div>
        </div>

    </fieldset>
  </form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseFive">
         术中评价
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
       
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class=""></legend>
      </div>
    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">跟台评价:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="followCommit" class="" readonly="readonly"><?php echo $item['followCommit'];?></textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">术中医生建议:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="doctorSugest" class="" readonly="readonly"><?php echo $item['doctorSugest'];?></textarea>
            </div>
          </div>
        </div>

    </fieldset>
  </form>

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" 
          href="#collapseSix">
         术中照片
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
       <div class="panel-body">
        
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class=""></legend>
      </div>
    <div class="control-group">
          <label class="control-label">术前影像:</label>

          <!-- File Upload -->
          <div class="controls">
            <div class="demo">
                 
                      <div id="showimg">
                        
                             <?php 
                        $arr = explode("|", $item['beforImage']);
                        for ($i=0; $i <count($arr)-1 ; $i++) { 
                          # code...
                           echo "<img src='http://118.187.12.67/follow/uploads/".$arr[$i]."' style='width:20%;margin-bottom:10px;'>";
                          echo "<br/>";
                        }

                        ?>
                      </div>
                 </div>
              </div>
       </div>

    <div class="control-group">
          <label class="control-label">术中照片:</label>

          <!-- File Upload -->
          <div class="controls">

            <div class="demo">
            <input id="middleImage" type="hidden" />
                      <div id="showimg">
                        <?php 
                        $arr = explode("|", $item['mideleImage']);
                        for ($i=0; $i <count($arr)-1 ; $i++) { 
                          # code...
                          echo "<img src='http://118.187.12.67/follow/uploads/".$arr[$i]."' style='width:20%;margin-bottom:10px;'>";
                          echo "<br/>";
                        }

                        ?>
                      </div>
                 </div>
              </div>
       </div>
    </div>
        </div>

    </fieldset>
  </form>

      </div>
    </div>
  </div>

</div>
    <?php endforeach; ?>  

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
