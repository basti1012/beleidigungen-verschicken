<?php 
/*
$replace = [
    'Ã¶' => 'ö', 'Ã¶' => 'ä', 'Ã¼' => 'ü', 'ÃŸ' => 'ß', 'a' => ''
];
function sanitizeString($str) {
    $str = preg_replace('/[Ã¶]/ui', 'ö', $str);
    $str = preg_replace('/[Ã¤]/ui', 'ä', $str);
    $str = preg_replace('/[Ã¼]/ui', 'ü', $str);
    $str = preg_replace('/[ÃŸ]/ui', 'ß', $str);
    $str = preg_replace('/[a]/ui', '', $str);

    return $str;
}
  */
$link_beleidigung='https://basti1012.bplaced.net/testordner_privat/beleidigen/beleidigung.php';
$filename = 'badword.txt';          
$daten = array(); 
$sammeln1=[]; 
if (file_exists($filename)){
    $daten = file($filename, FILE_IGNORE_NEW_LINES); 
  
 
    $count1 = 0;
    while(isset($daten[$count1])){
        array_push($sammeln1,$daten[$count1]);
        $count1++;
    }
} 

shuffle($sammeln1);
$sammeln=[]; 
for($r=0;$r<=1000;$r++){

 $haystack = $sammeln1[$r];
$needle   = 'Ãƒ';

if (strpos($sammeln1[$r] ,'Ã¶') !== false or
strpos($sammeln1[$r] ,'ÃŸ') !== false or
strpos($sammeln1[$r] ,'Ã¼') !== false or
strpos($sammeln1[$r] ,'Ã¤') !== false

) {

 }else{
//$samme= sanitizeString($sammeln1[$r]);//str_replace(array_keys($replace), $replace, $sammeln1[$r]);
    array_push($sammeln,$sammeln1[$r]);
 }
}
//   print_r($sammeln);
$phpjson=json_encode($sammeln);             
?>
<!doctype html>
<html lang="de">
<head>
<script>
//var gets=window.parent[0].top.frames.location.search;
var gets=location.search;
//console.log(gets);
gets=gets.split('&');
var wert_wurde_beleidigt='';
var menge_beleidigt=10;
var wer_beleidigt='Kein Absender angegeben';

