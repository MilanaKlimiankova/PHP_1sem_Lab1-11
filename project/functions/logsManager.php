<?php

function LogsRegFailed(){
    $str = "[".date(DATE_RFC822)."] Registration failed\n";
    $fp = fopen("../log.txt","a+");
    fwrite($fp, $str);
    fclose($fp);
}
function LogsRegAccepted(){
    $str = "[".date(DATE_RFC822)."] User registered\n";
    $fp = fopen("../log.txt", "a+");
    fwrite($fp, $str);
    fclose($fp);
}
function LogsLoginFailed(){
    $str = "[".date(DATE_RFC822)."] Somebody is trying to log in\n";
    $fp = fopen("../log.txt", "a+");
    fwrite($fp, $str);
    fclose($fp);
}
function LogsLoginAccepted(){
    $str = "[".date(DATE_RFC822)."] User logged succesfull\n";
    $fp = fopen("../log.txt", "a+");
    fwrite($fp, $str);
    fclose($fp);
}