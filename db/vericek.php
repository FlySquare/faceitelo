<?php
$user = $_GET['username'];

$url = "https://faceitelo.net/player/$user";

 $site = file_get_contents("$url");

preg_match_all('@<td><strong>(.*?)</strong>@si', $site, $name);
preg_match_all('@<td style="width:3%">(.*?)</td>@si', $site, $name2);
preg_match_all('@level: <strong>(.*?)</strong>@si', $site, $name3);
preg_match_all('@<meta property="og:image" content="(.*?)" />@si', $site, $name4);
preg_match_all('@<td>(.*?)</td>@si', $site, $name5);
preg_match_all('@<p><span>(.*?)</span></p>@si', $site, $name6);
preg_match_all('@value="(.*?)"@si', $site, $name7);
preg_match_all('@<script>(.*?)</script>@si', $site, $name8);
preg_match_all('@<div class="table-responsive">(.*?)</div>@si', $site, $name9);
preg_match_all('@<section class="section bg-header">(.*?)</section>@si', $site, $name10);
preg_match_all('@<div class="section grey">(.*?)</div>@si', $site, $name11);
$namecikti4 = implode(" ", $name4[1]);
$namedizi4 = explode (" ",$namecikti4);
$namecikti = implode("p", $name[1]);
$namedizi = explode ("p",$namecikti);
$namecikti2 = implode("p", $name2[1]);
$namedizi2 = explode ("p",$namecikti2);
$namecikti3 = implode("p", $name3[1]);
$namedizi3 = explode ("p",$namecikti3);

$namecikti5 = implode("bon", $name5[1]);
$namedizi5 = explode ("bon",$namecikti5);

$namecikti6 = implode("bon", $name6[1]);
$namedizi6 = explode ("bon",$namecikti6);

$namecikti7 = implode("bon", $name7[1]);
$namedizi7 = explode ("bon",$namecikti7);


$namecikti8 = implode("bon", $name8[1]);
$namedizi8 = explode ("bon",$namecikti8);

$namecikti9 = implode("bon", $name9[1]);
$namedizi9 = explode ("bon",$namecikti9);

$namecikti10 = implode("bon", $name10[1]);
$namedizi10 = explode ("bon",$namecikti10);

$namecikti11 = implode("bon", $name11[1]);
$namedizi11 = explode ("bon",$namecikti11);

$link= $namedizi2[1];
$dizi = explode ("/",$link);
$dizi2 = explode ('"',$dizi[5]);


$array["user"] = array(
  array(
    "elo" => $namedizi[0],
    "match" => $namedizi[1],
    "kd" => $namedizi[2],
    "kazanmaoran" => $namedizi[3],
    "hsyuzde" => $namedizi[4],
    "winstreak" => $namedizi[5],
    "level" => $namedizi3[0],
    "userphoto" =>$namedizi4[0]

 )

);
//echo $json = json_encode($array);
//print_r($namedizi11);</strong>
$metin = $namedizi11[0];
$dizi = explode ('<strong class="red">',$metin);
$metin2 = $dizi[1];
$dizi2 = explode ('</strong>',$metin);
//echo $dizi[0].$dizi2[6];


?>
