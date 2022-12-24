fetch(`https://api.wildy.my.id/ipgeo/`, {
  method: 'GET',
})

.then((response) => response.json())
.then((result) => {
  // Returned response to string
  const ipgeo_respon = result.respon_code;
  const ipgeo_ip = result.ip;
  const ipgeo_asn = result.asn;
  const ipgeo_isp = result.isp;
  const ipgeo_region = result.region;
  const ipgeo_city = result.city;
  const ipgeo_country = result.country;
  const ipgeo_date = result.date;
  const ipgeo_time = result.time;
  const ipgeo_datetime = result.datetime;
  const ipgeo_timezone = result.timezone;
  const ipgeo_useragent = result.user_agent;

  // Output result using console.log
  console.log(`Response : ${ipgeo_respon}`);
  console.log(`IP : ${ipgeo_ip}`);
  console.log(`ASN : ${ipgeo_asn}`);
  console.log(`ISP : ${ipgeo_isp}`);
  console.log(`Region : ${ipgeo_region}`);
  console.log(`City : ${ipgeo_city}`);
  console.log(`Country : ${ipgeo_country}`);
  console.log(`Date : ${ipgeo_date}`);
  console.log(`Time : ${ipgeo_time}`);
  console.log(`Datetime : ${ipgeo_datetime}`);
  console.log(`TimeZone : ${ipgeo_timezone}`);
  console.log(`UserAgent : ${ipgeo_useragent}`);
});
