<?php

$api = (string) "";
$token = (string) "";

function bot($method, $data=[]){
    global $token;
    return file_get_contents("https://api.telegram.org/bot{$token}/$method?".http_build_query($data));
}

$update = file_get_contents("php://input");
$update = json_decode($update);
$message = $update->message;
$chat_id = $message->chat->id;

if($message->text == "/start"){
    $url = "https://pixabay.com/api/?key=".$api."&q=".encodeURIComponent($message->text)."&lang=ko&safesearch=true";
}

if($_GET){
    $photo = $_GET['photo'];
    $url = "https://pixabay.com/api/?key=".$api."&q=".encodeURIComponent($photo)."&lang=ko&safesearch=true";
    echo "</pre>";
    print_r($url);
}