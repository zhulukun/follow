$(document)
		.ready(
				function() {

  $("#submit").click(function() {
    
        var id=$.trim($('#id').val());
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

        // var beforImage =$('#beforeImage').val();

        // var middleImage =$('#middleImage').val();

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

      var data = JSON.stringify({"id":id,"username": username, "date": date, "hospital": hospital, "department": department, "doctorName": doctorName, "assistantName": assistantName, "medicalRecordNo": medicalRecordNo, "patientName": patientName, "patientAge": patientAge, "patientSex": patientSex, "diagnosis": diagnosis, "operationName": operationName, "optStartTime": optStartTime, "optEndTime": optEndTime, "optSite": optSite, "optroute": optroute, "optsegement": optsegement, "cuteBoneSegment": cuteBoneSegment, "cbStartTime": cbStartTime, "cbEndTime": cbEndTime, "powerStall": powerStall, "flowStall": flowStall, "pulseStall": pulseStall, "knife1UseStyle": knife1UseStyle, "knife1type": knife1type, "knife2UseStyle": knife2UseStyle, "knife2type": knife2type, "knife3UseStyle": knife3UseStyle, "knife3type": knife3type, "bloodingSize": bloodingSize, "selfBloodReturnSize": selfBloodReturnSize, "bloodInSize": bloodInSize, "putamenHarm": putamenHarm, "putamenHarmReason": putamenHarmReason, "cerebroLeakage": cerebroLeakage, "cerebroLeakageReason": cerebroLeakageReason, "nerveHurt": nerveHurt, "nerveHurtReason": nerveHurtReason, "elecPhyTest": elecPhyTest, "elecPhyTestReason": elecPhyTestReason, "optAwaken": optAwaken, "optAwakenReason": optAwakenReason, "knifeAbrasion": knifeAbrasion, "nerveHurtReason": nerveHurtReason, "knifeAbrasionReason": knifeAbrasionReason, "otherException": otherException, "followCommit": followCommit, "doctorSugest": doctorSugest});

      var url = "http://118.187.12.67/follow/index.php/update";  
        $.ajax({  
              type: "post", 
              contentType: "application/html; charset=utf-8",
              url: url,
              data: data,  
              dataType: "json",  
              success: function(msg){
                      if(msg.status=="invalid")
                      {
                        // alert("请先登陆");
                        // window.location ="http://localhost/follow/index.php/login";
                        // return;
                      }
                      if(msg.status=="valid")
                      {
                             
                        alert("修改成功");
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
      var url = "http://localhost/follow/index.php/upload";  
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
                        window.location ="http://localhost/follow/index.php/main";
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
