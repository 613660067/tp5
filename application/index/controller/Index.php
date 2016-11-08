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

        $result = URL::curlGetToString("http://www.69shu.com/txt/11859.htm");

        $s = substr($result, 0, 100);

        echo '111';
        echo $s;

        //return $this->fetch();
    }
}
