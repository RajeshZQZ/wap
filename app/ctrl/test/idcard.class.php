<?php

/**
 * Created by PhpStorm.
 * User: zengqingzhang
 * Date: 2018/8/30
 * Time: 15:36
 */
class ctrl_test_idcard{
    public  static $coef = array(
        7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2,
    );
    public static $arr_x = array(1,0,"X",9,8,7,6,5,4,3,2,);

    public function do_test(){
        $num = $_REQUEST['num'];
        if (empty($num)){
        echo "<h1 align='center'> PLEASE INPUT YOU ID CARD NUMBER~!</h1>";
        }elseif(!empty($num) && is_numeric($num)){
            $res = self::id_card($num);
            if (empty($res)){
                $url = URL."app/template/re_input.html";
                header('Location:'.$url);
            }else{
                echo "<h1 align='center'>身份证号码为：$res</h1>";
            }
        }else{
            echo "<h1 align='center'> YOU INPUT NUM IS NOT AN NUMBER~!</h1>";
            echo "<h2 align='center'> PLEASE INPUT YOU ID CARD NUMBER~!</h2>";
        }

    }

    public function random_id(){
        $address_id = rand(110000,820000);
        $day_id = date("Ymd",rand(14400,time()));
        $end_id = rand(100,999);
        $check_id = $address_id.$day_id.$end_id;
        $id_card = self::id_card($check_id);
        if (empty($id_card)){
            $url = URL."app/template/re_input.html";
            header('Location:'.$url);
        }else{
            echo "<h1>随机身份证号码为：$id_card</h1>";
            echo "<h1>重新生成：
            <a href='http://47.98.188.59/game01/wap/?act=test_idcard&st=random_id'>
            <button>点击重新生成</button>
            </a></h1>";
        }
    }




    public function id_card($id){
        if (empty($id)){
            return FALSE;
        }
        $id_arr = str_split($id,1);
        $coe = self::$coef;
        $id_end = 0;
        foreach($id_arr as $k => $v){
            $temp = $v * $coe[$k];
            $id_end = $id_end +$temp;
        }
        $id_x = $id_end % 11 ;
        $arr_x = self::$arr_x;
        $id_y = $arr_x[$id_x];
        $id_card_end = $id.$id_y;
        return $id_card_end;
    }
}
