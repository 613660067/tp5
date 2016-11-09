<?php
namespace app\index\controller;

use org\util\URL;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $data = Db::name('data')->find();
        $this->assign('result', $data);
        return $this->fetch();
    }

    public function hello(){
        //$result = URL::curlGet("http://www.69shu.com/txt/11859.htm");
        //$html = new \simple_html_dom();

        //$html->load($result);

        //$title = substr($html, 0, 100);
        //echo $title;

        //echo $result;

        //$result = URL::curlGetToString("https://www.badiu.com");

        //$s = substr($result, 0, 100);


        //echo '111';
        //echo $result;
        //echo $s;

        //return $this->fetch();

        $curlobj = curl_init();			// 初始化
        curl_setopt($curlobj, CURLOPT_URL, "http://www.69shu.com/txt/11859.htm");		// 设置访问网页的URL
        curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);			// 执行之后不直接打印出来
        curl_setopt($curlobj, CURLOPT_HEADER,0);
        $output=curl_exec($curlobj);	// 执行
        curl_close($curlobj);			// 关闭cURL
        //echo str_replace("百度","屌丝",$output);

        $html= new \simple_html_dom();

        $html->load($output);

        //$main = $html->find('.status',0);

        //echo $main;

        $head = $html->find('meat',15);

        echo $head;

//        $s = substr($head, 0, 100);
//
//        //<meta property="og:novel:book_name" content="凤临天下：一后千宠">
//        preg_match('/og:novel:book_name" content="(.*.)">/', $head, $heads);
//
//        //echo $s;
//        dump($heads);

    }
}
