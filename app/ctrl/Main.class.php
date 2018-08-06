<?php
/**
*Autor: Rajesh.z
*Date : 2018-08-05
*Time : 21:53
*/
include 'Calculator.class.php';
class Main
{
    public function create_id_card($vale)
    {
        $vale = $_REQUEST['id_card'];
        if (empty($vale)) {
            var_dump($vale);
            echo "<br>";
            echo "输入值为空，请输入身份证前17位！";
            exit;
        }
        $calculator = new Calculator();
        $calculator->do_test($vale);
    }

    public function test($v){
        $v = $_REQUEST['sheng_p'];
        echo $v;
    }
}

$main = new Main();
$main ->create_id_card($vale);
$main->test($v);