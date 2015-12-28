<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('sendMsg'))
{
	 function sendMsg($phoneNo,$nickname)
    {
      $username='youli';
      $password='youli123';
      $apikey='2fd8eb942e6a99f4715986605f7895f7';
      $mobile=$phoneNo;
      $content='尊敬的'.$nickname.'用户,您已经为晓礼网邀请了三个用户，您可以登陆再次抽奖,http://118.187.12.68
localhost/follow/index.php/login ';
      $content=iconv("UTF-8","GBK",$content);
      $url='http://m.5c.com.cn/api/send/index.php?username='.$username.'&password='.$password.'&apikey='.$apikey.'&mobile='.$mobile.'&content='.$content.'';  
      $html = file_get_contents($url);  
      $status=explode(":",$html);
      return $status[0];
 	}
 }

?>