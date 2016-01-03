<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta  http-equiv="Expires"  contect="Mon,12  May  2051  00:20:00  GMT">   
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
<script type="text/javascript" src="<?php echo base_url();?>js/main1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.form.js"></script>
<script type="text/javascript">

 var DATE_FORMAT = /^[0-9]{4}-[0-1]?[0-9]{1}-[0-3]?[0-9]{1}$/;
var TIME_FORMAT = /^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-)) (20|21|22|23|[0-1]?\d):[0-5]?\d:[0-5]?\d$/;

function checkDate(){
 var date = document.getElementById("date").value;
 if (date === null || date === 'undefined' || date === '')
 {
  return;
 }
 if(DATE_FORMAT.test(date)){

  } else {
   alert("抱歉，您输入的日期格式有误，建议格式应为:2016-01-01");
  }
  }

  function checkOptStartTime(){
 var optStartTime = document.getElementById("optStartTime").value;
 if (optStartTime === null || optStartTime === 'undefined' || optStartTime === '')
 {
  return;
 }
 if(TIME_FORMAT.test(optStartTime)){

  } else {
   alert("抱歉，您输入的格式有误，建议格式应为:2016-01-01 12:10:15");
  }
  }

function checkOptEndTime(){

 var optEndTime = document.getElementById("optEndTime").value;
if (optEndTime === null || optEndTime === 'undefined' || optEndTime === '')
 {
  return;
 }
 if(TIME_FORMAT.test(optEndTime)){
  } else {
  alert("抱歉，您输入的格式有误，建议格式应为:2016-01-01 12:10:15");
  }
  }

function checkCutStartTime(){
 var cbStartTime = document.getElementById("cbStartTime").value;
 if (cbStartTime === null || cbStartTime === 'undefined' || cbStartTime === '')
 {
  return;
 }
 if(TIME_FORMAT.test(cbStartTime)){
  } else {
alert("抱歉，您输入的格式有误，建议格式应为:2016-01-01 12:10:15");
  }
  }


