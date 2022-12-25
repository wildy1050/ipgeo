<?php

/*
Copyright (C) 2022-2023 by < wildy1050 > / < Wildy Sheverando >

Author    : Wildy Sheverando
Date      : 2022-12-24
Blog      : https://blog.wildy.my.id
Github    : https://github.com/wildy1050
Telegram  : https://t.me/wildy1050
Whatsapp  : https://wa.me/6285925001050
Language  : PHP

This code is used to retrieve network information from visitors
and is released under the "Mozilla Public License Version 2.0".
Please see < https://raw.githubusercontent.com/wildy1050/license/main/mpl-v2 >
*/

// Request to api gateway using curl init
$CLIENT_IP      = $_SERVER['REMOTE_ADDR'];
$USER_AGENT     = $_SERVER['HTTP_USER_AGENT'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.wildy.my.id/ipgeo/?ip=" . $CLIENT_IP);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close ($ch);
$result_decode = json_decode($response, true);

// Returned response to string
$ipgeo_respon    = $result_decode['respon_code'];
$ipgeo_ip        = $result_decode['ip'];
$ipgeo_asn       = $result_decode['asn'];
$ipgeo_isp       = $result_decode['isp'];
$ipgeo_region    = $result_decode['region'];
$ipgeo_city      = $result_decode['city'];
$ipgeo_country   = $result_decode['country'];
$ipgeo_date      = $result_decode['date'];
$ipgeo_time      = $result_decode['time'];
$ipgeo_datetime  = $result_decode['datetime'];
$ipgeo_timezone  = $result_decode['timezone'];
$ipgeo_useragent = $result_decode['user_agent'];  // If you want to use the response from the API, add useragent in the curl.

// Output result using echo
echo "Response  : $ipgeo_respone<BR>";
echo "IP        : $ipgeo_ip<BR>";
echo "ASN       : $ipgeo_asn<BR>";
echo "ISP       : $ipgeo_isp<BR>";
echo "Region    : $ipgeo_region<BR>";
echo "City      : $ipgeo_city<BR>";
echo "Country   : $ipgeo_country<BR>";
echo "Date      : $ipgeo_date<BR>";
echo "Time      : $ipgeo_time<BR>";
echo "Datetime  : $ipgeo_datetime<BR>";
echo "TimeZone  : $ipgeo_timezone<BR>";
echo "UserAgent : $USER_AGENT<BR>";

?>
