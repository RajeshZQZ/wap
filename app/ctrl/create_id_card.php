<?php
/**
*Autor: Rajesh.z
*Date : 2018-08-05
*Time : 21:53
*/
include 'Calculator.class.php';
class main{
    public function create_id_card(){
    $vale = $_POST('id_card');
    $calculator = new Calculator();
    $calculator->do_test($vale);
    }
}
$main = new main();
$main ->create_id_card();