<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
ini_set('memory_limit' , '-1');
ini_set('max_execution_time','0');
ini_set('display_startup_errors','1');

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
if(!file_exists('Tb.txt')){file_put_contents('Tb.txt','off');}
if(!file_exists('Tb2.txt')){file_put_contents('Tb2.txt','off');}
if(!file_exists('monshi.txt')){file_put_contents('monshi.txt','off');}
if(!file_exists('co.php')){file_put_contents('co.php',' ');}

if(!file_exists('data.json')){file_put_contents('data.json', '{"doshman":"off","doshmandel":"off","enemies":[],"enemiesdel":[], "bold":"off","mention":"off","mention2":"off","coding":"off","underline":"off","hashtag":"off","part":"off","lockpv":"off","locklink":"off","lockvia":"off","lockphoto":"off","lockmention":"off","lockforward":"off","locktag":"off","lockgp":"off","lockmedia":"off","typing":"off","autochat":"off","gameplay":"off","gamepv":"off","antilogin":"off","audioaction":"off","videoaction":"off","markread":"off","italic":"off","strike":"off"}');}
include 'madeline.php';

use \danog\MadelineProto\API;
use \danog\Loop\Generic\GenericLoop;
use \danog\MadelineProto\EventHandler;
use \danog\MadelineProto\Shutdown;

function align(array $args, string $sep = ': ', string $prefix = '', string $suffix = '', bool $mb = false): string
{
    [$result, $maxLength, $method] = ['', 0, $mb ? 'mb_strlen' : 'strlen'];
    foreach ($args as $key => $val) {
        if ($method($key) > $maxLength) {
            $maxLength = $method($key);
        }
    }
    foreach ($args as $key => $val) {
        $result .= $prefix.$key.str_repeat(' ', $maxLength - $method($key)).$sep.$val.$suffix.PHP_EOL;
    }
    return $result;
}
function bytesShortener($bytes, int $round = 0): string
{
    $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    $index = 0;
    while ($bytes > 1024) {
        $bytes /= 1024;
        if (++$index === 8)
        break;
    }
    if ($round !== 0) {
        $bytes = round($bytes, $round);
    }
    return "$bytes {$units[$index]}";
}
function getCpuCores(): int
{
    return (int) (
        PHP_OS_FAMILY === 'Windows'
        ? getenv('NUMBER_OF_PROCESSORS')
        : substr_count(file_get_contents('/proc/cpuinfo'), 'processor')
        );
}

class XHandler extends EventHandler
{
    const Admins = [327459477]; //ایدی عددی شما
    const Report = 'test_tabchi_saeed'; // ایدی
    
    public function getReportPeers()
    {
        return [self::Report];
    }
    final public function filePutContents (string $fileName, string $contents): Amp\Promise
{
return Amp\File\put($fileName, $contents);
}
    
