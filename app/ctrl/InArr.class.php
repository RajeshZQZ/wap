<?php

include_once "arr_config.php";
class InArr{
    function get_sheng_arr (){
        $shen_arr = SHENG_ARR;
        foreach ($shen_arr as $key => $vale){
            echo "<option value=\'sheng\'>".$vale.'</option>';
        }
    }
    function sheng_arr ($v){
        $v = $_REQUEST['sheng_p'];
        echo $v;
    }

    function shi_arr ($v){
        $v = $_REQUEST['sheng_p'];
        echo $v;
    }

    function xian_arr ($v){
        $v = $_REQUEST['sheng_p'];
        echo $v;
    }

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>省市区三级联动</title>
    <style>
select {
    width: 200px;
            padding: 5px;
        }
        .code-print{
    box-sizing: border-box;
            padding:10px;
            margin-top:20px;
            width:200px;
            border:1px solid blue;
        }
    </style>
</head>
<body>
<div>
    <div>
        <form action="Main.class.php" method="post">
        <select name="sheng_p">
            <option value="0" name="sheng">省份/直辖市</option>
           <?php $sheng = new InArr();
            $sheng ->get_sheng_arr();
           ?>
        </select>
        <select name="xian_p">
            <option value="0">市/县</option>
        </select>
        <select name="zhen_p">
            <option value="0">镇/区</option>
        </select>
        <input type="submit" value="点击">
       </form>
    </div>
    <div class="code-print">
        <p>【县级市没有区！】</p>
        <p>省编号：
            <?php
            $sheng ->sheng_arr($v);
            ?>
        </p>
        <p>市编号：
            <?php
            $sheng ->shi_arr($v);
            ?>
        </p>
        <p>区编号：
            <?php
            $sheng ->xian_arr();
            ?>
        </p>
        <p>最终编号:</p>
    </div>
</div>

</body>


</html>



