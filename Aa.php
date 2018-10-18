<?php

@system("clear");
@system("clear");
@system("clear");
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[1;92m";
$putih="\033[1;37m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";

include(readline($turkis."masukan config : "));
//echo"$turkis bot start $putih \n";
print "BOT NEWSAKU...".$t.$kuning."[>] ".$putih."sedang login eaa...".$t;
sleep(2);
// login
$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/user/ccsp/detail"); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$head = array();
					$head[] = "Cookie: u=$uid;n=$n";
					$head[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		$result = curl_exec($ch);
		$js = json_decode($result,true);
		$akunrp = $js['data']['Akun Rp'];
		$akuncoin = $js['data']['Akun Coin'];
		if ($js['message'] == 'OK') {
		echo $turkis."[*] ".$putih."login: ".$ijo.$js['message'].$t;
		sleep(1);
		echo $turkis."[•] ".$putih."coin: ".$ijo.$coin.$putih." || money: ".$ijo."Rp.".$money.$t.$t;
		}
		else
		{
		echo $red."[!] login gagal || ".$js['message'].$t;
		exit;
		}
sleep(1);








?>
