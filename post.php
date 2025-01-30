<?php
require_once('voicerss_tts.php');
$haber_iceri=$_POST["exampleInputText"];
$key=$_POST['exampleInputAPIKEY'];
$tts = new VoiceRSS;
$voice = $tts->speech([
    'key' => $key,
    'hl' => 'tr-tr',
    'v' => 'Linda',
    'src' => $haber_iceri,
    'r' => '0',
    'c' => 'mp3',
    'f' => '44khz_16bit_stereo',
    'ssml' => 'false',
    'b64' => 'true'
]);


echo '<audio src="' . $voice['response'] . '" autoplay="autoplay" controls></audio>';