for(a=0;a<=gets.length-1;a++){
    var names=gets[a].split('=')[0];
    var vall=gets[a].split('=')[1];
   // console.log(names,vall);
    if(names=='name1'){
        wert_wurde_beleidigt=vall;
    }
    if(names=='menge'){
        menge_beleidigt=vall;
    }
    if(names=='wer'){
        wer_beleidigt=vall;
    }
}
//console.log(wert_wurde_beleidigt,menge_beleidigt,wer_beleidigt);
</script>
<script src="jquery.js"></script>
<style>
* {
  box-sizing: border-box;
}
.mouth-wrapper {
  margin-top: 50px;
  position: relative;
  width: 250px;
  height: 70px;
}
#mouth {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 250px;
  height: 70px;
}
#mouth .teeth {
  position: absolute;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 50%;
  background: #f4f4f4;
}
#mouth .teeth.teeth-upper {
  -webkit-clip-path: polygon(5% 90%, 33% 50%, 66% 50%, 95% 90%, 50% 90%);
          clip-path: polygon(5% 90%, 33% 50%, 66% 50%, 95% 90%, 50% 90%);
}
#mouth .teeth.teeth-lower {
  top: 50%;
  -webkit-clip-path: polygon(10% 20%, 90% 20%, 66% 50%, 33% 50%);
          clip-path: polygon(10% 20%, 90% 20%, 66% 50%, 33% 50%);
}
#mouth .lip {
  opacity: 0.9;
  position: absolute;
  z-index: 2;
  left: 0;
  top: 0;
  width: 100%;
  height: 50%;
  background: crimson;
}
#mouth .lip.lip-lower {
  top: 50%;
}
#mouth.sound-none .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 0, 50% 20%, 66% 0, 100% 100%, 50% 100%);
          clip-path: polygon(0 100%, 33% 0, 50% 20%, 66% 0, 100% 100%, 50% 100%);
}
#mouth.sound-none .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 10%, 66% 10%, 100% 0, 66% 100%, 33% 100%);
          clip-path: polygon(0 0, 33% 10%, 66% 10%, 100% 0, 66% 100%, 33% 100%);
}
#mouth.sound-aei {
  width: 225px;
  height: 84px;
}
#mouth.sound-aei .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 0, 50% 20%, 66% 0, 100% 100%, 50% 50%);
          clip-path: polygon(0 100%, 33% 0, 50% 20%, 66% 0, 100% 100%, 50% 50%);
}
#mouth.sound-aei .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 100%, 33% 100%);
          clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 100%, 33% 100%);
}
#mouth.sound-aei {
  width: 225px;
  height: 84px;
}
#mouth.sound-aei .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 0%, 50% 20%, 66% 0%, 100% 100%, 50% 50%);
          clip-path: polygon(0 100%, 33% 0%, 50% 20%, 66% 0%, 100% 100%, 50% 50%);
}
#mouth.sound-aei .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 100%, 33% 100%);
          clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 100%, 33% 100%);
}
#mouth.sound-o {
  width: 125px;
  height: 105px;
}
#mouth.sound-o .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 10%, 50% 20%, 66% 10%, 100% 100%, 50% 50%);
          clip-path: polygon(0 100%, 33% 10%, 50% 20%, 66% 10%, 100% 100%, 50% 50%);
}
#mouth.sound-o .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 90%, 33% 90%);
          clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 90%, 33% 90%);
}
#mouth.sound-u {
  width: 165px;
  height: 93.1px;
}
#mouth.sound-u .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 10%, 50% 20%, 66% 10%, 100% 100%, 50% 50%);
          clip-path: polygon(0 100%, 33% 10%, 50% 20%, 66% 10%, 100% 100%, 50% 50%);
}
#mouth.sound-u .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 90%, 33% 90%);
          clip-path: polygon(0 0, 33% 50%, 66% 50%, 100% 0, 66% 90%, 33% 90%);
}
#mouth.sound-fv {
  width: 275px;
  height: 63px;
}
#mouth.sound-fv .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 0%, 50% 20%, 66% 0%, 100% 100%, 50% 66%);
          clip-path: polygon(0 100%, 33% 0%, 50% 20%, 66% 0%, 100% 100%, 50% 66%);
}
#mouth.sound-fv .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 0, 66% 0, 100% 0, 66% 100%, 33% 100%);
          clip-path: polygon(0 0, 33% 0, 66% 0, 100% 0, 66% 100%, 33% 100%);
}
#mouth.sound-bmp {
  width: 275px;
  height: 56px;
}
#mouth.sound-bmp .lip-upper {
  -webkit-clip-path: polygon(0 100%, 33% 0%, 50% 20%, 66% 0%, 100% 100%, 50% 100%);
          clip-path: polygon(0 100%, 33% 0%, 50% 20%, 66% 0%, 100% 100%, 50% 100%);
}
#mouth.sound-bmp .lip-lower {
  -webkit-clip-path: polygon(0 0, 33% 0, 66% 0, 100% 0, 66% 100%, 33% 100%);
          clip-path: polygon(0 0, 33% 0, 66% 0, 100% 0, 66% 100%, 33% 100%);
}
#beleidigen{
  margin-top:30px;
  height:30px;
  display:block;
  width:150px;
}
/*
.belei{
  display:none;
}
#beleidigen:checked~.belei{
  display:block;
  height:200px;
  width:80vw;
*/
</style>
</head>
<body>
<main>
<?php
if(isset($_GET['menge'])){
?>
    <h1>Überrasschung</h1></header>
    <div class="begruessung">Hallo 
        <span id="werwude"></span><br> 
        <span style="color:green;font-weight:900">
            <span id="vonwem"></span> 
        </span>
     hat dir 
        <span id="menge11"></span>
     Mitteilung hinterlassen<br>
     Zum starten einfach den Mund klicken. <br>Lautsprecher müssen aktiviert sein.
    </div>
    <div style="display:flex;flex-direction:column" id="app">
        <div class="df">
            <div class="mouth-wrapper">
                <div class="sound-none" id="mouth" ref="mouth">
                    <div class="teeth teeth-upper"></div>
                    <div class="lip lip-upper"></div>
                    <div class="lip lip-lower"></div>
                    <div class="teeth teeth-lower"></div>
                </div>
            </div>
        </div>
        <div style="margin:50px 0 0 50px;font-size:30px" id="wortout">Klicke auf mein Mund</div>
          <div id="linkout"></div>
    </div><!--
    <input type="checkbox" id="beleidigen" class='lined thin'>sofort zurück beleidigen!</input>-->
    <?php
}else{
?>
    <div class="belei">
     Name wen du beleidigen willst;<input type="text" id="beleiname"><br>
      Wie viele Beleidigungen ?<input id="menge" type="number" min="1" max="1000" value="10"><br>
      Wer beidigt ?(dein name ).<input type="text" id="wer"><br>
      Link erstellen :<input  type="button" id="generate" value="Link erstellen"><br>
    <div id="linkout"></div>
   </div>
   <?php
}
?>
   </main>
