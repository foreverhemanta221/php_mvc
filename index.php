<?php 
//first step
// echo $_GET["p"];

//second 
if(!$_GET){
    require_once "View/index.php";
}else{
    $url = explode('/',$_GET['p']);
    // foreach($url as $key=>$value){
    //     echo "$value<br/>";
    // }
    $urlCount = count($url);
    if($urlCount==0){
            require_once "View/index.php";
    }
    if($urlCount==1){
        if($url[0]=='home'){

        }
    }
}



?>