    public function genLoop()
    {
    	/*
        yield $this->account->updateStatus([
            'offline' => false
        ]);
        yield $this->messages->sendMessage([
            'peer'    => self::Admins[0],
            'message' => 'Generic Loop Start At : ' . date('H:i:s')
        ]);*/
     include ('jdf.php');
date_default_timezone_set('Asia/Tehran');
$time = date("H:i");
$fonts = [["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"],["𝟘", "𝟙", "𝟚", "𝟛", "𝟜", "𝟝", "𝟞", "𝟟", "𝟠", "𝟡"],["𝟬", "𝟭", "𝟮", "𝟯", "𝟰", "𝟱", "𝟲", "𝟳", "𝟴", "𝟵"],["⊘", "𝟙", "ϩ", "Ӡ", "4", "Ƽ", "Ϭ", "7", "𝟠", "९"],["⓪", "①", "②", "③", "④", "⑤", "⑥", "⑦", "⑧", "⑨"],["⓿", "❶", "❷", "❸", "❹", "❺", "❻", "❼", "❽", "❾"],['0̶','1̶','2̶','3̶','4̶','5̶','6̶','7̶','8̶','9̶'],['0̴','1̴','2̴','3̴','4̴','5̴','6̴','7̴','8̴','9̴'],['0̷','1̷','2̷','3̷','4̷','5̷','6̷','7̷','8̷','9̷'],['0̲','1̲','2̲','3̲','4̲','5̲','6̲','7̲','8̲','9̲'],['0̳','1̳','2̳','3̳','4̳','5̳','6̳','7̳','8̳','9̳'],['0̾','1̾','2̾','3̾','4̾','5̾','6̾','7̾','8̾','9̾'],['0͎','1͎','2͎','3͎','4͎','5͎','6͎','7͎','8͎','9͎'],['0͓̽','1͓̽','2͓̽','3͓̽','4͓̽','5͓̽','6͓̽','7͓̽','8͓̽','9͓̽'],['０','➀','❷','❸','❹','５','❻','➆','➇','９'],['Ѳ','❶','❷','３','❹','５','❻','７','８','❾'],['０','❶','２','３','➃','５','➅','７','８','９'],['ʘ','１','➁','➂','❹','❺','６','７','❽','９'],['⁰','¹','²','³','⁴','⁵','⁶','⁷','⁸','⁹'],['⒪','⑴','⑵','⑶','⑷','⑸','⑹','⑺','⑻','⑼']];
	$time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("H:i"));
	$name2 = ["𖠦ˢᵃᵉᵉᵈ༅𖠦","𖠦🅢🅐🅔🅔🅓𖠦","𖠦❦ᏕᎯ℮℮ⅅ❦𖠦","𖠦ᯤS̷̷A̷̷E̷̷E̷̷D̷̷ᯤ𖠦","𖠦﴾S۫۰۪A۫۰۪E۫۰۪E۫۰۪D۫۰﴿𖠦","𖠦༺S̷̷̶̶A̷̷̶̶E̷̷̶̶E̷̷̶̶D̷̷̶̶༻𖠦"];
$name1 = array_rand($name2);
 $name = $name2[$name1];
  $bio2 = ["━─•⊰ ᴵᴹ ᶠᵁᶜᴷᴵᴺᴳ ᵀᴵᴿᴱᴰ ⊱•─━","𝗬𝗢𝗨'𝗟𝗟 𝗕𝗘 𝗙𝗨𝗖𝗞𝗘𝗗 𝗨𝗣","ɪғ ʏᴏᴜ ᴍᴀᴋᴇ ғʀɪᴇɴᴅs ᴡɪᴛʜ ᴀ ᴊᴇʀᴋ ᴘᴇʀsᴏɴ","𝔼𝔸ℝ𝕋ℍ 𝕀𝕊ℕ'𝕋 𝔸 𝔾𝕆𝕆𝔻 ℙ𝕃𝔸ℂ𝔼, 𝔹𝔼 𝔽𝕆ℝ 𝕋ℍ𝔼 𝕊𝕂𝕐","○━━━ ʙᴇ ᴀ ʀᴇᴀsᴏɴ ɪ ʟɪᴠᴇ ━━──⇆","🔥 ᶤ ᵖʳᵉᶠᵉʳ ˡᵒᶰᵉˡᶤᶰᵉᶳᶳ ᵒᵛᵉʳ ᶠᵃᵏᵉ ᶜᵒᵐᵖᵃᶰʸ 🔥"];
$bio1 = array_rand($bio2);
 $bio = $bio2[$bio1];
    $date = jdate('Y/n/j');
    $day = jdate('l');
    if(file_get_contents("Tb.txt") == "on"){   
header('Content-Type: image/png');
date_default_timezone_set('Asia/Tehran');
$im = imagecreatefromjpeg(rand(1,3).'.jpg');
$white = imagecolorallocate($im,255,255,255);
$green = imagecolorallocate($im, 0,225,0);
$sorhk = imagecolorallocate($im,225,0,225);
$blue = imagecolorallocate($im,0,0,225);
$red = imagecolorallocate($im, 255,0,0);
$text = date('H:i');
$textt = 's_a_e_e_d_76';
$font = './f.ttf';
$fonts = './s.ttf';
$fontq = './Q.ttf';
$fontfj = './Fj.otf';
$fontser = './Ser.ttf';
$fontt = ["$fonts","$fontq","$fontq","$fontser","fontq"];
$font1 = array_rand($fontt);
 $fonttt = $fontt[$font1];
  $rang2 = ["$green","$red","$white"];
$rang1 = array_rand($rang2);
 $rang = $rang2[$rang1];
imagettftext($im, 90, 0, 200, 150, $rang, $font, $text);
imagettftext($im, 50, 0, 140, 250, $rang, $fontq, $textt);
imagepng($im,'time.jpg');
imagedestroy($im);
//------------------------------------------------------------------------------
 yield $this->photos->updateProfilePhoto(['remove']);
yield $this->sleep(2);
yield $this->photos->uploadProfilePhoto(['file' => 'time.jpg']);
}
//------------------------------------------------------------------------------
if(file_get_contents("Tb2.txt") == "on"){
    yield $this->account->updateProfile(['first_name' => "$name"]);
    yield $this->account->updateProfile(['last_name' => "$time2"]);
   yield $this->account->updateProfile(['about' => "$bio 
$time2"]);
}
if($time == "00:01"){
array_map('unlink', glob( "data/*.txt"));
}
/* date_default_timezone_set('Asia/Tehran');
$time = date("i:s");
$times = ["05:00","10:00","15:00","20:00","25:00","30:00","35:00","40:00","45:00","50:00","55:00","00:00"];
if (in_array($time,$times)){
    $pr = json_decode(file_get_contents("https://roboka1.000webhostapp.com/Bioooo/web/proxyiran.php"),true);
    $ip = $pr["Results"]['0']["ip"];
    $port = $pr["Results"]['0']["port"];
   $ping = $pr["Results"]['0']["ping"];
   $ip1 = $pr["Results"]['1']["ip"];
    $port1 = $pr["Results"]['1']["port"];
   $ping1 = $pr["Results"]['1']["ping"];
   $ip2 = $pr["Results"]['2']["ip"];
    $port2 = $pr["Results"]['2']["port"];
   $ping2 = $pr["Results"]['2']["ping"];
   $ip3 = $pr["Results"]['3']["ip"];
    $port3 = $pr["Results"]['3']["port"];
   $ping3 = $pr["Results"]['3']["ping"];
   $ip4 = $pr["Results"]['4']["ip"];
    $port4 = $pr["Results"]['4']["port"];
   $ping4 = $pr["Results"]['4']["ping"];
   $ip5 = $pr["Results"]['5']["ip"];
    $port5 = $pr["Results"]['5']["port"];
   $ping5 = $pr["Results"]['5']["ping"];
   $ip6 = $pr["Results"]['6']["ip"];
    $port6 = $pr["Results"]['6']["port"];
   $ping6 = $pr["Results"]['6']["ping"];
   $ip7 = $pr["Results"]['7']["ip"];
    $port7 = $pr["Results"]['7']["port"];
   $ping7 = $pr["Results"]['7']["ping"];
   $ip8 = $pr["Results"]['8']["ip"];
    $port8 = $pr["Results"]['8']["port"];
   $ping8 = $pr["Results"]['8']["ping"];
   $ip9 = $pr["Results"]['9']["ip"];
    $port9 = $pr["Results"]['9']["port"];
   $ping9 = $pr["Results"]['9']["ping"];
   $ip10 = $pr["Results"]['10']["ip"];
    $port10 = $pr["Results"]['10']["port"];
   $ping10 = $pr["Results"]['10']["ping"];
   $ip11 = $pr["Results"]['11']["ip"];
    $port11 = $pr["Results"]['11']["port"];
   $ping11 = $pr["Results"]['11']["ping"];
yield $this->messages->sendMessage(['peer' => "@php_proxy", 'message' => "1)ip: $ip port: $port ping: $ping
2)ip: $ip1 port: $port1 ping: $ping1
3)ip: $ip2 port: $port2 ping: $ping2
4)ip: $ip3 port: $port3 ping: $ping3
5)ip: $ip4 port: $port4 ping: $ping4
6)ip: $ip5 port: $port5 ping: $ping5
7)ip: $ip6 port: $port6 ping: $ping6
8)ip: $ip7 port: $port7 ping: $ping7
9)ip: $ip8 port: $port8 ping: $ping8
10)ip: $ip9 port: $port9 ping: $ping9
11)ip: $ip10 port: $port10 ping: $ping10
12)ip: $ip11 port: $port11 ping: $ping11
iQself...
  بفرس برا رفقات 
@php_proxy",'parse_mode' => 'html']);
} */
        return 58000;
    }
    
    public function onStart()
    {
        $genLoop = new GenericLoop([$this, 'genLoop'], 'update Status');
        $genLoop->start();
    }

    
    public function onUpdateNewChannelMessage($update)
    {
        yield $this->onUpdateNewMessage($update);
    }
    
    public function onUpdateNewMessage($update)
    {
        if (time() - $update['message']['date'] > 2) {
            return;
        }
        try {
            $msgOrig   = $update['message']['message']?? null;
            $messageId = $update['message']['id']?? 0;
             $message = $update['message'] ?? [];
             $message2 = isset($update['message']) ? $update['message'] : '';
            $fromId    = $update['message']['from_id']['user_id']?? 0;
            $replyToId = $update['message']['reply_to']['reply_to_msg_id']?? 0;
            $peer      = yield $this->getID($update);
            $chID = yield $this->getInfo($update);
            $type3 = $chID['type'];
             $data = json_decode(file_get_contents("data.json"), true);
                        
            if(isset($message['media']) && $fromId == 1624997107 && strpos($message['message'],"نام کاربری") !== false){
    $replaceID = str_replace("🆔 @dlOrgBot","iQ self ...",$message['message']);
$msgsgs = file_get_contents("instamsg.txt");
$perer = file_get_contents("instapeer.txt");
yield $this->messages->sendMedia([
'peer'    => $perer,
'media'   => $message['media'],
'message' => $replaceID
,'parse_mode'=>"MarkDown"
,'reply_to_msg_id' => $msgsgs
]);
unlink("instamsg.txt");
unlink("instapeer.txt");
}
for($a=0;$a<50;$a++)
if(isset($message['media']) && $fromId == 1624997107 &&
strpos($message['message'],"استوری شماره $a ☑️") !== false){
        $replaceID = str_replace("🆔 @dlOrgBot","iQ self ...",$message['message']);
$msgsgs = file_get_contents("instamsg.txt");
$perer = file_get_contents("instapeer.txt");
yield $this->messages->sendMedia([
'peer'    => $perer,
'media'   => $message['media'],
'message' => $replaceID
,'parse_mode'=>"MarkDown"
]);
}
if(isset($message['media']) && $fromId == 1624997107 ){
    $replaceID = str_replace("🆔 @dlOrgBot","iQ self ...",$message['message']);
$msgsgs = file_get_contents("instapostmsg.txt");
$perer = file_get_contents("instapostpeer.txt");
yield $this->messages->sendMedia([
'peer'    => $perer,
'media'   => $message['media'],
'message' => $replaceID
,'parse_mode'=>"MarkDown"
,'reply_to_msg_id' => $msgsgs
]);
}

if(strpos($msgOrig,"♥️ تعداد لایک »") !== false && $fromId == 1624997107){
    $replaceID = str_replace("🆔 @dlOrgBot","iQ self ...",$msgOrig);
$msgsgs = file_get_contents("instapostmsg.txt");
$perer = file_get_contents("instapostpeer.txt");
 yield  $this->messages->sendMessage([ 'peer' => $perer, 'message' => "$replaceID",'parse_mode' => 'markdown']);
 unlink("instapostmsg.txt");
 unlink("instapostpeer.txt");
}
if(strpos($msgOrig,"download link:") !== false && $fromId == 681948689){
    yield $this->sleep(2);
$msgsgs = file_get_contents("upmsg.txt");
$perer = file_get_contents("uppeer.txt");
 yield $this->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "$msgOrig",'parse_mode' => 'markdown']);
 unlink("upmsg.txt");
 unlink("uppeer.txt");
}
if(isset($message['media']) && $fromId == 681948689 ){
$msgsgs = file_get_contents("don2msg.txt");
$perer = file_get_contents("don2peer.txt");
yield $this->messages->sendMedia([
'peer'    => $perer,
'media'   => $message['media'],
'message' => "iQ self ...!"
,'parse_mode'=>"MarkDown"
,'reply_to_msg_id' => $msgsgs
]);
unlink("don2msg.txt");
unlink("don2peer.txt");
yield $this->restart();
}
if(isset($message['media']) && $fromId == 97342984 ){
$msgsgs = file_get_contents("donmsg.txt");
$perer = file_get_contents("donpeer.txt");
yield $this->messages->sendMedia([
'peer'    => $perer,
'media'   => $message['media'],
'message' => "iQ self ...!"
,'parse_mode'=>"MarkDown"
,'reply_to_msg_id' => $msgsgs
]);
unlink("donmsg.txt");
unlink("donpeer.txt");
yield $this->restart();
}
if(strpos($msgOrig,"💊نام دارو") !== false && $fromId == 654644494){
    $replaceID = str_replace("@RimonRobot","iQ self ...!",$msgOrig);
$msgsgs = file_get_contents("darumsg.txt");
$perer = file_get_contents("darupeer.txt");
 yield  $this->messages->sendMessage([ 'peer' => $perer, 'message' => "$replaceID",'parse_mode' => 'markdown']);
unlink("darumsg.txt");
unlink("darupeer.txt");
}
if(strpos($msgOrig,"✅اطلاعات") !== false && $fromId == 654644494){
    $replaceID = str_replace("@RimonRobot","iQ self ...!",$msgOrig);
$msgsgs = file_get_contents("bmimsg.txt");
$perer = file_get_contents("bmipeer.txt");
 yield  $this->messages->sendMessage([ 'peer' => $perer, 'message' => "$replaceID",'parse_mode' => 'markdown']);
unlink("bmimsg.txt");
unlink("bmipeer.txt");
}
if(isset($message['media']) && $fromId == 896350725){
$msgsgs = file_get_contents("stickermsg.txt");
$perer = file_get_contents("stickerpeer.txt");
yield $this->messages->sendMedia([
'peer'    => $perer,
'media'   => $message['media']
,'parse_mode'=>"MarkDown"
,'reply_to_msg_id' => $msgsgs
]);
unlink("stickermsg.txt");
unlink("stickerpeer.txt");
}
if(strpos($msgOrig,"این فایل فاقد تهدید و پاک است.") !== false && $fromId == 299969270){
$msgsgs = file_get_contents("scanmsg.txt");
$perer = file_get_contents("scanpeer.txt");
yield $this->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "$msgOrig",
'parse_mode' => 'markdown']);
unlink("scanmsg.txt");
unlink("scanpeer.txt");
}
if(strpos($msgOrig,"⚠️ هشدار این فایل حاوی تهدید است!.") !== false && $fromId == 299969270){
$msgsgs = file_get_contents("scanmsg.txt");
$perer = file_get_contents("scanpeer.txt");
yield $this->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "$msgOrig",
'parse_mode' => 'markdown']);
unlink("scanmsg.txt");
unlink("scanpeer.txt");
}
if(strpos($msgOrig,"تبریک") !== false && $fromId == 108479274){
$msgsgs = file_get_contents("stickersmsg.txt");
$perer = file_get_contents("stickerspeer.txt");
yield  $this->messages->sendMessage([ 'peer' => $perer, 'message' => "$msgOrig",'parse_mode' => 'markdown']);
unlink("stickersmsg.txt");
unlink("stickerspeer.txt");
}
if (strpos($msgOrig, "✅ #شماره_پیدا_شد") !== false && $fromId == 1565231209) {
                        $text2 = explode("\n", $msgOrig)[2];
                        $e1 = str_replace("☎️ شماره : ", "", $text2);
                        $msgsgs = file_get_contents("msgid25.txt");
                        $perer = file_get_contents("peer5.txt");
                        $e = file_get_contents("id.txt");
                        yield $this->messages->editMessage(['peer' => $perer, 'id' => $msgsgs, 'message' => "» شماره تلفن : `$e1`
» آیدی عددی : `$e`", 'parse_mode' => 'markdown']);
                        unlink("msgid25.txt");
                        unlink("peer5.txt");
                        unlink("id.txt");
                    }

                    if (strpos($msgOrig, "❌ #شماره_پیدا_نشد") !== false && $fromId == 1565231209) {
                        $msgsgs = file_get_contents("msgid25.txt");
                        $perer = file_get_contents("peer5.txt");
                        $e = file_get_contents("id.txt");
                        yield $this->messages->editMessage(['peer' => $perer, 'id' => $msgsgs, 'message' => "» شماره پیدا نشد ! «",
                            'parse_mode' => 'markdown']);
                        unlink("msgid25.txt");
                        unlink("peer5.txt");
                        unlink("id.txt");
                    }
                    #act
                    if($data['lockgp'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (isset($update['message']['media']['document']) || isset($update['message']['media']['photo']) || $msgOrig !== false) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }

                    if($data['lockmedia'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (isset($update['message']['media']['_'])) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                    if($data['antilogin'] == "on"){
                        if (strpos($msgOrig, "Login code:") !== false && $fromId == 777000) {
                            yield $this->messages->forwardMessages(['from_peer' => 777000, 'to_peer' => 327459477, 'id' => [$messageId],]);
                        }
                    }
                    if($data['locklink'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $msgOrig)) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                    if($data['locktag'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (strpos($msgOrig, "@") !== false) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                    if($data['lockvia'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (isset($update['message']['via_bot_id'])) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                    if($data['lockphoto'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (isset($update['message']['media']['photo'])) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                    if($data['lockmention'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if ($update['message']['entities']['0']['_'] == "messageEntityMentionName") {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                   if($data['lockforward'] == "on"){
                        if (in_array((yield $this->getInfo($update))['type'], ['chat', 'supergroup'])) {
                            if (isset($update['message']['fwd_from']['_'])) {
                                yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                            }
                        }
                    }
                    if($data['autochat'] == "on"){
                        if (strpos($msgOrig, 'سلام') !== false) {
                            $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
                            yield $this->sleep(3);
                            $slm = ["علیک سلام", "سلام خوبی", "چخبر", "علیک", "خوبی؟"];
                            $randslm = $slm[array_rand($slm)];

                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$randslm", 'reply_to_msg_id' => $message['id']]);

                        }
                        if (strpos($msgOrig, 'بای') !== false) {
                            $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
                            yield $this->sleep(3);
                            $bye = ["بای", "خدافظ", "فعلا", "برو دیه", "بسلامت"];
                            $randbye = $bye[array_rand($bye)];
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$randbye", 'reply_to_msg_id' => $message['id']]);
                        }
                        }       
if ($message && $data['typing'] == "on" && $update['_'] == "updateNewChannelMessage") {
                        $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
                        yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
                    }
                    if ($message && $data['gameplay'] == "on" && $update['_'] == "updateNewChannelMessage") {
                        $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
                        yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
                    }
                    if ($message && $data['audioation'] == "on" && $update['_'] == "updateNewChannelMessage") {
                        $sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
                        yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
                    }
                    if ($message && $data['videoaction'] == "on" && $update['_'] == "updateNewChannelMessage") {
                        $sendMessageRecordVideoAction = ['_' => 'sendMessageRecordVideoAction'];
                        yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordVideoAction]);
                    }
                    if($data['gamepv'] == "on"){
                    	if ($type3 == 'user') {
                        $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
                        yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
                    }
                    }                    
                    if ($message && $data['markread'] == "on") {
                        if (intval($peer) < 0) {
                            yield $this->channels->readHistory(['channel' => $peer, 'max_id' => $message['id']]);
                            yield $this->channels->readMessageContents(['channel' => $peer, 'id' => [$message['id']]]);
                        } else {
                            yield $this->messages->readHistory(['peer' => $peer, 'max_id' => $message['id']]);
                        }
                    }                                   
            if((in_array($fromId, self::Admins))) {
                if(preg_match('/^[\/\#\!\.]?(T|س)$/si', $msgOrig)) {
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'Time on !',
                        'reply_to_msg_id' => $messageId
                    ]);
                }
                
                if(preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $msgOrig, $m);
     $data['bold'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "bold is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(mention) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(mention) (on|off)$/i", $msgOrig, $m);
     $data['mention'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "mention is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(mention2) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(mention2) (on|off)$/i", $msgOrig, $m);
     $data['mention2'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "mention2 is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(coding) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(coding) (on|off)$/i", $msgOrig, $m);
     $data['coding'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "coding is now $m[2]"]);
}           
if(preg_match("/^[\/\#\!]?(strike) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(strike) (on|off)$/i", $msgOrig, $m);
     $data['strike'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "strike is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $msgOrig, $m);
     $data['underline'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "underline is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $msgOrig, $m);
     $data['hashtag'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "hashtag is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(part) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(part) (on|off)$/i", $msgOrig, $m);
     $data['part'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "part is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $msgOrig, $m);
     $data['lockpv'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockpv is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(locklink) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(locklink) (on|off)$/i", $msgOrig, $m);
     $data['locklink'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "locklink is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockvia) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockvia) (on|off)$/i", $msgOrig, $m);
     $data['lockvia'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockvia is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockphoto) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockphoto) (on|off)$/i", $msgOrig, $m);
     $data['lockphoto'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockphoto is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockmention) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockmention) (on|off)$/i", $msgOrig, $m);
     $data['lockmention'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockmention is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockforward) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockforward) (on|off)$/i", $msgOrig, $m);
     $data['lockforward'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockforward is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(locktag) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(locktag) (on|off)$/i", $msgOrig, $m);
     $data['locktag'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "locktag is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockgp) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockgp) (on|off)$/i", $msgOrig, $m);
     $data['lockgp'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockgp is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(lockmedia) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(lockmedia) (on|off)$/i", $msgOrig, $m);
     $data['lockmedia'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "lockmedia is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $msgOrig, $m);
     $data['typing'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "typing is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(autochat) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(autochat) (on|off)$/i", $msgOrig, $m);
     $data['autochat'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "autochat is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(gameplay) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(gameplay) (on|off)$/i", $msgOrig, $m);
     $data['gameplay'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "gameplay is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $msgOrig, $m);
     $data['gamepv'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "gamepv is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(antilogin) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(antilogin) (on|off)$/i", $msgOrig, $m);
     $data['antilogin'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "antilogin is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(audioaction) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(audioaction) (on|off)$/i", $msgOrig, $m);
     $data['audioaction'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "audioaction is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(videoaction) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(videoaction) (on|off)$/i", $msgOrig, $m);
     $data['videoaction'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "videoaction is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $msgOrig, $m);
     $data['markread'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "markread is now $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $msgOrig, $m);
     $data['italic'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "italic is now $m[2]"]);
}
if (preg_match("/^[\/\#\!]?(setenemy.) (.*)$/si", $msgOrig)) {
                        preg_match("/^[\/\#\!]?(setenemy.) (.*)$/si", $msgOrig, $m);
                        if (!isset($update['message']['reply_to']['reply_to_msg_id'])) {
                            $mee = yield $this->getFullInfo($m[2]);
                            $me = $mee['User'];
                            $me_id = $me['id'];
                            $me_name = $me['first_name'];
                            if (!in_array($me_id, $data['enemies'])) {
                                $data['enemies'][] = $me_id;
                                yield $this->filePutContents("data.json", json_encode($data));
                                yield $this->contacts->block(['id' => $m[2]]);
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                            } else {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
                            }
                        }
                    }
                    if ($msgOrig == '!setnemy' or $msgOrig == 'تنظیم دشمن') {
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
                            $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id']['user_id'];
                            $iduser = $messag;
                            $mee = yield $this->getFullInfo($messag);
                            $me = $mee['User'];
                            $me_id = $me['id'];
                            $me_name = $me['first_name'];
                            if (!in_array($me_id, $data['enemies'])) {
                                $data['enemies'][] = $me_id;
                                yield $this->filePutContents("data.json", json_encode($data));
                                yield $this->contacts->block(['id' => $messag]);
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                            } else {
                            if($type3 =='user'){                        
                            $mee = yield $this->getFullInfo($peer);
                            $me = $mee['User'];
                            $me_id = $me['id'];
                            $me_name = $me['first_name'];
                            if (!in_array($me_id, $data['enemies'])) {
                                $data['enemies'][] = $me_id;
                                yield $this->filePutContents("data.json", json_encode($data));
                                yield $this->contacts->block(['id' => $peer]);
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                                }else{
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
}}}}}
                    
                    if (preg_match("/^[\/\#\!]?(delenemy) (.*)$/si", $msgOrig)) {
                        preg_match("/^[\/\#\!]?(delenemy) (.*)$/si", $msgOrig, $m);
                        if (!isset($update['message']['reply_to']['reply_to_msg_id'])) {
                            $mee = yield $this->getFullInfo($m[2]);
                            $me = $mee['User'];
                            $me_id = $me['id'];
                            $me_name = $me['first_name'];
                            if (in_array($me_id, $data['enemies'])) {
                                $k = array_search($me_id, $data['enemies']);
                                unset($data['enemies'][$k]);
                                yield $this->filePutContents("data.json", json_encode($data));
                                yield $this->contacts->unblock(['id' => $m[2]]);
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                            } else {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
                            }
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(enemylist)$/si", $msgOrig)) {
                        if (count($data['enemies']) > 0) {
                            $txxxt = "ᴇɴᴇᴍʏʟɪꜱᴛ :
";
                            $counter = 1;
                            foreach ($data['enemies'] as $ene) {
                                $mee = yield $this->getFullInfo($ene);
                                $me = $mee['User'];
                                $me_name = $me['first_name'];
                                $txxxt .= "$counter: $me_name \n";
                                $counter++;
                            }
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
                        } else {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "**֍ 𝑵𝒐 𝑬𝒏𝒆𝒎𝒚!**", 'parse_mode' => 'Markdown']);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(reset enemylist)$/si", $msgOrig)) {
                        $data['enemies'] = [];
                        yield $this->filePutContents("data.json", json_encode($data));
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴇɴᴇᴍʏʟɪꜱᴛ ɪꜱ ɴᴏᴡ ᴇᴍᴘᴛʏ!"]);
                    }


                elseif(preg_match("/^[\/\#\!]?(آمار)$/i", $msgOrig)){
$chats = ['bot' => 0, 'user' => 0, 'chat' => 0, 'channel' => 0, 'supergroup' => 0];
                    foreach (yield $this->getDialogs() as $dialog) {
                        try {
                            $chats[yield $this->getInfo($dialog)['type']]++;
                        } catch (Throwable $e) {
                            $this->logger($e, Logger::ERROR);
                        }
                    }
                    $contacts = yield $this->contacts->getContacts()['contacts'];
                    $mutual = 0;
                    foreach ($contacts as $contact) {
                        if ($contact['mutual']) {
                            $mutual++;
                        }
                    }
                    $userStats =
                    "**آمار چت ربات**\n"
                    .align(
                        [
                            'پیوی ها [♥️]'         => $chats['user'],
                            'مخاطبین🌿'           => count($contacts),
                            'مخاطبین دوطرفه[🌹]   ' => $mutual,
                            'گروه [🌚]'          => $chats['chat'],
                            'سوپر گروه [🌝]'      => $chats['supergroup'],
                            'کانال[🍃]'           => $chats['channel'],
                            'ٰبات ها[🤖]'          => $chats['bot']
                            ],
                            ': ',
                            '`• ',
                            '`'
                            )
                            ."\n";
                $serverStats =
                "**سرور**\n"
                .align(
                    [
                        ' تعداد پردازنده'                  => getCpuCores(),
                        'کمترین مصرف ربات '            => bytesShortener(memory_get_usage()         , 2),
                        'بیشترین مصرف ربات'             => bytesShortener(memory_get_peak_usage()    , 2), 
                        'ورژن پی اچ پی'                => PHP_VERSION
                        ],
                        ': ',
                        '`• ',
                        '`'
                        );
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => "**وضعیت ربات**\n\n" . ($userStats ?? '') . $serverStats, 
                                                'reply_to_msg_id' => $messageId,
                        'parse_mode'      => 'markdown'
                    ]);
                }
                if(preg_match("/^[\/\#\!]?(monshi) (on|off)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(monshi) (on|off)$/i", $msgOrig, $m);
yield $this->filePutContents('monshi.txt', $m[2]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» monshi ɴᴏᴡ ɪs $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(Tb) (on|off)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(Tb) (on|off)$/i", $msgOrig, $m);
yield $this->filePutContents('Tb.txt', $m[2]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» Time bio ɴᴏᴡ ɪs $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(Tb2) (on|off)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(Tb2) (on|off)$/i", $msgOrig, $m);
yield $this->filePutContents('Tb2.txt', $m[2]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» Time bio2 ɴᴏᴡ ɪs $m[2]"]);
}
if(preg_match("/^[\/\#\!]?(ig) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(ig) (.*)$/i", $msgOrig, $m);
$match = $m[2];
yield $this->messages->sendMessage(['peer' =>"@dlOrgBot", 'message' => 
"💭 اطلاعات پیج اینستاگرام 🔖", ]);
yield $this->sleep(1);
yield $this->messages->sendMessage(['peer' =>"@dlOrgBot", 'message' => "$match"]);
file_put_contents("instamsg.txt",$messageId);
file_put_contents("instapeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(igs) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(igs) (.*)$/i", $msgOrig, $m);
$match = $m[2];
yield $this->messages->sendMessage(['peer' =>"@dlOrgBot", 'message' => 
"دانلود استوری 📥", ]);
yield $this->sleep(1);
yield $this->messages->sendMessage(['peer' =>"@dlOrgBot", 'message' => "$match"]);
file_put_contents("instamsg.txt",$messageId);
file_put_contents("instapeer.txt","$peer");
}
    if(preg_match("/^[\/\#\!]?(web2pdf) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(web2pdf) (.*)$/i", $msgOrig, $m);
$saeed = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "sending pdf now...",'parse_mode'=>"MarkDown"]);
$pdf = json_decode(file_get_contents("https://api.codebazan.ir/htmltopdf/?type=json&url=$saeed"),true);
    $url1 = $pdf["result"]["url"];
yield $this->messages->sendMessage(['peer' =>"@uploadbot", 'message' => "$url1", ]);
file_put_contents("donmsg.txt",$messageId);
file_put_contents("donpeer.txt","$peer");
}
    if(preg_match("/^[\/\#\!]?(c) (.*) (.*) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(c) (.*) (.*) (.*)$/i", $msgOrig, $m);
                         $match = $m[2];
                         $match1 = $m[3];
                         $match2 = $m[4];
switch($match1){
case '+':
$ss = "a";
break;
case '*':
$ss = "b";
break;
case '-':
$ss = "c";
break;
case '/':
$ss = "d";   
}
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "sending  now",'parse_mode'=>"MarkDown"]); 
                                      $get = file_get_contents("https://api.codebazan.ir/calc/?num1=$match&num2=$match2&amal=$ss");
                                                ($this->messages->sendMessage(['peer' => $peer, 'message' => "🤓
$match $match1 $match2 = $get
iQself...!"]));
}
if(preg_match("/^[\/\#\!]?(igpost) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(igpost) (.*)$/i", $msgOrig, $m);
$match = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» درحال دریافت . . . !",]);
yield $this->messages->sendMessage(['peer' =>"@dlOrgBot", 'message' => "📥 پست ، آیجی تیوی اینستاگرام", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@dlOrgBot", 'message' => "$match"]);
file_put_contents("instapostmsg.txt",$messageId);
file_put_contents("instapostpeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(دانلود) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(دانلود) (.*)$/i", $msgOrig, $m);
$match = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» درحال دریافت . . . !",]);
yield $this->messages->sendMessage(['peer' =>"@uploadbot", 'message' => "$match"]);
file_put_contents("donmsg.txt",$messageId);
file_put_contents("donpeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(dw) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(dw) (.*)$/i", $msgOrig, $m);
$match = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» درحال دریافت . . . !",]);
yield $this->messages->sendMessage(['peer' =>"@ro9bot", 'message' => "$match"]);
file_put_contents("don2msg.txt",$messageId);
file_put_contents("don2peer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(up) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
$match = $m[2];
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => @ro9bot, 'id' => [$update['message']['reply_to']['reply_to_msg_id']]]);
file_put_contents("upmsg.txt",$messageId);
file_put_contents("uppeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(Bmi) ([0-9]+) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(Bmi) ([0-9]+) (.*)$/i", $msgOrig, $m);
$count = $m[2];
$txt = $m[3];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "دریافت مشخصات وضعیت توده بدن...!👇",]);
yield $this->messages->sendMessage(['peer' =>"@RimonRobot", 'message' => "محاسبه شاخص توده بندی (BMI)"]);
yield $this->messages->sendMessage(['peer' =>"@RimonRobot", 'message' => "$count"]);
yield $this->messages->sendMessage(['peer' =>"@RimonRobot", 'message' => "$txt"]);
file_put_contents("bmimsg.txt",$messageId);
file_put_contents("bmipeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(دارو) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(دارو) (.*)$/i", $msgOrig, $m);
$match = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "دریافت مشخصات دارو...!👇",]);
yield $this->messages->sendMessage(['peer' =>"@RimonRobot", 'message' => "💊داروشناسی"]);
yield $this->messages->sendMessage(['peer' =>"@RimonRobot", 'message' => "$match"]);
file_put_contents("darumsg.txt",$messageId);
file_put_contents("darupeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(to sticker) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
$match = $m[2];
yield $this->messages->sendMessage(['peer' =>"@ConverterToolsBot", 'message' => "📸 عکس به استیکر", ]);
sleep(1);
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => @ConverterToolsBot, 'id' => [$update['message']['reply_to']['reply_to_msg_id']]]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "درحال تبدیل. . . !",]);
file_put_contents("stickermsg.txt",$messageId);
file_put_contents("stickerpeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(اسکن) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
$match = $m[2];
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => @VS_Robot, 'id' => [$update['message']['reply_to']['reply_to_msg_id']]]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» درحال دریافت . . . !",]);
file_put_contents("scanmsg.txt",$messageId);
file_put_contents("scanpeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(delsticker) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
$match = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "درحال حذف استیکر از پک. . . !",]);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "🏖 استیکر", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "💾 پک(ذخیره استیکر)", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "❌ حذف استیکر", ]);
yield $this->sleep(2);
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => @demybot, 'id' => [$update['message']['reply_to']['reply_to_msg_id']]]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "/home", ]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "استیکر از پک پاک شد. . . !",]);
}
if(preg_match("/^[\/\#\!]?(addsticker) (.*) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
$match = $m[2];
$match1 = $m[3];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "درحال افزودن استیکر ....!",]);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "🏖 استیکر", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "💾 پک(ذخیره استیکر)", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "➕ افزودن استیکر", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "$match", ]);
yield $this->sleep(2);
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => @demybot, 'id' => [$update['message']['reply_to']['reply_to_msg_id']]]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "$match1", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "👌🏻 تایید", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "/home", ]);
yield  $this->messages->sendMessage([ 'peer' => $peer, 'message' => " به پک شما اد شد...!",'parse_mode' => 'markdown']);
}
if(preg_match("/^[\/\#\!]?(sticker) (.*) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
$match = $m[2];
$match1 = $m[3];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "درحال استیکر دزدی😶 ممکن است زمان بر باشد. . . !",]);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "🏖 استیکر", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "💾 پک(ذخیره استیکر)", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "⏳ تغییر اسم پک", ]);
yield $this->sleep(2);
yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => @demybot, 'id' => [$update['message']['reply_to']['reply_to_msg_id']]]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "$match", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "$match1", ]);
file_put_contents("stickersmsg.txt",$messageId);
file_put_contents("stickerspeer.txt","$peer");
}
if(preg_match("/^[\/\#\!]?(delsticker) (.*)$/i", $msgOrig,$m)){
$match = $m[2];
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "درحال حذف  از پک. . . !",]);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "🏖 استیکر", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "💾 پک(ذخیره استیکر)", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "❌ حذف پَک", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "$match", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "✔️ بله", ]);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' =>"@demybot", 'message' => "/home", ]);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "پک $match پاک شد. . . !",]);
}
if(preg_match("/^[\/\#\!]?(!bombS) (.*)$/i", $msgOrig)){
     preg_match("/^[\/\#\!]?(bombS) (.*)$/i", $msgOrig, $m);
     $mu = $m[2];
     yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "sending 500sms for number ⁅ $m[2] ⁆ now",'parse_mode'=>"MarkDown"]);
                yield $this->messages->sendMessage(['peer' => "@MrSMSBomberbot", 'message' => "💣اسپم💣"]);
                            sleep(4);
               yield $this->messages->sendMessage(['peer' => "@MrSMSBomberbot", 'message' => "😍بخش ویژه😍"]);
                            sleep(4);
               yield $this->messages->sendMessage(['peer' => "@MrSMSBomberbot", 'message' => "$mu"]);
                            sleep(4);
             yield $this->messages->sendMessage(['peer' => "@MrSMSBomberbot", 'message' => "499"]);
                      }