<script>
Array.prototype.random = function () {
  return this[Math.floor((Math.random()*this.length))];
}
wer=wert_wurde_beleidigt;
$('#werwude').html(wer);



von=wer_beleidigt;
 $('#vonwem').html(von);
menge=menge_beleidigt;
 $('#menge11').html(menge);
arr=JSON.parse('<?php echo $phpjson; ?>');
arr.random();
console.log(arr);
</script>
<script>

$('#generate').click(function(){
    na=$('#beleiname').val();
    me=$('#menge').val();
    we=$('#wer').val();
//    lin='https://basti1012.bplaced.net/admin/noch_testen/bekeidigen.php?name=Beleidigungen_veschicken.php&name1='+na+'&menge='+me+'&wer='+we+'';
    lin='<?php echo $link_beleidigung; ?>?name1='+na+'&menge='+me+'&wer='+we+'';
    $('#linkout').html('<a href="'+lin+'">'+lin+'</a>')
  })
  
"use strict";
var supportMsg = document.getElementById('linkout');
if ('speechSynthesis' in window) {
    supportMsg.innerHTML = 'Jipi!! Dein Browser kann vorlesen.';
} else {
    supportMsg.innerHTML = 'Sorry dein Browser kann keine Nachrichten vorlesen.';
    supportMsg.classList.add('not-supported');
}
function loadVoices() {
    var voices = speechSynthesis.getVoices();
}
loadVoices();
 
function sprich(h){
   var text=arr[h];
   $('#wortout').html($('#werwude').html()+' du '+text);
   window.speechSynthesis.onvoiceschanged = function(e) {
      loadVoices();
   };
   function speak(text) {
        var msg = new SpeechSynthesisUtterance();
        msg.text = $('#werwude').html()+' du '+text;
        msg.volume = parseFloat(1);
        msg.rate = parseFloat(1);
        msg.pitch = parseFloat(1);
            window.speechSynthesis.speak(msg);  
        }
        speak(text);
    }
 
    var obj = document.getElementById('mouth');
    obj.addEventListener('touchstart', function(event) {
          weiter(1,1);
    });
    obj.addEventListener('touched', function(event) {
          weiter(1,1);     
    });
    obj.addEventListener('touchend', function(event) {
          weiter(1,1);     
    });
    obj.addEventListener('touchmove', function(event) {
          weiter(1,1);     
    });
    $('#mouth').on('click' ,function(){
          weiter(1,1);
    });
    var timer;
    function weiter(a,h){ 
     if(a==1){
           $('#mouth').removeClass('sound-bmp');
           $('#mouth').addClass('sound-none');
     }
     if(a==2){
           $('#mouth').removeClass('sound-none'); 
           $('#mouth').addClass('sound-fv');
     }
     if(a==3){
           $('#mouth').removeClass('sound-fv'); 
           $('#mouth').addClass('sound-aei');
     }
     if(a==4){
           $('#mouth').removeClass('sound-aei'); 
           $('#mouth').addClass('sound-o');
     }
     if(a==5){
           $('#mouth').removeClass('sound-o'); 
           $('#mouth').addClass('sound-none');
           a=0;
     }
     if(h<menge){
         timer=setTimeout(function(){
             a++;
             h++;
             weiter(a,h)
             sprich(h);
         },2400);
     }else{
           clearTimeout(timer);
     }
}

</script>
</body>
</html>
