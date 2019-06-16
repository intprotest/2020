<?php

// create array from dir
function getList($dir, $arr = []){
    $d = dir($dir);
    while (false !== ($entry = $d->read())) {
        if($entry === "." || $entry === ".."){
            continue;
        }
        if(is_dir($dir."/".$entry)){
           $arr =  getList($dir."/".$entry,$arr);
        }else{
            $arr[] = [$dir,explode(".",$entry)[0]];
        }
    }
    $d->close();

    return $arr;
}

//get Mum
function getMun($list,$city){
    for($i = 0; $i < count($list);$i++){
        if($list[$i][1] === $city){
            return $list[$i][0];
        }
    }
    return null;
}


$list = getList("engine");

$target = isset($_GET["target"])? "MUN".$_GET["target"] : "MUN-Tbilisi";

$mun = getMun($list,$target);

if(!$mun){
   $link = "engine/MUN-Tbilisi.php";
}else{
    $link = $mun."/".$target.".php";
}


echo file_get_contents($link);




