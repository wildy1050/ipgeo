/*
Copyright (C) 2022-2023 by < wildy1050 > / < Wildy Sheverando >

Author    : Wildy Sheverando
Date      : 2022-12-24
Blog      : https://blog.wildy.my.id
Github    : https://github.com/wildy1050
Telegram  : https://t.me/wildy1050
Whatsapp  : https://wa.me/6285925001050
Language  : Go

This code is used to retrieve network information from visitors
and is released under the "Mozilla Public License Version 2.0".
Please see < https://raw.githubusercontent.com/wildy1050/license/main/mpl-v2 >
*/

package main

import (
        "encoding/json"
        "fmt"
        "net/http"
)

type IPGeo struct {
        ResponCode int    `json:"respon_code"`
        IP         string `json:"ip"`
        ASN        string `json:"asn"`
        ISP        string `json:"isp"`
        Region     string `json:"region"`
        City       string `json:"city"`
        Country    string `json:"country"`
        Date       string `json:"date"`
        Time       string `json:"time"`
        Datetime   string `json:"datetime"`
        Timezone   string `json:"timezone"`
        UserAgent  string `json:"user_agent"`
}

func main() {
        resp, err := http.Get("https://api.wildy.my.id/ipgeo/")
        if err != nil { fmt.Println(err) }
        defer resp.Body.Close()
        var result IPGeo
        json.NewDecoder(resp.Body).Decode(&result)
        fmt.Println("Response :", result.ResponCode)
        fmt.Println("IP :", result.IP)
        fmt.Println("ASN :", result.ASN)
        fmt.Println("ISP :", result.ISP)
        fmt.Println("Region :", result.Region)
        fmt.Println("City :", result.City)
        fmt.Println("Country :", result.Country)
        fmt.Println("Date :", result.Date)
        fmt.Println("Time :", result.Time)
        fmt.Println("Datetime :", result.Datetime)
        fmt.Println("TimeZone :", result.Timezone)
        fmt.Println("UserAgent :", result.UserAgent)
}
