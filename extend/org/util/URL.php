<?php
/**
 * Created by PhpStorm.
 * User: Edik
 * Date: 2016/11/8
 * Time: 13:42
 */

namespace org\util;


class URL
{
    public static function curlPost($url,$postFields){

        $postFields = http_build_query($postFields);
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $postFields );
        $result = curl_exec ( $ch );
        curl_close ( $ch );
        return $result;
    }

    public static function curlGet($url){

        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_multi_getcontent($curl);
        //执行命令
        $result = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);

        return $result;
    }

    public static function curlGetToString($url){

        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        //curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        //curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        //执行命令
        //$result = curl_multi_getcontent($curl);
        $result = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);

        return $result;
    }
}