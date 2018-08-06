<?php
class InArr{
    function get_sheng_arr (){
        $shen_arr = array(
            "湖南","湖北","广西","广东",
        );
        foreach ($shen_arr as $vale){
            echo "<option value=\'sheng\'>".$vale.'</option>';
        }
    }
}


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
        <select>
            <option value="0" >省份/直辖市</option>
           <?php $sheng = new InArr();
            $sheng ->get_sheng_arr();
           ?>

        </select>
        <select>
            <option value="0">市/县</option>
            <option value="shi">$shi</option>
        </select>
        <select>
            <option value="0">镇/区</option>
            <option value="xian">$xian</option>
        </select>
    </div>
    <div class="code-print">
        <p>【县级市没有区！】</p>
        <p>省编号：<span ></span></p>
        <p>市编号：<span ></span></p>
        <p>区编号：<span ></span></p>
        <p>最终编号:<span ></span></p>
    </div>
</div>

</body>


</html>