</script>
<style type="text/css">
.divxing
{
    float:left;
    margin-top: 3px;
}
.xing
{
    font-size: 14px;
    margin-top:10px;
    vertical-align: middle;
   
}
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
.demo{width:620px; margin:30px auto}
.demo p{line-height:32px}
.btn1{position: relative;overflow: hidden;margin-right: 4px;height: 18px;display:inline-block;*display:inline;padding:4px 10px 4px;font-size:14px;line-height:18px;*line-height:20px;color:#fff;text-align:center;vertical-align:middle;cursor:pointer;background-color:#5bb75b;border:1px solid #cccccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.btn1 input {position: absolute;top: 0; right: 0;margin: 0;border: solid transparent;opacity: 0;filter:alpha(opacity=0); cursor: pointer;}
.progress1 { position:relative; margin-left:100px; margin-top:-24px; width:200px;padding: 1px; border-radius:3px; display:none}

.progress { position:relative; margin-left:100px; margin-top:-24px; width:200px;padding: 1px; border-radius:3px; display:none}
.bar2 {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }
.bar1 {background-color: green; display:block; width:0%; height:20px; border-radius: 3px; }

.percent .percent1{ position:absolute; height:20px; display:inline-block; top:3px; left:2%; color:#fff }
.files{height:22px; line-height:22px; margin:10px 0}
.files1{height:22px; line-height:22px; margin:10px 0}

.delimg{margin-left:20px; color:#090; cursor:pointer}
</style>
</head>
<body>

<div class="container" style="margin-bottom:120px;">
  <div class="row" style="margin-bottom:50%;">
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
          <label class="control-label" for="input01">跟台人员:<div class="divxing"><font class="xing">*</font></div></label>          <div class="controls">
            <input placeholder="跟台人员" id="username" class="input-xlarge" type="text">
           <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">日期:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="点击自动获取日期" id="date" class="input-xlarge" type="text" onBlur="checkDate();"><button type="button" class="btn btn-primary" id="getdate" style="padding:5px;margin-left:5px;margin-top:5px;">获取日期</button>
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">医院名称:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="医院名称" id="hospital" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">科室:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="科室" id="department" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">主刀医生:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="主刀医生" id="doctorName" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01">一助:</label>
          <div class="controls">
            <input placeholder="一助" id="assistantName" class="input-xlarge" type="text">
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
          <label class="control-label" for="input01">患者病历号:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="患者病历号" id="medicalRecordNo" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">姓名:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="姓名" id="patientName" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">年龄:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input  id="patientAge" class="input-xlarge" value="35" type="text">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">
          <label class="control-label">性别:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
                     <select class="input-xlarge" id="patientSex" value="男">
                          <option>男</option>
                          <option>女</option>
                    </select>
  </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">术前诊断:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="术前诊断" id="diagnosis" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术名称:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="手术名称" id="operationName" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术开始时间:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="手术开始时间" id="optStartTime" class="input-xlarge" type="text" onBlur="checkOptStartTime();"><button type="button" class="btn btn-primary" id="getstarttime" style="padding:5px;margin-left:5px;margin-top:5px;">获取开始时间</button>
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术结束时间:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="手术结束时间" id="optEndTime" class="input-xlarge" type="text" onBlur="checkOptEndTime();"><button type="button" class="btn btn-primary" id="getendtime" style="padding:5px;margin-left:5px;margin-top:5px;">获取结束时间</button>
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
          <label class="control-label">手术部位:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <select class="input-xlarge" id="optSite">
      <option>腰椎</option>
      <option>胸椎</option>
      <option>颈椎</option>
      <option>脊柱</option>
        <option>开颅</option>
      <option>其他</option>

      </select>

          </div>

        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">手术入路:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <select class="input-xlarge" id="optroute">
      <option>后入路</option>
      <option>前入路</option>
      <option>侧入路</option>
      <option>开颅</option>
      <option>其他</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">手术节段:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="手术节段" id="optsegement" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">截骨节段:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="截骨节段" id="cuteBoneSegment" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">切骨开始时间:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="切骨开始时间" id="cbStartTime" class="input-xlarge" type="text" onBlur="checkCutStartTime();"><button type="button" class="btn btn-primary" id="getcutestarttime" style="padding:5px;margin-left:5px;margin-top:5px;">切骨开始时间</button>
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">切骨时长:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="切骨时长" id="cbEndTime" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">功率档位:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <select class="input-xlarge" id="powerStall">
      <option>5</option>
      <option>4</option>
      <option>3</option>
      <option>2</option>
      <option>1</option></select>
          </div>

        </div>

    

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">流量档位:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <select class="input-xlarge" id="flowStall">
      <option>10</option>
      <option>9</option>
      <option>8</option>
      <option>7</option>
      <option>6</option>
      <option>5</option>
      <option>4</option>
      <option>3</option>
      <option>2</option>
      <option>1</option></select>
          </div>

        </div>

    

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">脉冲档位:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <select class="input-xlarge" id="pulseStall">
      <option>6</option>
      <option>5</option>
      <option>4</option>
      <option>3</option>
      <option>2</option>
      <option>1</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">刀头1类型:</div></label>
          <div class="controls">
            <select class="input-xlarge" id="knife1type">
      <option>多齿片形刀头</option>
      <option>加长多齿片形刀头</option>
      <option>有齿匙形刀头</option>
      <option>加长有齿匙形刀头</option>
      <option>钩形刀头</option>
      <option>加长钩形刀头</option>
      <option>锉形刀头</option>
      <option>加长锉形刀头</option>
      <option>无齿形刀头</option>
      <option>无齿形刀头</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">刀头1使用方法:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" class="" id="knife1UseStyle"> </textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">刀头2类型</label>
          <div class="controls">
            <select class="input-xlarge" id="knife2type">
      <option>无</option>
      <option>多齿片形刀头</option>
      <option>加长多齿片形刀头</option>
      <option>有齿匙形刀头</option>
      <option>加长有齿匙形刀头</option>
      <option>钩形刀头</option>
      <option>加长钩形刀头</option>
      <option>锉形刀头</option>
      <option>加长锉形刀头</option>
      <option>无齿形刀头</option>
      <option>无齿形刀头</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)刀头2使用方法:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="knife2UseStyle" class=""> </textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">刀头3类型:</label>
          <div class="controls">
            <select class="input-xlarge" id="knife3type">
      <option>无</option>
      <option>多齿片形刀头</option>
      <option>加长多齿片形刀头</option>
      <option>有齿匙形刀头</option>
      <option>加长有齿匙形刀头</option>
      <option>钩形刀头</option>
      <option>加长钩形刀头</option>
      <option>锉形刀头</option>
      <option>加长锉形刀头</option>
      <option>无齿形刀头</option>
      <option>无齿形刀头</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)刀头3使用方法:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="knife3UseStyle" class=""> </textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">出血量(ml):<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="出血量" id="bloodingSize" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div><div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">自体血回输量(ml):<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="自体血回输量" id="selfBloodReturnSize" class="input-xlarge" type="text">
            <p class="help-block"></p>
          </div>
        </div>

    

    

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">输血量(ml):<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <input placeholder="输血量" id="bloodInSize" class="input-xlarge" type="text">
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
            <select class="input-xlarge" id="putamenHarm">
      <option>无</option>
      <option>有</option></select>
          </div>

        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)原因:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="putamenHarmReason" class=""> </textarea>
            </div>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">脑脊液漏:</label>
          <div class="controls">
            <select class="input-xlarge" id="cerebroLeakage">
      <option>无</option>
      <option>有</option></select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)原因:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="cerebroLeakageReason" class=""> </textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">神经根损伤:</label>
          <div class="controls">
            <select class="input-xlarge" id="nerveHurt">
      <option>无</option>
      <option>有</option></select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)原因:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="nerveHurtReason" class=""> </textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">电生理检测:</label>
          <div class="controls">
            <select class="input-xlarge" id="elecPhyTest">
      <option>无</option>
      <option>正常</option>
      <option>左侧MEP异常</option>
      <option>右侧MEP异常</option>
      <option>左侧SEP异常</option>
      <option>右侧SEP异常</option></select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)原因:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="elecPhyTestReason" class=""> </textarea>
            </div>
          </div>
        </div>
    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">术中唤醒:</label>
          <div class="controls">
            <select class="input-xlarge" id="optAwaken">
      <option>无</option>
      <option>正常</option>
      <option>左脚不能动</option>
      <option>右脚不能动</option></select>
          </div>

        </div>

    

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)原因:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="optAwakenReason" class=""> </textarea>
            </div>
          </div>
        </div><div class="control-group">

          <!-- Select Basic -->
          <label class="control-label" >刀头损耗:</label>
          <div class="controls">
            <select class="input-xlarge" id="knifeAbrasion">
      <option>无</option>
      <option>有</option></select>
          </div>

        </div><div class="control-group">

          <!-- Textarea -->
          <label class="control-label">(有必填)原因:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="knifeAbrasionReason" class=""> </textarea>
            </div>
          </div>
        </div>

    

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">其他异常:</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="otherException" class=""> </textarea>
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
          <label class="control-label">跟台评价:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="followCommit" class="" rows="10" cols="20"> </textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">术中医生建议:<div class="divxing"><font class="xing">*</font></div></label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" id="doctorSugest" class="" rows="10" cols="20"> </textarea>
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
                  <input id="beforImage" type="hidden" />

                <div class="btn1">
                      <span>添加照片</span>
                      <input id="fileupload" type="file" name="mypic">
                  </div>
                  <div class="progress">
                  <span class="bar2"></span><span class="percent">0%</span >
                  </div>
                      <div class="files">
                      </div>
                      <div id="showimg"></div>
                 </div>
              </div>
       </div>

    <div class="control-group">
          <label class="control-label">术中照片:</label>

          <!-- File Upload -->
          <div class="controls">

            <div class="demo">
            <input id="middleImage" type="hidden" />

                <div class="btn1">
                      <span>添加照片</span>
                      <input id="fileupload1" type="file" name="mypic">

                  </div>
                  <div class="progress1">
                  <span class="bar1"></span>
                  </div>
                      <div class="files1">
                      </div>
                      <div id="showimg1"></div>
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
  </div>