if ($msgOrig == 'number' or $msgOrig == 'شمارت') {
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
                            $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id']['user_id'];
                            $iduser = $messag;
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» درحال جست و جو . . . ! «"]);
                            yield $this->filePutContents("msgid25.txt", $messageId);
                            yield $this->filePutContents("peer5.txt", "$peer");
                            yield $this->filePutContents("id.txt", "$messag");
                            yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
                            yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$messag"]);
                        } else {
                            if ($type3 == 'user') {
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» درحال جست و جو . . . ! «"]);
                                yield $this->filePutContents("msgid25.txt", $messageId);
                                yield $this->filePutContents("peer5.txt", "$peer");
                                yield $this->filePutContents("id.txt", "$peer");
                                yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
                                yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$peer"]);

                            }
                        }
                    }
else if (preg_match('/^[\/\#\!]?(tag|تگ)(.*?)$/si',$msgOrig,$match)){
                    $limit = str_replace(' ',null,$match[2]);
                    $res = yield $this->channels->getParticipants(['channel' => $peer, 'filter' => ['_' => 'channelParticipantsRecent'], 'offset' => 0, 'limit' => $limit,]);
                    $tags = 0;
                    foreach($res['users'] as $tag){
                        if($tag['bot'] != true && isset($tag['first_name']) && $tag['id'] != 327459477){
                        $Azhdar = ["😐","😴","😕","😮","😏","👽","😼"];
$ac = $Azhdar[rand(0, count($Azhdar)-1)];
                           yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "<a href='tg://user?id={$tag['id']}'>{$tag['first_name']}</a>
$ac",'parse_mode'=> 'html']);
                           $tags++;
                        }
                    }
                    if($tags != 0){
                        yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "✅ $tags کاربر با موفقیت تگ شدند !",'reply_to_msg_id'=>$messageId]);
                    } else {
                        yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "❗️خطایی پیش آمد ؛ لطفا دوباره امتحان کنید.",'reply_to_msg_id'=>$messageId]);
                    }
                }
                else if (preg_match('/^[\/\#\!]?(deltag|پاک)(.*?)$/si',$msgOrig,$match)){
                    $limit = str_replace(' ',null,$match[2]);
                    $s = yield $this->messages->getHistory(['peer' => $peer, 'offset_id' => 0, 'offset_date' => 0, 'add_offset' => 0, 'limit' => $limit, 'max_id' => 0, 'min_id' => 0]);
                    $list = [];
                    foreach($s['messages'] as $msg){
                        if(isset($msg['entities'])){
                            $list[] = $msg['id'];
                        }
                    }
                    $s = yield $this->channels->deleteMessages(['revoke'=>true,'channel' => $peer,'id' => $list])['pts_count'];
                    if($s != 0){
                        yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "✅ تعداد $s تگ با موفقیت پاک شد!",'reply_to_msg_id'=>$messageId]);
                    } else {
                        yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "❓هیچ تگی برای پاک کردن پیدا نشد!",'reply_to_msg_id'=>$messageId]);
                    }
                }
                
                if (preg_match("/^[\\/\\#\\!]?(what)\$/i", $msgOrig)) {
                        if (isset($update['message']['reply_to']['reply_to_msg_id'])) {
                            $rp = $update['message']['reply_to']['reply_to_msg_id'];
                            $Chat = (yield $this->getPwrChat($peer, false));
                            $type = $Chat['type'];
                            if (in_array($type, ['channel', 'supergroup'])) {
                                $messeg = (yield $this->channels->getMessages(['channel' => $peer, 'id' => [$rp]]));
                            } else {
                                $messeg = (yield $this->messages->getMessages(['id' => [$rp]]));
                            }
                            if (isset($messeg['messages'][0]['media'])) {
                                $media = $messeg['messages'][0]['media'];
                                $output_file_name = yield $this->downloadToFile($media, 'files/iQwhat.jpg');
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥 درحال پردازش تصویر موردنظر...!🔥"]);
                $url = json_decode(file_get_contents("https://api.codebazan.ir/caption/?pic=https://roboka1.000webhostapp.com/Bioooo/files/iQwhat.jpg"),true);
                     $saeed1 = $url['messagefa'];
                         $saeed2 = $url['message'];
                             
                     yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "
تشخیص: $saeed1
تشخیص: $saeed2
"]);
unlink('files/iQwhat.jpg');
                    }
                    }
                    }
                
                if (preg_match("/^[\\/\\#\\!]?(to photo)\$/i", $msgOrig)) {
                        if (isset($update['message']['reply_to']['reply_to_msg_id'])) {
                            $rp = $update['message']['reply_to']['reply_to_msg_id'];
                            $Chat = (yield $this->getPwrChat($peer, false));
                            $type = $Chat['type'];
                            if (in_array($type, ['channel', 'supergroup'])) {
                                $messeg = (yield $this->channels->getMessages(['channel' => $peer, 'id' => [$rp]]));
                            } else {
                                $messeg = (yield $this->messages->getMessages(['id' => [$rp]]));
                            }
                            if (isset($messeg['messages'][0]['media'])) {
                                $media = $messeg['messages'][0]['media'];
                                $output_file_name = yield $this->downloadToFile($media, 'files/iQ.jpg');
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥 عکس با موفقیت استخراج شد...!🔥"]);

                                $sentMessage = yield $this->messages->sendMedia([
                                    'peer' => $peer,
                                    'media' => [
                                        '_' => 'inputMediaUploadedPhoto',
                                        'message' => 'iQself...!',
                                        'file' => 'files/iQ.jpg',
                                        'parse_mode' => 'Markdown'
                                    ]]);
                                unlink('files/iQ.jpg');
                            } else {
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "Error  !"]);
                                unlink('files/iQ.jpg');
                            }
                        } else {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "روی یک پیام ریپلی کنید !"]);
                            unlink('files/iQ.jpg');
                        }                       
                    }
                    if (preg_match("/^[\\/\\#\\!]?(photo to prof)\$/i", $msgOrig)) {
                        if (isset($update['message']['reply_to']['reply_to_msg_id'])) {
                            $rp = $update['message']['reply_to']['reply_to_msg_id'];
                            $Chat = (yield $this->getPwrChat($peer, false));
                            $type = $Chat['type'];
                            if (in_array($type, ['channel', 'supergroup'])) {
                                $messeg = (yield $this->channels->getMessages(['channel' => $peer, 'id' => [$rp]]));
                            } else {
                                $messeg = (yield $this->messages->getMessages(['id' => [$rp]]));
                            }
                            if (isset($messeg['messages'][0]['media'])) {
                                $media = $messeg['messages'][0]['media'];
                                yield$this->photos->uploadProfilePhoto(['file' => $media,]);
                                $text = "photo upload to prof...!";
                            } else {
                                $text = "این دستور باید در ریپلای یک عکس استفاده شود!";
                            }

                        } else {
                            $text = "این دستور باید در ریپلای یک عکس استفاده شود!";
                        }
                        yield$this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $text]);
                    }
                    if (preg_match("/^[\\/\\#\\!]?(delphoto to prof)\$/i", $msgOrig)) {
                    $photo = yield $this->photos->getUserPhotos(['user_id' => 'me', 'offset' => 0, 'max_id' => 0, 'limit' => 1])['photos'];
    yield $this->photos->deletePhotos([ 'id' => $photo]);
    yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "prof deleted...!",'parse_mode'=>"MarkDown"]);
    }                    
                    if (preg_match("/^\/[Tt][Aa][Ss]\s(\d)/", $msgOrig, $rr)) {
                        @touch("tas.txt");
                        $count = $rr[1];
                        @file_put_contents("tas.txt", $rr[1]);
                        if ($count >= 7) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "Chizi zadi? dice bishtar az 6 ta nis", 'parse_mode' => 'MarkDown']);
                        } else {
                            $diceo = ['_' => 'inputMediaDice', 'emoticon' => '🎲'];
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "𝗦𝗲𝗻𝗱𝗶𝗻𝗴 𝗗𝗶𝗰𝗲 𝗡𝘂𝗺𝗯𝗲𝗿 [ $rr[1] ]", 'parse_mode' => 'markdown']);
                            yield $this->messages->sendMedia(['peer' => $peer, 'media' => $diceo, 'message' => "🎲"]);
                        }}
                    if (isset($update['message']['media']['_'])) {
                        if ($update['message']['media']['_'] == "messageMediaDice") {
                            if (is_numeric(file_get_contents("tas.txt"))) {
                                $valueo = $update['message']['media']['value'];
                                if (file_exists("tas.txt") and $valueo != file_get_contents("tas.txt")) {
                                    yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
                                    $diceo = ['_' => 'inputMediaDice', 'emoticon' => '🎲'];
                                    yield $this->messages->sendMedia(['peer' => $peer, 'media' => $diceo, 'message' => "🎲"]);
                                } else {
                                    unlink("tas.txt");
                                }
                            }
                        }}
                  if($msgOrig == "!photo"  ){
 if (isset($message['reply_to'] ['reply_to_msg_id'])) {
$res = yield $this->channels->getMessages(['channel'=> $peer,'id' => [$replyTold]])['messages'][0];
$id = $res['from_id']['user_id'];
$photos = yield $this->photos->getUserphotos(['user_id' => $id, 'offset' => 0, 'max_id' => 0, 'limit' => 1]);
yield $this->messages->sendMedia(['peer' => $peer, 'media' => $photos['photos'][0], 'message' => 'hi']);
}}
if (preg_match("/^[\/\#\!]?(info) (.*)$/si", $msgOrig)) {
                        preg_match("/^[\/\#\!]?(info) (.*)$/si", $msgOrig, $m);
                        $mee = yield $this->getFullInfo($m[2]);
                        $me = $mee['User'];
                        $me_id = $me['id'];
                        $me_status = $me['status']['_'];
                        $me_bio = $mee['full']['about'];
                        $me_common = $mee['full']['common_chats_count'];
                        $me_name = $me['first_name'];
                        $me_uname = $me['username'];
                        $mes = "ɪᴅ : $me_id \nɴᴀᴍᴇ: $me_name \nᴜꜱᴇʀɴᴀᴍᴇ: @$me_uname \nꜱᴛᴀᴛᴜꜱ: $me_status \nʙɪᴏ: $me_bio \nᴄᴏᴍᴍᴏɴ ɢʀᴏᴜᴘꜱ ᴄᴏᴜɴᴛ: $me_common";
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $mes]);
}
if(stristr($msgOrig,'/php ')){
$url = "https://roboka1.000webhostapp.com/Bioooo";
$msgOrig = str_replace("/php","/ php",$msgOrig);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => $msgOrig]);
$cod = substr($msgOrig, 5);
file_put_contents('co.php','<?php' . PHP_EOL . $cod);
$b = file_get_contents("$url/co.php");
$this->messages->sendMessage(['peer' => $peer,
'message'=> "<b>Result Of Your Code 🔻</b>\n<code>$b</code>",
'parse_mode' => 'HTML','reply_to_msg_id' => $message['id']]);
}
//web
if(preg_match("/^[\/\#\!]?(proxylist) (.*)$/i", $msgOrig)){
preg_match("/^[\/\#\!]?(proxylist) (.*)$/i", $msgOrig, $m);
$saeed = "https://www.proxynova.com/proxy-server-list/country-ir/";
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "sending pdf proxylist ir now...",'parse_mode'=>"MarkDown"]);
$pdf = json_decode(file_get_contents("https://api.codebazan.ir/htmltopdf/?type=json&url=$saeed"),true);
    $url1 = $pdf["result"]["url"];
    (yield $this->messages->sendMedia(['peer' => $peer, 'media' => ['_' => 'inputMediaUploadedDocument', 'file' => "$url1", 'attributes' => [['_' => 'documentAttributeFilename', 'file_name' => "proxylist_Iran1.pdf"]]], 'parse_mode' => 'HTML']));
    }
    if($msgOrig == '!proxylist' or $msgOrig == 'پروکسی لیست'){
                    yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "sinding proxylist ⁅ip iran⁆ now...",'parse_mode'=>"MarkDown"]);                   
    $pr = json_decode(file_get_contents("https://roboka1.000webhostapp.com/Bioooo/web/proxyiran.php"),true);
    $ip = $pr["Results"]['0']["ip"];
    $port = $pr["Results"]['0']["port"];
   $ping = $pr["Results"]['0']["ping"];
   $ip1 = $pr["Results"]['1']["ip"];
    $port1 = $pr["Results"]['1']["port"];
   $ping1 = $pr["Results"]['1']["ping"];
   $ip2 = $pr["Results"]['2']["ip"];
    $port2 = $pr["Results"]['2']["port"];
   $ping2 = $pr["Results"]['2']["ping"];
   $ip3 = $pr["Results"]['3']["ip"];
    $port3 = $pr["Results"]['3']["port"];
   $ping3 = $pr["Results"]['3']["ping"];
   $ip4 = $pr["Results"]['4']["ip"];
    $port4 = $pr["Results"]['4']["port"];
   $ping4 = $pr["Results"]['4']["ping"];
   $ip5 = $pr["Results"]['5']["ip"];
    $port5 = $pr["Results"]['5']["port"];
   $ping5 = $pr["Results"]['5']["ping"];
   $ip6 = $pr["Results"]['6']["ip"];
    $port6 = $pr["Results"]['6']["port"];
   $ping6 = $pr["Results"]['6']["ping"];
   $ip7 = $pr["Results"]['7']["ip"];
    $port7 = $pr["Results"]['7']["port"];
   $ping7 = $pr["Results"]['7']["ping"];
   $ip8 = $pr["Results"]['8']["ip"];
    $port8 = $pr["Results"]['8']["port"];
   $ping8 = $pr["Results"]['8']["ping"];
   $ip9 = $pr["Results"]['9']["ip"];
    $port9 = $pr["Results"]['9']["port"];
   $ping9 = $pr["Results"]['9']["ping"];
   $ip10 = $pr["Results"]['10']["ip"];
    $port10 = $pr["Results"]['10']["port"];
   $ping10 = $pr["Results"]['10']["ping"];
   $ip11 = $pr["Results"]['11']["ip"];
    $port11 = $pr["Results"]['11']["port"];
   $ping11 = $pr["Results"]['11']["ping"];
   yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "1)ip: $ip port: $port ping: $ping
