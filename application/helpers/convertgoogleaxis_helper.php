
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('convertToGoogleAxis'))
{
	 function convertToGoogleAxis($latitude,$longitude)
    {
    	$x_pi = 3.14159265358979324 * 3000.0 / 180.0;
       $x = $longitude - 0.0065;
       $y = $latitude - 0.006;
        $z = sqrt($x * $x + $y * $y) - 0.00002 * sin($y * $x_pi);
        $theta = atan2($y, $x) - 0.000003 * cos($x * $x_pi);

        $gg_lon = $z * cos($theta);
        $gg_lat = $z * sin($theta);
        $axisArr=array();
        array_push($axisArr,$gg_lat,$gg_lon);
       return $axisArr;
 	}
 }


 if (!function_exists('convertToBaiduAxis'))
{
	 function convertToBaiduAxis($latitude,$longitude)
    {
    	$x_pi = 3.14159265358979324 * 3000.0 / 180.0;
    	$x = $longitude;
    	$y = $latitude;
        $z = sqrt($x * $x + $y * $y) + 0.00002 * sin($y * $x_pi);
        $theta = atan2($y, $x) + 0.000003 * cos($x * $x_pi);

        $bd_lon = $z * cos($theta) + 0.0065;
        $bd_lat = $z * sin($theta) + 0.006;
        $axisArr=array();
        array_push($axisArr,$bd_lat,$bd_lon);
       return $axisArr;
 	}
 }

?>