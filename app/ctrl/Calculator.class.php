<?php
/**
 *Autor: Rajesh.z
 *Date : 2018-08-05
 *Time : 21:53
 */

include '../inc_config.php';

class Calculator
{

    //判断是否输入正确；

    public function do_test($num){
        if (empty($num)) {
            echo "输入值为空，请输入身份证前17位！";
            //  $url = "./input.html";
            //    header('Location:'.$url);
            exit;
        }elseif (strlen($num)!=17){
            echo "格式错误，请输入17位数字~！";
        }
        else{
            $i = new Calculator;
            $res = $i ->calculator_id_card($num);
            echo "身份证号码为：$res";
        }
    }

    public function calculator_id_card($id){
        if (empty($id)){
            return FALSE;
        }
        $id_arr = str_split($id,1);
        $id_end = 0;
        $coef = COEFFICIENT;
        foreach($id_arr as $k => $v){
            $temp = $v * $coef[$k];
            $id_end = $id_end +$temp;
        }
        $id_x = $id_end % 11 ;
        $arr_x = REPLACE_ARR;
        $id_y = $arr_x[$id_x];
        $id_card_final = $id.$id_y;
        return $id_card_final;
    }
}


?>