# ============================================================================================
#
# Copyright (C) 2022-2023 by < wildy1050 > / < Wildy Sheverando >
#
# Author    : Wildy Sheverando
# Date      : 2022-12-24
# Blog      : https://blog.wildy.my.id
# Github    : https://github.com/wildy1050
# Telegram  : https://t.me/wildy1050
# Whatsapp  : https://wa.me/6285925001050
# Language  : Python
#
# This code is used to retrieve network information from visitors
# and is released under the "Mozilla Public License Version 2.0".
# Please see < https://raw.githubusercontent.com/wildy1050/ipgeo/main/LICENSE >
#
# ============================================================================================

import requests

# Request to api gateway using requests
response = requests.get("https://api.wildy.my.id/ipgeo/")
result_decode = response.json()

# Returned response to string
ipgeo_respon = result_decode['respon_code']
ipgeo_ip = result_decode['ip']
ipgeo_asn = result_decode['asn']
ipgeo_isp = result_decode['isp']
ipgeo_region = result_decode['region']
ipgeo_city = result_decode['city']
ipgeo_country = result_decode['country']
ipgeo_date = result_decode['date']
ipgeo_time = result_decode['time']
ipgeo_datetime = result_decode['datetime']
ipgeo_timezone = result_decode['timezone']
ipgeo_useragent = result_decode['user_agent'] # If you want to use the response from the API, add useragent in the curl.

# Output result using echo
print("Response : " + ipgeo_respon)
print("IP : " + ipgeo_ip)
print("ASN : " + ipgeo_asn)
print("ISP : " + ipgeo_isp)
print("Region : " + ipgeo_region)
print("City : " + ipgeo_city)
print("Country : " + ipgeo_country)
print("Date : " + ipgeo_date)
print("Time : " + ipgeo_time)
print("Datetime : " + ipgeo_datetime)
print("TimeZone : " + ipgeo_timezone)
print("UserAgent : " + USER_AGENT)
