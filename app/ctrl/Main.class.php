<?php
/**
*Autor: Rajesh.z
*Date : 2018-08-05
*Time : 21:53
*/
include 'Calculator.class.php';
class Main{
    public function create_id_card(){
    $vale = $_REQUEST['id_card'];
        if (empty($vale)){
            var_dump($vale);
            exit;
        }
    $calculator = new Calculator();
    $calculator->do_test($vale);
    }
}
$main = new Main();
$main ->create_id_card();