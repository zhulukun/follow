$(document)
		.ready(
				function() {
$("#submit").click(function() {


        var name = $('#nickname').val();
        if (name.length<3) {
        	alert("请为用户名三个字符以上!");
        	return;
        }

        var password =$('#password').val();
        var repassword=$('#repassword').val();

        if (password!=repassword) {
        	alert("请保持输入的密码一致!");
        	return;
        };

        var data = JSON.stringify({"nickname": name, "password": password});
			var url = "http://118.187.12.67/follow/index.php/addUser";  
				$.ajax({  
							type: "post",  
						    contentType: "application/html; charset=utf-8",
							url: url,
							data: data,  
							dataType: "json",  
							success: function(msg){
											if(msg.status=="exists")
											{
												alert("用户名已存在!");
												return;
											}
											if(msg.status=="success")
											{
												alert("add成功!");
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

 