</div>
<div class="btnlocation">
<!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓3列菜单开始↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
<div class="btn3 clearfix">

<div class="menu">
<div class="bt-name"><button class="btn btn-success" id="save">保存</button></div>
</div><!--menu-->

<div class="menu">
<div class="bt-name"><button class="btn btn-success" id="submit">提交</button></div>

</div><!--menu-->



</div><!--btn3-->

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
<li><a href="<?php echo base_url();?>index.php/user/update_password" target="self">修改密码</a></li>

</ul>
</div><!--menu-->

</div><!--btn3-->
<!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑3列菜单end↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</div><!--keleyirap-->
<div class="btn-fullbg"></div>
<script>
$(function () {
  var bar = $('.bar2');
  var bar1 = $('.bar1');
  var percent = $('.percent');
  var percent1 = $('.percent1');
  var showimg = $('#showimg');
  var showimg1 = $('#showimg1');

  var progress = $(".progress");
  var progress1 = $(".progress1");
  var files = $(".files");
  var files1 = $(".files1");

  var btn = $(".btn span");
  $("#fileupload").wrap("<form id='myupload' action='<?php echo base_url();?>action.php' method='post' enctype='multipart/form-data'></form>");
    $("#fileupload").change(function(){
    $("#myupload").ajaxSubmit({
      dataType:  'json',
      beforeSend: function() {
            showimg.empty();
        progress.show();
            var percentVal = '0%';
            bar.width(percentVal);
            percent.html(percentVal);
        btn.html("上传中...");
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
            percent.html(percentVal);
        },
      success: function(data) {
        files.html("<b>"+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'></span>");
        var img = "<?php echo base_url();?>uploads/"+data.pic;
       // alert($('#beforImage').val()+data.pic+'|');
        $('#beforImage').val($('#beforImage').val()+data.pic+'|');
        showimg.html("<img src='"+img+"' style='width:20%'>");
        btn.html("添加附件");
      },
      error:function(xhr){
        btn.html("上传失败");
        bar.width('0')
        files.html(xhr.responseText);
      }
    });
  });
  $("#fileupload1").wrap("<form id='myupload1' action='<?php echo base_url();?>action.php' method='post' enctype='multipart/form-data'></form>");
    $("#fileupload1").change(function(){
    $("#myupload1").ajaxSubmit({
      dataType:  'json',
      beforeSend: function() {
            showimg1.empty();
        progress1.show();
            var percentVal = '0%';
            bar1.width(percentVal);
            percent1.html(percentVal);
        btn.html("上传中...");
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar1.width(percentVal);
            percent1.html(percentVal);
        },
      success: function(data) {
        files1.html("<b>"+data.name+"("+data.size+"k)</b> <span class='delimg' rel='"+data.pic+"'></span>");
        var img = "<?php echo base_url();?>uploads/"+data.pic;
        // alert($('#middleImage').val()+data.pic+'|');
        $('#middleImage').val($('#middleImage').val()+data.pic+'|');
        showimg1.html("<img src='"+img+"' style='width:20%'>");
        btn.html("添加附件");
      },
      error:function(xhr){
        btn.html("上传失败");
        bar1.width('0')
        files1.html(xhr.responseText);
      }
    });
  });
  $(".delimg").live('click',function(){
    var pic = $(this).attr("rel");
    $.post("<?php echo base_url();?>action.php?act=delimg",{imagename:pic},function(msg){
      if(msg==1){
        files1.html("删除成功.");
        showimg.empty();
        progress.hide();
      }else{
        alert(msg);
      }
    });
  });
});

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
