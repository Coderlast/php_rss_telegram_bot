<?php

$api = (string) "17169214-1237dd691a71f28369529dabd";
$token = (string) "601089650:AAHTNKp2gbbZWDeDsd5lRMEwWeHYJ5mIIqk";

function bot($method, $data=[]){
    global $token;
    return file_get_contents("https://api.telegram.org/bot{$token}/$method?".http_build_query($data));
}

$update = file_get_contents("php://input");
$update = json_decode($update);
$message = $update->message;
$chat_id = $message->chat->id;

if($message->text == "/start"){
    $url = file_get_contents("https://pixabay.com/api/?key=".$api."&q=".$photo."&lang=ko&safesearch=true");

}

if($_GET){
    $photo = $_GET['photo'];
    $url = file_get_contents("https://pixabay.com/api/?key=".$api."&q=".$photo."&lang=ko&safesearch=true");
    echo "<pre>";
    print_r($url);
}else{
    echo "bot yoq";
}