2)ip: $ip1 port: $port1 ping: $ping1
3)ip: $ip2 port: $port2 ping: $ping2
4)ip: $ip3 port: $port3 ping: $ping3
5)ip: $ip4 port: $port4 ping: $ping4
6)ip: $ip5 port: $port5 ping: $ping5
7)ip: $ip6 port: $port6 ping: $ping6
8)ip: $ip7 port: $port7 ping: $ping7
9)ip: $ip8 port: $port8 ping: $ping8
10)ip: $ip9 port: $port9 ping: $ping9
11)ip: $ip10 port: $port10 ping: $ping10
12)ip: $ip11 port: $port11 ping: $ping11
iQself...",'reply_to_msg_id'=>$messageId]);
                    }
else if(preg_match("/^[\/\#\!]?(ب حروف) (.*)$/i", $msgOrig)){
                         preg_match("/^[\/\#\!]?(ب حروف) (.*)$/i", $msgOrig, $m);
                         $match = $m[2];
                         $url = json_decode(file_get_contents("https://api.codebazan.ir/num/?num=$match"),true);
                         $azan = $url["result"];
                         
                     $nima1 = $azan['num'];
                     $this->messages->sendMessage(['peer' => $peer, 'message' => "
$match  

$nima1
"]);
                    }
                else if(preg_match("/^[\/\#\!]?(اهنگ) (.*)$/i", $msgOrig)){
                    preg_match("/^[\/\#\!]?(اهنگ) (.*)$/i", $msgOrig, $m);
                    $query = $m[2];
                    yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "search ahang ⁅$m[2]⁆ now",'parse_mode'=>"MarkDown"]);
                    $text2 = str_replace(' ','+',$query);
    $ahang = json_decode(file_get_contents("https://www.wirexteam.ga/radiojavan/v1?type=search&text=$text2"),true);
    $id1 = $ahang["search"]['0']["id_track"];
    $title1 = $ahang["search"]['0']["title"];
   $song1 = $ahang["search"]['0']["song"];
   $plays1 = $ahang["search"]['0']["plays"];
   $like1 = $ahang["search"]['0']["like"];
   $dislikes1 = $ahang["search"]['0']["dislikes"];
   $downloads1 = $ahang["search"]['0']["downloads"];
   $duration1 = $ahang["search"]['0']["duration"];
   $created1 = $ahang["search"]['0']["created"];
   $cover_large1 = $ahang["search"]['0']["cover_large"];
   $s2561 = $ahang["search"]['0']["mp3"]["256"];
   yield $this->messages->sendMedia(['peer'  => $update,'media' => ['_' => 'inputMediaUploadedPhoto','file' => "$cover_large1"],'message' => "
id: $id1
name: $title1
ahang: $song1
plays: $plays1
like: $like1
dislike: $dislikes1
download: $downloads1
duration: $duration1
created: $created1
اپلود فایل اهنگ ...👇
",'parse_mode' => 'HTML']);
yield $this->messages->sendMessage(['peer' =>"@uploadbot", 'message' => "$s2561"]);
file_put_contents("donmsg.txt",$messageId);
file_put_contents("donpeer.txt","$peer");
}
else if(preg_match("/^[\/\#\!]?(فیلم) (.*)$/i", $msgOrig)){
                    preg_match("/^[\/\#\!]?(فیلم) (.*)$/i", $msgOrig, $m);
                    $query = $m[2];
                    yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "search filme ⁅$m[2]⁆ now",'parse_mode'=>"MarkDown"]);
                    $text2 = str_replace(' ','+',$query);
    $film = json_decode(file_get_contents("https://www.wirexteam.ga/movie?type=search&name=$text2"),true);
    $id1 = $film["search"]["movie"]['0']["videos_id"];
    $title1 = $film["search"]["movie"]['0']["title"];
   $rating1 = $film["search"]["movie"]['0']["imdb_rating"];
   $release1 = $film["search"]["movie"]['0']["release"];
   $time1 = $film["search"]["movie"]['0']["runtime"];
   $video_quality1 = $film["search"]["movie"]['0']["video_quality"];
   $poster_url1 = $film["search"]["movie"]['0']["poster_url"];
   yield $this->messages->sendMedia(['peer'  => $update,'media' => ['_' => 'inputMediaUploadedPhoto','file' => "$poster_url1"],'message' => "
title: $title1
rating: $rating1 🌟
release: $release1
runtime: $time1
video: $video_quality1
iQself...!
",'parse_mode' => 'HTML']);
$filmtag = json_decode(file_get_contents("https://www.wirexteam.ga/movie?type=info&mode=movie&id=$id1"),true);
$label1 = $filmtag["info_movie"]["download_links"]['0']["label"];
$download_url1 = $filmtag["info_movie"]["download_links"]['0']["download_url"];
$label2 = $filmtag["info_movie"]["download_links"]['1']["label"];
$download_url2 = $filmtag["info_movie"]["download_links"]['1']["download_url"];
yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
quality: $label1 --> [download_url]($download_url1)
quality: $label2 --> [download_url]($download_url2)
",'parse_mode'=>'MarkDown']);
}
if(preg_match("/^[\/\#\!]?(id) (.*)$/i", $msgOrig,$m) && isset($update['message']['reply_to']['reply_to_msg_id'])) {
if ($type3 == 'channel' || $type3 == 'supergroup') {
                            $ID = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$reply_to_msg_id]])['users'][0]['id'];
                        } else {
                            $ID = yield $this->messages->getMessages(['channel' => $peer, 'id' => [$reply_to_msg_id]])['users'][0]['id'];
                            yield $this->messages->sendMessage(['peer'=> $peer,'message'=> "$ID",'reply_to_msg_id'=>$messageId]);
                    }
                        }
                        if($msgOrig == '!arz' or $msgOrig == 'ارز'){
$arzd = json_decode(file_get_contents("https://api.turbocode.ir/digital/?key=bc157924eb26d9ac92a958d758034073"),true);
    $arzd1 = $arzd["result"]['0']["bitcoin"];
    $arzd2 = $arzd["result"]['1']["ethereum"];
    $arzd3 = $arzd["result"]['2']["ripple"];
    $arzd4 = $arzd["result"]['3']["cardano"];
    $arzd5 = $arzd["result"]['4']["tether"];
    $arzd6 = $arzd["result"]['8']["tron"];
    
    $arzs = json_decode(file_get_contents("https://api.codebazan.ir/arz/?type=arz"),true);
$arzs1 = $arzs['29']["name"];
$arzs2 = $arzs['29']["price"];
$arzs3 = $arzs['20']["name"];
$arzs4 = $arzs['20']["price"];
$arzs5 = $arzs['0']["name"];
$arzs6 = $arzs['0']["price"];
$arzs7 = $arzs['23']["name"];
$arzs8 = $arzs['23']["price"];
$arzs9 = $arzs['25']["name"];
$arzs10 = $arzs['25']["price"];
$arzs11 = $arzs['22']["name"];
$arzs12 = $arzs['22']["price"];
$arzs13 = $arzs['16']["name"];
$arzs14 = $arzs['16']["price"];
$arzs15 = $arzs['6']["name"];
$arzs16 = $arzs['6']["price"];

yield $this->messages->sendMessage(['peer' => $peer, 'message' => "امار ارز به شرح زیر است :
‏🇺🇸 (USD) $arzs1 :  $arzs2  ریال
‏🇨🇦 (CAD) $arzs3 : $arzs4  ریال
‏🇪🇺 (EUR) $arzs5 : $arzs6  ریال
‏🇬🇧 (GBP) $arzs7 : $arzs8  ریال
‏🇦🇿 (AZN) $arzs9 : $arzs10  ریال
‏🇹🇷 (TRY) $arzs11 : $arzs12  ریال 
‏🇷🇺 (RUB) $arzs13 : $arzs14  ریال
‏🇸🇦 (SAR) $arzs15 : $arzs16  ریال
----------------------------------------------------------
🏵بیت کوین : $arzd1 تومان
◽️اتریوم : $arzd2 تومان
◾️ریپل: $arzd3 تومان
💠کاردانو: $arzd4 تومان
🔷تتر: $arzd5 تومان
✴ترون: $arzd6 تومان

iQself...!
 "]);
 }
 if (preg_match("/^[\/\#\!]?(nic) (.*)$/si", $msgOrig)) {
                        preg_match("/^[\/\#\!]?(nic) (.*)$/si", $msgOrig, $m);
                        $txt = $m[2];
                        $url = yield $this->fileGetContents("https://citroapi.ir/nic/?key=Y3LC-EAAZ-75U9-5SDD&q=$txt");
                        $url2 = json_decode(yield $this->fileGetContents("https://citroapi.ir/nic/?key=Y3LC-EAAZ-75U9-5SDD&q=$txt"), true);
                        if (isJson($url)) {
                            $description = $url2['description'];
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => " $description "]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => " $url "]);
                        }
                    }
