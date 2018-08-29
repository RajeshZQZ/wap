<?php

class ctrl_moke_sjjy {
  public static $info = array();
    function test01 (){
        $infoArr = array();
        if (empty($_REQUEST['name']) && empty($_REQUEST['age']) && empty($_REQUEST['sex'])){
        //参数都为空
        }else {
            $infoArr = array(
                'name' => $_REQUEST['name'],
                'age' => $_REQUEST['age'],
                'sex' => $_REQUEST['sex'],
            );
        }
        self::$info = $infoArr;
        $this->dotest($infoArr);
    }

    function dotest($info){
        if (empty($info)){
           // echo "moke sjjy don`t get any infomation~!";
            header("Location: http://m.1768.com");
        }elseif (!empty($info['sex']) && !empty($info['name']) && !empty($info['age'])){
            if ($info['sex'] == 1){
                echo "THIS MAN`S NAME IS {$info['name']} ,AND HE IS {$info['age']} YEARS OLD~!";
            }else{
                echo "THIS WOMAN`S NAME IS {$info['name']} ,AND SHE IS {$info['age']} YEARS OLD~!";
            }
        }else{
            echo "DON`T HAVE COMLETE INFOMATION~!";
        }
    }
}