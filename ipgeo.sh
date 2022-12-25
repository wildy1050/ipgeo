#!/bin/bash
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
# Language  : Bash
#
# This code is used to retrieve network information from visitors
# and is released under the "Mozilla Public License Version 2.0".
# Please see < https://raw.githubusercontent.com/wildy1050/license/main/mpl-v2 >
#
# ============================================================================================

# Request to api
export REQ_API=$( curl -s https://api.wildy.my.id/ipgeo/ )
export PARSE_JSON=$( echo $REQ_API | jq -r '' )

# Retuesponse to string
export ipgeo_respon="$(echo "$PARSE_JSON" | jq -r '.respon_code')"
export ipgeo_ip="$(echo "$PARSE_JSON" | jq -r '.ip')"
export ipgeo_asn="$(echo "$PARSE_JSON" | jq -r '.asn')"
export ipgeo_isp="$(echo "$PARSE_JSON" | jq -r '.isp')"
export ipgeo_region="$(echo "$PARSE_JSON" | jq -r '.region')"
export ipgeo_city="$(echo "$PARSE_JSON" | jq -r '.city')"
export ipgeo_country="$(echo "$PARSE_JSON" | jq -r '.country')"
export ipgeo_date="$(echo "$PARSE_JSON" | jq -r '.date')"
export ipgeo_time="$(echo "$PARSE_JSON" | jq -r '.time')"
export ipgeo_datetime="$(echo "$PARSE_JSON" | jq -r '.datetime')"
export ipgeo_timezone="$(echo "$PARSE_JSON" | jq -r '.timezone')"
export ipgeo_useragent="$(echo "$PARSE_JSON" | jq -r '.user_agent')"

# Output result using echo
echo "Response  : ${ipgeo_respon}"
echo "IP        : ${ipgeo_ip}"
echo "ASN       : ${ipgeo_asn}"
echo "ISP       : ${ipgeo_isp}"
echo "Region    : ${ipgeo_region}"
echo "City      : ${ipgeo_city}"
echo "Country   : ${ipgeo_country}"
echo "Date      : ${ipgeo_date}"
echo "Time      : ${ipgeo_time}"
echo "Datetime  : ${ipgeo_datetime}"
echo "TimeZone  : ${ipgeo_timezone}"
echo "UserAgent : ${ipgeo_useragent}"