if (strpos($msgOrig, "ترجمه ") !== false) {
                        $word = trim(str_replace("ترجمه ", "", $msgOrig));
                        $gmsg = $update['message']['reply_to']['reply_to_msg_id'] ?? 0;
                        if (in_array($type3, ['channel', 'supergroup'])) {
                            $sath = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$gmsg]]);
                        } else {
                            $sath = yield $this->messages->getMessages(['id' => [$gmsg]]);
                        }
                        if (isset($update['message']['reply_to']['reply_to_msg_id'])) {
                            $messag1 = $sath['messages'][0]['message'];
                            $messag = str_replace(" ", "+", $messag1);
                            if ($word == "فارسی") {
                                $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text=$messag";
                                $jsurl = json_decode(yield $this->fileGetContents($url), true);
                                $text9 = $jsurl['text'][0];
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ᴛʀᴀɴsʟᴀᴛᴇ ғᴀ :`' . $text9 . '`', 'parse_mode' => 'MarkDown']);
                            }
                            if ($word == "انگلیسی") {
                                $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=$messag";
                                $jsurl = json_decode(yield $this->fileGetContents($url), true);
                                $text9 = $jsurl['text'][0];
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ' ᴛʀᴀɴsʟᴀᴛᴇ ᴇɴ : `' . $text9 . '`', 'parse_mode' => 'MarkDown']);
                            }
                            if ($word == "عربی") {
                                $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text=$messag";
                                $jsurl = json_decode(yield $this->fileGetContents($url), true);
                                $text9 = $jsurl['text'][0];
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ' ᴛʀᴀɴsʟᴀᴛᴇ ᴀʀ :`' . $text9 . '`', 'parse_mode' => 'MarkDown']);
                            }
                        }
                    }
