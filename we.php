<?php 
date_default_timezone_set("Asia/Jakarta");
@system("clear");
@system("rm -rf user");
@system("git clone https://github.com/adidoank/user");
@system("clear");
$t="";
$r="";

$biru="[1;34m";
$turkis="[1;36m";
$ijo="[92m";
$putih="[1;37m";
$pink="[1;35m";
$red="[1;31m";
$kuning="[1;33m";
require("cfg.php");
$figlet=$kuning."
                            _       _
             __      ____ _| |_ ___| |__
             \ \ /\ / / _` | __/ __| '_ \\
              \ V  V / (_| | || (__| | | |
               \_/\_/ \__,_|\\__\___|_| |_|".$putih."
    ___,____________________________,_______________".$ijo."
|===".$putih."                  _  ||                         ".$ijo."===|
|===".$putih."   __ _ _ __   __| | ||   ___  __ _ _ __ _ __   ".$ijo."===|
|===".$putih."  / _` | '_ \ / _` | ||  / _ \/ _` | '__| '_ \\  ".$ijo."===|
|===".$putih." | (_| | | | | (_| | || |  __/ (_| | |  | | | | ".$ijo."===|
|===".$putih."  \\__,_|_| |_|\__,_| ||  \___|\__,_|_|  |_| |_| ".$ijo."===|".$putih."
    ------------------------------------------------
     [".$ijo." v 1.5 ".$putih."] | creator: ".$ijo."adidoank".$putih." | code: ".$ijo."F54960";
     echo$figlet.$t.$t;sleep(1);
     error_reporting(0);
     $delay=30;
     $weblock=[""];require __DIR__."/user/user.php";
     echo$sungging.$t;$member=count($data);$date=new DateTime();
     echo$putih."[".$date->format("H:i:s d/m/Y")."]  ";echo$putih."[member: ".$ijo.$member.$putih." ]".$t;
     echo$ijo.$msgwe.$t;
     sleep(3);
     $we_stat=true;
     if($we_stat){
         $we_block=true;
         $total=count($config);
         $a=$delay/$total;
         $sleep=substr($a,0,4);
         echo$putih."[-] ".$ijo."multiple account".$putih." [-]".$t;
         echo$putih."[•] cek akun ";
         sleep(2);
         $bot=0;while($bot<$total){
     $tiket=$config[$bot];$bot++;
     $js=json_decode(invite($tiket),true);
     if($js["code"]=="200"){
          echo$ijo."•";}
       else{
          echo$putih."•";}
     sleep(1);}
     echo$putih.$t."[•] total akun [".$turkis.$total.$putih."]".$t.$t;
     if($total>$delay){
        echo$kuning."[-] max 30 akun bro".$t;
        exit;}
        for($i=0;$i<$total;$i++){
          $tiket=$config[$i];
          $login=login($tiket);
          $js=json_decode($login,true);
          $code=$js["code"];
          $msg=$js["msg"];
          $nik=$js["data"]["userMsg"]["nickname"];
          $gold=$js["data"]["userMsg"]["gold_flag"];
          $bal=$js["data"]["userMsg"]["balance"];
          $inco=$js["data"]["userMsg"]["invitation_code"];
          if($nik==""){
             echo$red."[!] null masalah jaringan ".$kuning."[-] tiket salah".$t;
             @system("rm -rf user");
             exit;}
             if($code=="200"){
          $validasi=true;
          if($validasi){
              $error=true;foreach($dataas$user){
                if($nik==$userOR$inco==$user){echo$ijo."[•] ".$biru.$nik.$putih." | gold: ".$ijo.$gold.$putih." | balance: \$ ".$ijo.$bal.$t;$error=false;}}
                if($error){
                echo$red."[•] ".$nik.$putih." | gold: ".$ijo.$gold.$putih." | balance: \$ ".$ijo.$bal.$t;
                echo$red."[•] ".$kuning.$nik." tidak terdaftar".$t;
                $err=true;}
                elseif($we_block){
                foreach($weblockas$list){
                if($nik==$list){
                echo$red."[•] ".$kuning.$nik.$red." Permission denied".$t;
                $err=true;}}}}
                @system("rm -rf user");
                sleep(1);}
                elseif($code=="9999"){
                echo$kuning."[•] ".$msg.$t.$putih." [•] ambil tiket baru".$t;
                @system("rm -rf user");
                exit;}}
                if($err){
                echo$turkis."[•] PM fb adi digitizer".$t;
                exit;}}
                else{
                echo$red."[•] ".$kuning.$nik.$red." Permission denied".$t;
                @system("rm -rf user");
                echo$putih.$msgwe.$t;
                exit;}
                echo$turkis."[w] cek absen".$t;
                for($i=0;$i<$total;$i++){
                sleep(1);
                $tiket=$config[$i];
                $login=login($tiket);
                $log=json_decode($login,true);
                $nik=$log["data"]["userMsg"]["nickname"];
                echo$ijo."[•] ".$biru.$nik." |] ";
          $curl=curl_init();
            curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://www.masjmzs.com/app/mission_new/handler",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"id=22&".$tiket."&sign=&os=android",CURLOPT_HTTPHEADER=>["country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],CURLOPT_SSL_VERIFYPEER=>0,));
            $result=curl_exec($curl);
            curl_close($curl);
            $js=json_decode($result,true);
            $code=$js["code"];
            $msg=$js["msg"];
          if($code=="200"){
           echo$ijo."[•] sukses".$putih." | gold: + ".$ijo.$js["data"]["gold_flag"]."";
sleep(1);}
else{
echo$kuning."[•] ".$msg."";}}
sleep(1);
echo$turkis."[w] membuka box".$t;
sleep(1);
for($i=0;$i<$total;$i++){
sleep(1);
$tiket=$config[$i];
$login=login($tiket);
$log=json_decode($login,true);
$nik=$log["data"]["userMsg"]["nickname"];
echo$ijo."[w] ".$biru.$nik." |] ";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.masjmzs.com/app/mission_new/handler");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_HTTPHEADER,["country"=>"ID","brand"=>"Xiaomi","version"=>"2.1.2","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",]);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,"id=23&".$tiket."&sign=&os=android");
$result=curl_exec($ch);
$info=curl_getinfo($ch);
curl_close($ch);
$js=json_decode($result,true);
$code=$js["code"];
$msg=$js["msg"];
$gold=$js["data"]["gold_tribute"];
if($code=="200"){echo$ijo."[•] sukses".$putih." | gold: + ".$ijo.$gold.$t;
sleep(3);}
else{
echo$red."[•] terjadi kesalahan".$t;}}
if($vip1){
echo$turkis."[w] video vip".$t;
sleep(1);
echo$kuning."[w] delay [".$delay." second]".$t.$t;
sleep(1);
$date=new DateTime();
echo$ijo."[".$date->format("H:i:s d/m/Y")."]";
sleep(1);
for($i=0;$i<$total;$i++){
sleep(1);
$tiket=$config[$i];
$login=login($tiket);
$log=json_decode($login,true);
$nik=$log["data"]["userMsg"]["nickname"];
while(true){
$rnd=rand(10000000,99999999);
$id=$rnd;
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.masjmzs.com/app/mission_new/handler");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
     $header=["country"=>"ID","brand"=>"Xiaomi","version"=>"2.2.1","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",];
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_POST,true);
$body="id=2&r_type=2&video_id=".$id."&type_name=video&".$tiket."&sign=&os=android";
curl_setopt($ch,CURLOPT_POSTFIELDS,$body);
$result=curl_exec($ch);
$info=curl_getinfo($ch);
curl_close($ch);
$js=json_decode($result,true);
$code=$js["code"];
$msg=$js["msg"];
$gold=$js["data"]["gold_flag"];
$count=$js["data"]["count"];
$vp=$js["data"]["userLevel"];
$limit=$delay*$count/60;
$lmt=substr($limit,0,4);
if($code=="200"){
echo$ijo."[-] sukses".$putih." | gold: +".$ijo.$gold.$putih." | vip: ".$ijo.$vp.$putih." | limit: [".$turkis.$lmt.$putih."] minute".$t;}
elseif($code=="10002"){
echo$kuning.$msg.$t;
sleep(1);
break;}
sleep($delay);}}}
else{
echo$turkis."[w] video".$t;
sleep(1);
echo$kuning."[w] delay [".$sleep." second]".$t.$t;
sleep(1);
$limit=0;
while(true){
for($i=0;$i<$total;$i++){
sleep(1);
$tiket=$config[$i];
$login=login($tiket);
$log=json_decode($login,true);
$nik=$log["data"]["userMsg"]["nickname"];
$rnd=rand(10000000,99999999);
$id=$rnd;
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.masjmzs.com/app/mission_new/handler");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
    $header=["country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",];
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_POST,true);
    $body="id=2&type_id=".$id."&type_name=video&".$tiket."&sign=&os=android";
 curl_setopt($ch,CURLOPT_POSTFIELDS,$body);
 $result=curl_exec($ch);
 $info=curl_getinfo($ch);
 curl_close($ch);
 $js=json_decode($result,true);
 $code=$js["code"];
 $msg=$js["msg"];
 $gold=$js["data"]["gold_flag"];
 $count=$js["data"]["count"];
 $limit=$delay*$count/60;
 $lmt=substr($limit,0,4);
 if($code=="200"){
 echo$ijo."[•] ".$biru.$nik.$ijo." [-] sukses".$putih." | gold: + ".$ijo.$gold.$t;$limit=0;}
 elseif($code=="10002"){
 echo$ijo."[•] ".$biru.$nik." [-] ".$kuning.substr($msg,0,18).$t;
 sleep(1);
 $limit++;}
 sleep($sleep);}
 if($limit>$total){
 echo$ijo.$msgwe.$t;
 break;}
 $q=0;
 echo$putih."[w] limit : ".$turkis.$lmt.$ijo." minute";
 sleep(1);
 echo$putih." [-] ".$turkis."rolling ".$ijo;
 while($q<5){$q++;echo"•";
 sleep(1);}
 echo$t;}}
 sleep(1);
 echo$turkis."[w] convert gold".$t;
 sleep(1);
 $con=readline($putih."[•] lanjutkan [Y] [N] => ");
 if($con=="y"OR$con=="Y"){
 echo$ijo."[-] prosesing . . .".$t;
 sleep(3);
 for($i=0;$i<$total;$i++){
 sleep(1);
 $tiket=$config[$i];
 $login=login($tiket);
 $log=json_decode($login,true);
 $nik=$log["data"]["userMsg"]["nickname"];
 echo$ijo."[•] ".$biru.$nik.$t;
 $exe=exe($tiket);
 $js=json_decode($exe,true);
 $code=$js["code"];
 $msg=$js["msg"];
 $gold=$js["data"]["left_gold"];
 $bal=$js["data"]["balance"];
 $conv=$js["data"]["convert_gold"];
 $ibal=$js["data"]["increment_balance"];
 if($code=="200"){
 echo$ijo."[+] ".$msg.$putih." | convert: ".$ijo.$conv.$putih." | balance: +\$ ".$ijo.$ibal.$t;
 sleep(2);
 echo$putih."[•] memperharui data".$t;
 sleep(1);
 echo$putih."[•] gold: ".$ijo.$gold.$putih." | balance: \$".$ijo.$bal.$t;}
 else{
 echo"[!] ".$msg.$t;
 echo$kuning."[-] setidaknya kamu punya 600 gold untuk di convert".$t;}}}
 else{
 sleep(1);}
 echo$ijo.$msgwe.$t;
 sleep(1);
 $date=new DateTime();
 echo$ijo."[".$date->format("H:i:s d/m/Y")."]";
sleep(1);
echo$ijo."[•] thankz for use my tools".$t;
function login($tiket){
$curl=curl_init();
curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://www.masjmzs.com/app/User/index",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>$tiket."&sign=&os=android",CURLOPT_HTTPHEADER=>["country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],CURLOPT_SSL_VERIFYPEER=>0,));
$result=curl_exec($curl);
curl_close($curl);
return$result;}
function invite($tiket){
$curl=curl_init();
curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://www.masjmzs.com/app/mission_new/handler?id=11",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"language=in&".$tiket."&sign=&os=android&version=2.3.0&code_or_phone=F54960",CURLOPT_HTTPHEADER=>["country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/json; charset=UTF-8","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],CURLOPT_SSL_VERIFYPEER=>0,));
$result=curl_exec($curl);
curl_close($curl);
return$result;}
function exe($tiket){
$curl=curl_init();
curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>true,CURLOPT_URL=>"http://www.masjmzs.com/app/cash/exchange",CURLOPT_TIMEOUT=>30,CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>"language=in&".$tiket."&sign=&os=android",CURLOPT_HTTPHEADER=>["country"=>"ID","brand"=>"Xiaomi","version"=>"2.3.0","language"=>"in","os"=>"android","Content-Type"=>"application/x-www-form-urlencoded","Referer"=>"http://com.masjmzs.com/personal/incomeDetails.html?type=1","Accept-Encoding"=>"gzip","User-Agent"=>"okhttp/3.8.0",],CURLOPT_SSL_VERIFYPEER=>0,));
$result=curl_exec($curl);
curl_close($curl);
return$result;
}
?>










