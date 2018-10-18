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
print "BOT NEWSAKU...".$t.$kuning."[>] ".$putih."SEDANG LOGIN ...".$t;
sleep(2);
// login
$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://utv.news/api/user/getUserInfo "); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$head = array();
					$head[] = "Cookie: ls=$ls;aid=$aid";
					$head[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		$result = curl_exec($ch);
		$js = json_decode($result,true);
		$akunrp = $js['data']['Akun Rp'];
		$akuncoin = $js['data']['Akun Coin'];
		if ($js['message'] == 'OK') {
		echo $turkis."[*] ".$putih."login: ".$ijo.$js['message'].$t;
		sleep(1);
		echo $turkis."[•] ".$putih."Akun Rp : ".$ijo.$akunrp.$putih." || Akun Coin : ".$ijo."Rp.".$akuncoin.$t.$t;
		}
		else
		{
		echo $red."[!] login gagal || ".$js['message'].$t;
		exit;
		}
sleep(1);
echo $turkis."[>] ".$putih."STARTING BOT ... ".$t;
sleep(1);
#######################################################
echo $turkis."[*] ".$red."BACA BERITA".$t;
sleep(1);
$x = 0;
while($x<20):
$x++;
flush();
$news		=	news($ls,$aid);
$news1 = json_decode($news,true);
if ($news1['message'] == 'OK') {
	    echo $ijo."    ==> SUKSESS";
	    }
	    else
	    {
	    echo $red."[!] => GAGAL !";
	    }
endwhile;
sleep(1);
// video
echo $t.$turkis."[*] ".$kuning."TONTON VIDEO".$t;
sleep(1);
$v=0;
while($v<10):
$v++;
flush();
$video		=	video($ls,$aid);
$video1 = json_decode($video,true);
if ($video1['message'] == 'OK') {
	    echo $ijo."    ==> BERHASIL ";
	    }
	    else
	    {
	    $red."[!] => GAGAL !";
	    }
endwhile;
sleep(1);



//result
$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://utv.news/api/user/getUserInfo "); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headr = array();
					$headr[] = "Cookie: ls=$ls;aid=$aid";
					$headr[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
		$result = curl_exec($ch);
		$rls = json_decode($result,true);
		$akunrp1 = $rls['data']['Akun Rp'];
		$akuncoin1 = $rls['data']['Akun Coin'];
	  echo $t."
	  =====| RESULT |=====".$t;
echo $putih."[•] Akun Rp : ".$ijo.$akunrp1.$putih." | Akun Coin : Rp.".$ijo.$akuncoin1.$t;
#######################################################
function news($ls,$aid){ 
		
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://utv.news/api/news/read/redward "); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = "Cookie: ls=$ls;aid=$aid";
				$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}


function video($ls,$aid){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://utv.news/api/video/read/rewardtime "); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = "Cookie: ls=$ls;aid=$aid";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}







?>