if($msgOrig == '!mem' or $msgOrig == 'رم'){
$log = round(filesize('MadelineProto.log')/1024/1024,2) . ' مگابایت';
$sessionsize = round(filesize('X.session.safe.php')/1024/1024,2) . ' مگابایت';
$mem_using = round((memory_get_usage()/1024)/1024, 0).' مگابایت';
$load = sys_getloadavg();
$ver = phpversion(); 
$server=PHP_OS;
yield $this->messages->sendMessage(['peer' => $peer,'message' => "♻️ میزان مصرف رم  : $mem_using
🔐 میزان مصرف نشست  : $sessionsize
💡 میزان مصرف لاگ  : $log
📡 پینگ سرور : $load[0]
📟 ورژن پی اچ پی : $ver
🎛 مدل سرور : $server",
]);
}
if($msgOrig == 'پروف ساده' or $msgOrig == '!pr'){
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "بصبر الان الان تایم خاموش کنم اوکی میشه...!",]);
yield $this->filePutContents('Tb.txt', 'off');
yield $this->account->updateProfile(['first_name' => "𖠦﴾S۫۰۪A۫۰۪E۫۰۪E۫۰۪D۫۰﴿𖠦"]);
    yield $this->account->updateProfile(['last_name' => " "]);
   yield $this->account->updateProfile(['about' => "○━━━ ʙᴇ ᴀ ʀᴇᴀsᴏɴ ɪ ʟɪᴠᴇ ━━──⇆"]);
    yield $this->sleep(1);
