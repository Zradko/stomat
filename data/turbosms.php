<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 17.11.2020
 * Time: 9:06
 */

namespace ifpr\TF;


class turbosms
{

private  function generatepass(){
    $length=6;
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
public function sendsms($phone){
    $url = "https://api.turbosms.ua/message/send.json";
    $secret="14f7d6b5b35679d46b702617481e7c84e7dde0a7";
    $smssender="Falkon";
    $vibersender="Mobibon";
    $code=$this->generatepass();
    $sendstring=$code." код для входу в кабінет. НеоКлінік";
    $requestdata=array();
    $requestdata['recipients']=array();
    $requestdata['recipients'][]=$phone;
    $requestdata['viber']['sender']=$vibersender;
    $requestdata['viber']['text']=$sendstring;
    $requestdata['viber']['ttl']=60;
    $requestdata['sms']['sender']=$smssender;
    $requestdata['sms']['text']=$sendstring;


echo json_encode($requestdata);
    if( $curl = curl_init() ) {
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>json_encode($requestdata),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic ". $secret,
                "Content-Type: application/json"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $_SESSION['codein']=$code;


    }
if (isset($response) and $response!='' and !empty($response) ){
    return $response;
} else {
    $response="Error";
    return $response;
}

}
}