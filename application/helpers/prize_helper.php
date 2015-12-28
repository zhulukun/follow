<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('getGrade'))
{
	 function getGrade($v,$level)
    {
    	//index=1 || index=7 first
	     if($v=="1")
	     {
			$a=array("1"=>"Dog","7"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     return json_encode($backValue);
	 	}
	 	//index=2 || index=8 second
	 	 if($v=="2")
	     {
			$a=array("2"=>"Dog","8"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     return json_encode($backValue);
	 	}
	 	//index=3 || index=9 third
	 	if($v=="3")
	     {
			$a=array("3"=>"Dog","9"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     return json_encode($backValue);
	 	}
	 	//index=4 || index=10 
	 	if($v=="4")
	     {
			$a=array("4"=>"Dog","10"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     return json_encode($backValue);
	 	}
	 	//index=5 || index=11
	 	if($v=="5")
	     {
			$a=array("5"=>"Dog","11"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     return json_encode($backValue);
	 	}
	 	//index=6 || index=0
	 	if($v=="6")
	     {
			$a=array("6"=>"Dog","0"=>"Cat");
		    $backValue=array();
		    $backValue['index']=array_rand($a,1);
		    $backValue['grade']=$level;
		     return json_encode($backValue);
	 	}

 	}
 }

if ( ! function_exists('getRand'))
{
 	 function getRand($min,$max)
 	{
 		return rand($min,$max);
 	}
 }


?>