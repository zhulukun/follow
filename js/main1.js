$(document)
		.ready(
				function() {

 c_start=document.cookie.indexOf("username=");
 if(c_start == -1){

    $("#hospital").val($.cookie('hospital'));           
    $("#department").val($.cookie('department'));           
    $("#patientSex").val('男');
    $("#patientAge").val('18');
    $("#optSite").val('腰椎');           
    $("#optroute").val('后入路');           
    $("#powerStall").val('5');           
    $("#flowStall").val('4');           
    $("#pulseStall").val('6');           
    $("#knife1type").val('多齿片形刀头');           
    $("#knife2type").val('无');           
    $("#knife3type").val('无');
//    $("#bloodingSize").val('0');            
    $("#selfBloodReturnSize").val('0');           
    $("#bloodInSize").val('0');  
    $("#putamenHarm").val('无');           
    $("#cerebroLeakage").val('无');           
    $("#nerveHurt").val('无');           
    $("#elecPhyTest").val('无');           
    $("#optAwaken").val('无');           
    $("#knifeAbrasion").val('无');           
    $("#otherException").val('无');       
    $("#doctorSugest").val('无');      
 }
 
else
{
  $("#username").val($.cookie('username'));           
    $("#date").val($.cookie('date'));   
    $("#hospital").val($.cookie('hospital'));           
    $("#department").val($.cookie('department'));           
    $("#doctorName").val($.cookie('doctorName'));           
    $("#assistantName").val($.cookie('assistantName'));           
    $("#medicalRecordNo").val($.cookie('medicalRecordNo'));           
    $("#patientName").val($.cookie('patientName'));           
    $("#patientAge").val($.cookie('patientAge'));           
    $("#patientSex").val($.cookie('patientSex'));
          
    $("#diagnosis").val($.cookie('diagnosis'));
    $("#operationName").val($.cookie('operationName'));           
    $("#optStartTime").val($.cookie('optStartTime'));           
    $("#optEndTime").val($.cookie('optEndTime'));           
    $("#optSite").val($.cookie('optSite'));           
    $("#optroute").val($.cookie('optroute'));           
    $("#optsegement").val($.cookie('optsegement'));           
    $("#cuteBoneSegment").val($.cookie('cuteBoneSegment'));           
    $("#cbStartTime").val($.cookie('cbStartTime'));           
    $("#cbEndTime").val($.cookie('cbEndTime'));           
    $("#powerStall").val($.cookie('powerStall'));           
    $("#flowStall").val($.cookie('flowStall'));           
    $("#pulseStall").val($.cookie('pulseStall'));           
    $("#knife1UseStyle").val($.cookie('knife1UseStyle'));           
    $("#knife1type").val($.cookie('knife1type'));           
    $("#knife2UseStyle").val($.cookie('knife2UseStyle'));           
    $("#knife2type").val($.cookie('knife2type'));           
    $("#knife3UseStyle").val($.cookie('knife3UseStyle'));           
    $("#knife3type").val($.cookie('knife3type'));         
    $("#bloodingSize").val($.cookie('bloodingSize'));           
    $("#selfBloodReturnSize").val($.cookie('selfBloodReturnSize'));           
    $("#bloodInSize").val($.cookie('bloodInSize'));           
    $("#putamenHarm").val($.cookie('putamenHarm'));           
    $("#putamenHarmReason").val($.cookie('putamenHarmReason'));           
    $("#cerebroLeakage").val($.cookie('cerebroLeakage'));           
    $("#cerebroLeakageReason").val($.cookie('cerebroLeakageReason'));           
    $("#nerveHurt").val($.cookie('nerveHurt'));           
    $("#nerveHurtReason").val($.cookie('nerveHurtReason'));     
    $("#elecPhyTest").val($.cookie('elecPhyTest'));           
    $("#elecPhyTestReason").val($.cookie('elecPhyTestReason'));           
    $("#optAwaken").val($.cookie('optAwaken'));           
    $("#optAwakenReason").val($.cookie('optAwakenReason'));           
    $("#knifeAbrasion").val($.cookie('knifeAbrasion'));           
    $("#knifeAbrasionReason").val($.cookie('knifeAbrasionReason'));           
    $("#otherException").val($.cookie('otherException'));           
    $("#followCommit").val($.cookie('followCommit'));           
    $("#doctorSugest").val($.cookie('doctorSugest'));       
}


				
		// $("#beforImage").val($.cookie('beforImage')); 	
		// $("#middleImage").val($.cookie('middleImage')); 					
				

$("#save").click(function() {
		
        var username = $('#username').val();
       $.cookie('username', username, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var date =$('#date').val();
       $.cookie('date', date, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var hospital =$('#hospital').val();
       $.cookie('hospital', hospital, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var department =$('#department').val();
       $.cookie('department', department, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var doctorName =$('#doctorName').val();
        $.cookie('doctorName', doctorName, { expires: 7 }); // 存储一个带7天期限的 cookie 


        var assistantName =$('#assistantName').val();
       $.cookie('assistantName', assistantName, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var medicalRecordNo =$('#medicalRecordNo').val();
       $.cookie('medicalRecordNo', medicalRecordNo, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var patientName =$('#patientName').val();
       $.cookie('patientName', patientName, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var patientAge =$('#patientAge').val();
       $.cookie('patientAge', patientAge, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var patientSex =$('#patientSex').val();
       $.cookie('patientSex', patientSex, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var diagnosis =$('#diagnosis').val();
       $.cookie('diagnosis', diagnosis, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var operationName =$('#operationName').val();
       $.cookie('operationName', operationName, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optStartTime =$('#optStartTime').val();
       $.cookie('optStartTime', optStartTime, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optEndTime =$('#optEndTime').val();
       $.cookie('optEndTime', optEndTime, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optSite =$('#optSite').val();
       $.cookie('optSite', optSite, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optroute =$('#optroute').val();
       $.cookie('optroute', optroute, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optsegement =$('#optsegement').val();
       $.cookie('optsegement', optsegement, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var cuteBoneSegment =$('#cuteBoneSegment').val();
       $.cookie('cuteBoneSegment', cuteBoneSegment, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var cbStartTime =$('#cbStartTime').val();
       $.cookie('cbStartTime', cbStartTime, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var cbEndTime =$('#cbEndTime').val();
       $.cookie('cbEndTime', cbEndTime, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var powerStall =$('#powerStall').val();
       $.cookie('powerStall', powerStall, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var flowStall =$('#flowStall').val();
       $.cookie('flowStall', flowStall, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var pulseStall =$('#pulseStall').val();
       $.cookie('pulseStall', pulseStall, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var knife1UseStyle =$('#knife1UseStyle').val();
       $.cookie('knife1UseStyle', knife1UseStyle, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var knife1type =$('#knife1type').val();
       $.cookie('knife1type', knife1type, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var knife2UseStyle =$('#knife2UseStyle').val();
       $.cookie('knife2UseStyle', knife2UseStyle, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var knife2type =$('#knife2type').val();
       $.cookie('knife2type', knife2type, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var knife3UseStyle =$('#knife3UseStyle').val();
       $.cookie('knife3UseStyle', knife3UseStyle, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var knife3type =$('#knife3type').val();
       $.cookie('knife3type', knife3type, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var bloodingSize =$('#bloodingSize').val();
       $.cookie('bloodingSize', bloodingSize, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var selfBloodReturnSize =$('#selfBloodReturnSize').val();
       $.cookie('selfBloodReturnSize', selfBloodReturnSize, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var bloodInSize =$('#bloodInSize').val();
        $.cookie('bloodInSize', bloodInSize, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var putamenHarm =$('#putamenHarm').val();
       $.cookie('putamenHarm', putamenHarm, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var putamenHarmReason =$('#putamenHarmReason').val();
        $.cookie('putamenHarmReason', putamenHarmReason, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var cerebroLeakage =$('#cerebroLeakage').val();
       $.cookie('cerebroLeakage', cerebroLeakage, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var cerebroLeakageReason =$('#cerebroLeakageReason').val();
       $.cookie('cerebroLeakageReason', cerebroLeakageReason, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var nerveHurt =$('#nerveHurt').val();
       $.cookie('nerveHurt', nerveHurt, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var nerveHurtReason =$('#nerveHurtReason').val();
       $.cookie('nerveHurtReason', nerveHurtReason, { expires: 7 }); // 存储一个带7天期限的 cookie 
        
        var elecPhyTest =$('#elecPhyTest').val();
       $.cookie('elecPhyTest', elecPhyTest, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var elecPhyTestReason =$('#elecPhyTestReason').val();
       $.cookie('elecPhyTestReason', elecPhyTestReason, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optAwaken =$('#optAwaken').val();
       $.cookie('optAwaken', optAwaken, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var optAwakenReason =$('#optAwakenReason').val();
       $.cookie('optAwakenReason', optAwakenReason, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var knifeAbrasion =$('#knifeAbrasion').val();
       $.cookie('knifeAbrasion', knifeAbrasion, { expires: 7 }); // 存储一个带7天期限的 cookie 

      var knifeAbrasionReason =$('#knifeAbrasionReason').val();
       $.cookie('knifeAbrasionReason', knifeAbrasionReason, { expires: 7 }); // 存储一个带7天期限的 cookie 
       
        var otherException =$('#otherException').val();
       $.cookie('otherException', otherException, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var followCommit =$('#followCommit').val();
       $.cookie('followCommit', followCommit, { expires: 7 }); // 存储一个带7天期限的 cookie 

        var doctorSugest =$('#doctorSugest').val();
       $.cookie('doctorSugest', doctorSugest, { expires: 7 }); // 存储一个带7天期限的 cookie 

       //  var beforImage =$('#beforImage').val();
       // $.cookie('beforImage', beforImage, { expires: 7 }); // 存储一个带7天期限的 cookie 

       //  var middleImage =$('#middleImage').val();
       // $.cookie('middleImage', middleImage, { expires: 7 }); // 存储一个带7天期限的 cookie 

        alert("保存成功");

							});

  $("#submit").click(function() {
    

         var username = $.trim($('#username').val());

        var date =$.trim($('#date').val());

        var hospital =$.trim($('#hospital').val());

        var department =$.trim($('#department').val());

        var doctorName =$.trim($('#doctorName').val());


        var assistantName =$.trim($('#assistantName').val());

        var medicalRecordNo =$.trim($('#medicalRecordNo').val());

        var patientName =$.trim($('#patientName').val());

        var patientAge =$.trim($('#patientAge').val());

        var patientSex =$.trim($('#patientSex').val());

        var diagnosis =$.trim($('#diagnosis').val());

        var operationName =$.trim($('#operationName').val());

        var optStartTime =$.trim($('#optStartTime').val());

        var optEndTime =$.trim($('#optEndTime').val());

        var optSite =$.trim($('#optSite').val());

        var optroute =$.trim($('#optroute').val());

        var optsegement =$.trim($('#optsegement').val());

        var cuteBoneSegment =$.trim($('#cuteBoneSegment').val());

        var cbStartTime =$.trim($('#cbStartTime').val());

        var cbEndTime =$.trim($('#cbEndTime').val());

        var powerStall =$('#powerStall').val();

        var flowStall =$('#flowStall').val();

        var pulseStall =$('#pulseStall').val();

        var knife1UseStyle =$.trim($('#knife1UseStyle').val());
       
        var knife1type =$('#knife1type').val();
       
        var knife2UseStyle =$.trim($('#knife2UseStyle').val());
       
        var knife2type =$('#knife2type').val();
       
        var knife3UseStyle =$.trim($('#knife3UseStyle').val());
       
        var knife3type =$('#knife3type').val();
        
        var bloodingSize =$.trim($('#bloodingSize').val());
        
        var selfBloodReturnSize =$.trim($('#selfBloodReturnSize').val());
        
        var bloodInSize =$.trim($('#bloodInSize').val());
       
        var putamenHarm =$('#putamenHarm').val();
        
        var putamenHarmReason =$.trim($('#putamenHarmReason').val());
       
        var cerebroLeakage =$('#cerebroLeakage').val();
        
        var cerebroLeakageReason =$.trim($('#cerebroLeakageReason').val());
        
        var nerveHurt =$('#nerveHurt').val();
        
        var nerveHurtReason =$.trim($('#nerveHurtReason').val());
        
        var elecPhyTest =$('#elecPhyTest').val();

        var elecPhyTestReason =$.trim($('#elecPhyTestReason').val());

        var optAwaken =$('#optAwaken').val();

        var optAwakenReason =$.trim($('#optAwakenReason').val());

        var knifeAbrasion =$('#knifeAbrasion').val();

       // var nerveHurtReason =$('#nerveHurtReason').val();
        
        var knifeAbrasionReason =$.trim($('#knifeAbrasionReason').val());

        var otherException =$('#otherException').val();

        var followCommit =$.trim($('#followCommit').val());

        var doctorSugest =$.trim($('#doctorSugest').val());

        var beforImage =$('#beforImage').val();

        var middleImage =$('#middleImage').val();

        if (username === null || username === 'undefined' || username === '')
        {

            alert('跟台人员姓名不能为空!');
            return;
        };
         if (date === null || date === 'undefined' || date === '')
        {

            alert('跟台日期不能为空!');
            return;
        };
         if (hospital === null || hospital === 'undefined' || hospital === '')
        {

            alert('医院名称不能为空!');
            return;
        };
         if (department === null || department === 'undefined' || department === '')
        {

            alert('科室名称不能为空!');
            return;
        };
         if (doctorName === null || doctorName === 'undefined' || doctorName === '')
        {

            alert('医生姓名不能为空!');
            return;
        };
/*         if (assistantName === null || assistantName === 'undefined' || assistantName === '')
        {

            alert('一助姓名不能为空!');
            return;
        };
*/

        if (medicalRecordNo === null || medicalRecordNo === 'undefined' || medicalRecordNo === '')
        {

            alert('患者病历号不能为空!');
            return;
        };
        if (patientName === null || patientName === 'undefined' || patientName === '')
        {

            alert('患者姓名不能为空!');
            return;
        };
        if (patientAge === null || patientAge === 'undefined' || patientAge === '')
        {

            alert('患者年龄不能为空!');
            return;
        };
        if (patientSex === null || patientSex === 'undefined' || patientSex === '')
        {

            alert('患者姓名不能为空!');
            return;
        };
        if (diagnosis === null || diagnosis === 'undefined' || diagnosis === '')
        {

            alert('术前诊断不能为空!');
            return;
        };
        if (operationName === null || operationName === 'undefined' || operationName === '')
        {

            alert('手术名称不能为空!');
            return;
        };

        if (optStartTime === null || optStartTime === 'undefined' || optStartTime === '')
        {

            alert('手术开始时间不能为空!');
            return;
        };
        if (optEndTime === null || optEndTime === 'undefined' || optEndTime === '')
        {

            alert('手术结束时间不能为空!');
            return;
        };
        if (optSite === null || optSite === 'undefined' || optSite === '')
        {

            alert('手术部位不能为空!');
            return;
        };
        if (optroute === null || optroute === 'undefined' || optroute === '')
        {

            alert('手术入路不能为空!');
            return;
        };
        if (optsegement === null || optsegement === 'undefined' || optsegement === '')
        {

            alert('手术节段不能为空!');
            return;
        };
        if (cuteBoneSegment === null || cuteBoneSegment === 'undefined' || cuteBoneSegment === '')
        {

            alert('截骨节段不能为空!');
            return;
        };
        if (cbStartTime === null || cbStartTime === 'undefined' || cbStartTime === '')
        {

            alert('切骨开始时间不能为空!');
            return;
        };
         if (cbEndTime === null || cbEndTime === 'undefined' || cbEndTime === '')
        {

            alert('切骨时长不能为空!');
            return;
        };

         if (bloodingSize === null || bloodingSize === 'undefined' || bloodingSize === '')
        {

            alert('出血量不能为空!');
            return;
        };

        if (doctorSugest === null || doctorSugest === 'undefined' || doctorSugest === '')
        {

            alert('术中医生建议不能为空!');
            return;
        };
        if (selfBloodReturnSize === null || selfBloodReturnSize === 'undefined' || selfBloodReturnSize === '')
        {

            alert('自体血回输量不能为空!');
            return;
        };
         if (followCommit === null || followCommit === 'undefined' || followCommit === '')
        {

            alert('跟台评价不能为空!');
            return;
        };

         if (bloodInSize === null || bloodInSize === 'undefined' || bloodInSize === '')
        {

            alert('输血量不能为空!');
            return;
        };

        if (knife1UseStyle === null || knife1UseStyle === 'undefined' || knife1UseStyle === '')
        {

            alert('刀头1使用方法不能为空!');
            return;
        };
        if (knife2type!='无' && (knife2UseStyle == null || knife2UseStyle == 'undefined' || knife2UseStyle == '')) {

            alert('刀头2使用方法不能为空!');
            return;
        };

        if (knife3type!='无' && (knife3UseStyle === null || knife3UseStyle === 'undefined' || knife3UseStyle === '')) {

            alert('刀头3使用方法不能为空!');
            return;
        };

         if (putamenHarm!='无' && (putamenHarmReason === null || putamenHarmReason === 'undefined' || putamenHarmReason === '')) {

            alert('硬膜损伤原因不能为空!');
            return;
        };


        if (cerebroLeakage!='无' && (cerebroLeakageReason === null || cerebroLeakageReason == 'undefined' || cerebroLeakageReason == '')) 
            {
                alert('脑脊液漏原因不能为空!');
                 return;

            };

        if (nerveHurt!='无' && (nerveHurtReason == null || nerveHurtReason == 'undefined' || nerveHurtReason == '')) 
            {
                alert('神经根损伤原因不能为空!');
                 return;

            };  
            
        if ((elecPhyTest!='无' && elecPhyTest!='正常') && (elecPhyTestReason == null || elecPhyTestReason == 'undefined' || elecPhyTestReason == '')) 
            {
                alert('电生理检测原因不能为空!');
                 return;

            };     

        if ((optAwaken!='无' && optAwaken!='正常') && (optAwakenReason == null || optAwakenReason == 'undefined' || optAwakenReason == '')) 
            {
                alert('术中唤醒原因不能为空!');
                 return;

            };         
             


        if (knifeAbrasion!='无' && (knifeAbrasionReason == null || knifeAbrasionReason == 'undefined' || knifeAbrasionReason == '')) 
            {
                alert('刀头损耗原因不能为空!');
                 return;

            }; 
       if (followCommit == null || followCommit == 'undefined' || followCommit == '')
            {
                alert('跟台评价不能为空!');
                 return;

            }; 

      var data = JSON.stringify({"username": username, "date": date, "hospital": hospital, "department": department, "doctorName": doctorName, "assistantName": assistantName, "medicalRecordNo": medicalRecordNo, "patientName": patientName, "patientAge": patientAge, "patientSex": patientSex, "diagnosis": diagnosis, "operationName": operationName, "optStartTime": optStartTime, "optEndTime": optEndTime, "optSite": optSite, "optroute": optroute, "optsegement": optsegement, "cuteBoneSegment": cuteBoneSegment, "cbStartTime": cbStartTime, "cbEndTime": cbEndTime, "powerStall": powerStall, "flowStall": flowStall, "pulseStall": pulseStall, "knife1UseStyle": knife1UseStyle, "knife1type": knife1type, "knife2UseStyle": knife2UseStyle, "knife2type": knife2type, "knife3UseStyle": knife3UseStyle, "knife3type": knife3type, "bloodingSize": bloodingSize, "selfBloodReturnSize": selfBloodReturnSize, "bloodInSize": bloodInSize, "putamenHarm": putamenHarm, "putamenHarmReason": putamenHarmReason, "cerebroLeakage": cerebroLeakage, "cerebroLeakageReason": cerebroLeakageReason, "nerveHurt": nerveHurt, "nerveHurtReason": nerveHurtReason, "elecPhyTest": elecPhyTest, "elecPhyTestReason": elecPhyTestReason, "optAwaken": optAwaken, "optAwakenReason": optAwakenReason, "knifeAbrasion": knifeAbrasion, "nerveHurtReason": nerveHurtReason, "knifeAbrasionReason": knifeAbrasionReason, "otherException": otherException, "followCommit": followCommit, "doctorSugest": doctorSugest, "beforImage": beforImage, "middleImage": middleImage });

      var url = "http://118.187.12.67/follow/index.php/insertInfo";  
        $.ajax({  
              type: "post", 
              contentType: "application/html; charset=utf-8",
              url: url,
              data: data,  
              dataType: "json",  
              success: function(msg){
                      if(msg.status=="invalid")
                      {
                        alert("请先登陆");
                        window.location ="http://118.187.12.67/follow/index.php/login";
                        return;
                      }
                      if(msg.status=="valid")
                      {
                              // $.cookie('username', null); // 存储一个带7天期限的 cookie 

       $.cookie('date', ''); // 存储一个带7天期限的 cookie 

      // $.cookie('hospital', ''); // 存储一个带7天期限的 cookie 

      // $.cookie('department', ''); // 存储一个带7天期限的 cookie 

     //   $.cookie('doctorName', ''); // 存储一个带7天期限的 cookie 


       //$.cookie('assistantName', ''); // 存储一个带7天期限的 cookie 

       $("#optSite").val('腰椎');           
    $("#optroute").val('后入路');           
    $("#powerStall").val('5');           
    $("#flowStall").val('4');           
    $("#pulseStall").val('6');           
    $("#knife1type").val('多齿片形刀头');           
    $("#knife2type").val('无');           
    $("#knife3type").val('无');
//    $("#bloodingSize").val('0');            
    $("#selfBloodReturnSize").val('0');           
    $("#bloodInSize").val('0');  
    $("#putamenHarm").val('无');           
    $("#cerebroLeakage").val('无');           
    $("#nerveHurt").val('无');           
    $("#elecPhyTest").val('无');           
    $("#optAwaken").val('无');           
    $("#knifeAbrasion").val('无');           
    $("#otherException").val('无');       
    $("#doctorSugest").val('无');     

       $.cookie('medicalRecordNo', ''); // 存储一个带7天期限的 cookie 

       $.cookie('patientName', ''); // 存储一个带7天期限的 cookie 

       $.cookie('patientAge', '18'); // 存储一个带7天期限的 cookie 

       $.cookie('patientSex', '男'); // 存储一个带7天期限的 cookie 

       $.cookie('diagnosis', ''); // 存储一个带7天期限的 cookie 

       $.cookie('operationName', ''); // 存储一个带7天期限的 cookie 

       $.cookie('optStartTime', ''); // 存储一个带7天期限的 cookie 

       $.cookie('optEndTime', ''); // 存储一个带7天期限的 cookie 

       $.cookie('optSite', '腰椎'); // 存储一个带7天期限的 cookie 

       $.cookie('optroute', '后入路'); // 存储一个带7天期限的 cookie 

       $.cookie('optsegement', ''); // 存储一个带7天期限的 cookie 

       $.cookie('cuteBoneSegment', ''); // 存储一个带7天期限的 cookie 

       $.cookie('cbStartTime', ''); // 存储一个带7天期限的 cookie 

       $.cookie('cbEndTime', ''); // 存储一个带7天期限的 cookie 

       $.cookie('powerStall', '5'); // 存储一个带7天期限的 cookie 

       $.cookie('flowStall', '4'); // 存储一个带7天期限的 cookie 

       $.cookie('pulseStall', '6'); // 存储一个带7天期限的 cookie 

       $.cookie('knife1UseStyle', ''); // 存储一个带7天期限的 cookie 
       
       $.cookie('knife1type', '多齿片形刀头'); // 存储一个带7天期限的 cookie 
       
       $.cookie('knife2UseStyle', ''); // 存储一个带7天期限的 cookie 
       
       $.cookie('knife2type', '无'); // 存储一个带7天期限的 cookie 
       
       $.cookie('knife3UseStyle', ''); // 存储一个带7天期限的 cookie 
       
       $.cookie('knife3type', '无'); // 存储一个带7天期限的 cookie 
        
       $.cookie('bloodingSize', ''); // 存储一个带7天期限的 cookie 
        
       $.cookie('selfBloodReturnSize', '0'); // 存储一个带7天期限的 cookie 
        
        $.cookie('bloodInSize', '0'); // 存储一个带7天期限的 cookie 
       
       $.cookie('putamenHarm', '无'); // 存储一个带7天期限的 cookie 
        
        $.cookie('putamenHarmReason', ''); // 存储一个带7天期限的 cookie 
       
       $.cookie('cerebroLeakage', '无'); // 存储一个带7天期限的 cookie 
        
       $.cookie('cerebroLeakageReason', ''); // 存储一个带7天期限的 cookie 
        
       $.cookie('nerveHurt', '无'); // 存储一个带7天期限的 cookie 
        
       $.cookie('nerveHurtReason', ''); // 存储一个带7天期限的 cookie 
        
       $.cookie('elecPhyTest', '无'); // 存储一个带7天期限的 cookie 

       $.cookie('elecPhyTestReason', ''); // 存储一个带7天期限的 cookie 

       $.cookie('optAwaken', '无'); // 存储一个带7天期限的 cookie 

       $.cookie('optAwakenReason', ''); // 存储一个带7天期限的 cookie 

       $.cookie('knifeAbrasion', '无'); // 存储一个带7天期限的 cookie 

       $.cookie('knifeAbrasionReason', ''); // 存储一个带7天期限的 cookie 
       
       $.cookie('otherException', '无'); // 存储一个带7天期限的 cookie 

       $.cookie('followCommit', ''); // 存储一个带7天期限的 cookie 

       $.cookie('doctorSugest', '无'); // 存储一个带7天期限的 cookie 


// $(document)
//     .ready(
//         function() {
//        $("#hospital").val($.cookie('hospital'));           
//     $("#department").val($.cookie('department'));           
//     $("#patientSex").val('男');
//     $("#patientAge").val('18');
//     $("#optSite").val('腰椎');           
//     $("#optroute").val('后入路');           
//     $("#powerStall").val('5');           
//     $("#flowStall").val('4');           
//     $("#pulseStall").val('6');           
//     $("#knife1type").val('多齿片形刀头');           
//     $("#knife2type").val('无');           
//     $("#knife3type").val('无');
// //    $("#bloodingSize").val('0');            
//     $("#selfBloodReturnSize").val('0');           
//     $("#bloodInSize").val('0');  
//     $("#putamenHarm").val('无');           
//     $("#cerebroLeakage").val('无');           
//     $("#nerveHurt").val('无');           
//     $("#elecPhyTest").val('无');           
//     $("#optAwaken").val('无');           
//     $("#knifeAbrasion").val('无');           
//     $("#otherException").val('无');       
//     $("#doctorSugest").val('无');      
//     });
                        alert("提交成功");
                      window.location ="http://118.187.12.67/follow/main.html";
                        return;
                      }
                    },
              error: function (xhr, desc, err) {

                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);

                          },

                });  



              });

  $("#getdate").click(function() {
    
              var mydate = new Date();
              var year=mydate.getFullYear();
              var month=mydate.getMonth()+1;
              var day=mydate.getDate();
              var hour=mydate.getHours();
              var minute=mydate.getMinutes();
              var second=mydate.getSeconds();
              var date=year+'-'+month+'-'+day;;
              //var t=mydate.toLocaleString();
                /   *alert(t);*/
              $("#date").val(date);


              });
   $("#getstarttime").click(function() {
    
              var mydate = new Date();
              var year=mydate.getFullYear();
              var month=mydate.getMonth()+1;
              var day=mydate.getDate();
              var hour=mydate.getHours();
              var minute=mydate.getMinutes();
              var second=mydate.getSeconds();
              var date=year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;
              //var t=mydate.toLocaleString();
                /   *alert(t);*/
              $("#optStartTime").val(date);


              });
    $("#getendtime").click(function() {
    
              var mydate = new Date();
              var year=mydate.getFullYear();
              var month=mydate.getMonth()+1;
              var day=mydate.getDate();
              var hour=mydate.getHours();
              var minute=mydate.getMinutes();
              var second=mydate.getSeconds();
              var date=year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;
              //var t=mydate.toLocaleString();
                /   *alert(t);*/
              $("#optEndTime").val(date);
              });
     $("#getcutestarttime").click(function() {
    
              var mydate = new Date();
              var year=mydate.getFullYear();
              var month=mydate.getMonth()+1;
              var day=mydate.getDate();
              var hour=mydate.getHours();
              var minute=mydate.getMinutes();
              var second=mydate.getSeconds();
              var date=year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;
              //var t=mydate.toLocaleString();
                /   *alert(t);*/
              $("#cbStartTime").val(date);


              });
     $("#uploadbeforimage").click(function() {
    

        // var username = $('#username').val();
       
        // var password =$('#password').val();
        

        // var data = JSON.stringify({"username": username, "password": password });
      var url = "http://118.187.12.67/follow/index.php/upload";  
        $.ajax({  
              type: "post", 
                contentType: "application/html; charset=utf-8",
              url: url,
              data: data,  
              dataType: "json",  
              success: function(msg){
                      if(msg.status=="invalid")
                      {
                        alert("用户名或密码错误");
                        return;
                      }
                      if(msg.status=="valid")
                      {
                        window.location ="http://118.187.12.67/follow/index.php/main";
                        return;
                      }
                    },
              error: function (xhr, desc, err) {

                            console.log(xhr);
                            console.log("Details: " + desc + "\nError:" + err);

                          },

                });  
}); 
});
