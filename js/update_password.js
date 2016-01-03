$(document)
		.ready(
				function() {

$("#submit").click(function() {
		
        var nickname = $('#nickname').val();
       
        var password =$('#password').val();

        var re_password=$('#password1').val();
        if (password !== re_password) {
        	alert("两次密码不一致");
        	return;
        };
        
        var data = JSON.stringify({"nickname": nickname, "password": password });
			var url = "http://118.187.12.67/follow/index.php/user/renew_password";  
				$.ajax({  
							type: "post", 
						    contentType: "application/html; charset=utf-8",
							url: url,
							data: data,  
							dataType: "json",  
							success: function(msg){
											if(msg.status=="fail")
											{
												alert("更改密码失败");
												return;
											}
											if(msg.status=="ok")
											{
												alert("更改密码成功");
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

  $(function () {
  	         
            $('#btncode').click(function () {
           
            var phoneNo=$('#phoneNo').val();

        	var data = JSON.stringify({"phoneNo" : phoneNo});

			var url = "http://localhost/follow/index.php/MessageInterface";  
				$.ajax({  
							type: "post",  
						    contentType: "application/html; charset=utf-8",
							url: url,
							data: data,
							dataType: "json",  
							success: function(msg){

											if(msg.status=="exists")
											{
												alert("手机号已经被注册！");
												return;
											}

											if(msg.status=="success")
											{
												function CountDown() {
									                    $("#btncode").attr("disabled", true);
									                    $("#btncode").val("已发送"+"(" + count + ")");
									                    if (count == 0) {
									                        $("#btncode").val("重新发送").removeAttr("disabled");
									                        clearInterval(countdown);
									                    }
									                    count--;
									                } 
												var count = 120;

									            var countdown = setInterval(CountDown, 1000);
									            return;
									             
											}
											if(msg.status=="error")
											{
												function CountDown1() {
									                    $("#btncode").attr("disabled", true);
									                    $("#btncode").val("发送失败"+"(" + count + ")");
									                    if (count == 0) {
									                        $("#btncode").val("重新发送").removeAttr("disabled");
									                        clearInterval(countdown);
									                    }
									                    count--;
									                } 
												var count = 3;

									            var countdown = setInterval(CountDown1, 1000);
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