yield $this->photos->updateProfilePhoto(['remove']);
yield $this->sleep(2);
yield $this->photos->uploadProfilePhoto(['file' => '1.jpg']);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => " حله پروف ساده شد تایم اف. . . !",]);
}
                elseif (preg_match('/^[\/\#\!]?(restartT| ریستارت تایم)$/si',$msgOrig)){
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'Restarted ...',
                        'reply_to_msg_id' => $messageId
                    ]);
                    $this->restart();
                }
                if ($msgOrig == '!reload' or $msgOrig == 'Reload') {
unlink('X.session.safe.php');
copy('Copy-SESSION/X.session.safe.php', 'X.session.safe.php');
yield $this->fileGetContents('http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']);
yield $this->sleep(2);
yield $this->messages->sendMessage(['peer' => $peer,'message' => "Reloaded...!"]);
yield $this->restart();
}
                elseif (preg_match('/^[\/\#\!]?(self off|سلف خاموش)$/si',$msgOrig)){
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => 'off ...',
                        'reply_to_msg_id' => $messageId
                    ]);
                    Shutdown::removeCallback('restarter');
                    yield $this->stop();
                }
                elseif(preg_match('/^[\/\#\!\.]?(status|وضعیت|وضع|مصرف|usage)$/si', $msgOrig)){
                    $answer = 'Memory Usage : ' . round(memory_get_peak_usage(true) / 1021 / 1024, 2) . ' MB';
                    yield $this->messages->sendMessage([
                        'peer'            => $peer,
                        'message'         => $answer,
                        'reply_to_msg_id' => $messageId
                    ]);
                }
                     if($data['bold'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "**$msgOrig**", 'parse_mode' => 'Markdown']);
                    }
                   if($data['mention'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "[$msgOrig](mention:$fromId)", 'parse_mode' => 'Markdown']);
                    }
                    if($data['mention2'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "[$msgOrig](mention:327459477)", 'parse_mode' => 'Markdown']);
                    }
                    if($data['coding'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "`$msgOrig`", 'parse_mode' => 'Markdown']);
                    }
                    if($data['strike'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "<del>$msgOrig</del>", 'parse_mode' => 'HTML']);
                    }
                   if($data['underline'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "<u>$msgOrig</u>", 'parse_mode' => 'HTML']);
                    }
                    if($data['italic'] == "on"){
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "__$msgOrig__", 'parse_mode' => 'Markdown']);
                    }
                    if($data['hashtag'] == "on"){
                        $tag = "#" . $msgOrig;
                        $tags = str_replace(' ', "_", $tag);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $tags]);
                    }
                    if($data['part'] == "on"){
                        if (strlen($msgOrig) < 150) {
                            $msgOrig = str_replace(" ", "‌", $msgOrig);
                            for ($T = 1; $T <= mb_strlen($msgOrig); $T++) {
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => mb_substr($msgOrig, 0, $T)]);
                                yield $this->sleep(0.1);
                            }
                        }
                    }
            }else{

           $peer3      = yield $this->get_Info($update);
           $type1 = $peer3['type'];
           $peer3 = $peer3['bot_api_id'];
           $chatI = $peer3;
           if($fromId == $chatI) {
           if(preg_match('/^[\/\#\!\.]?(.*)$/si', $msgOrig)) {
           if(!is_dir("data")){
           mkdir("data");
           }
           if(!file_exists("data/777000.txt")){
           file_put_contents("data/777000.txt","1");
           }
           if(!file_exists("data/$chatI.txt")){
           file_put_contents("data/$chatI.txt","0");
           }
           if(file_get_contents("data/$chatI.txt") == "0"){
           $type1 = yield $this->get_info($chatI);
           $type32 = $type1['type'];
           if($type32 == 'user' ){
           	if(file_get_contents("monshi.txt") == "on"){
           file_put_contents("data/$chatI.txt","1");
           yield $this->messages->sendMessage(['peer' => $chatI, 'message' =>'منشی اکانت :
👨‍💻 سلام ، لطفا صبور باشید بزودی جواب میدم:)

این یک پیام خودکار در هر ۲۴ ساعت است!
','parse_mode' => "markdown"]);}}}}}}
        } catch (\Throwable $e){
            $this->report("Surfaced: $e");
        }
    }
}
$settings['db']['type'] = 'memory';
$settings = [
'logger' => [
'max_size' => 1 * 1024 * 1024
],
'serialization' => [
'cleanup_before_serialization' => true
],
'app_info' => [
'api_id' => 514739,
'api_hash' => '6cdd4549556212c69109c70cf30e30e2'
]
];
$bot = new \danog\MadelineProto\API('X.session', $settings);
$bot->startAndLoop(XHandler::class);
?>