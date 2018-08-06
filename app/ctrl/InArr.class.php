<?php
class InArr{
    function get_sheng_arr (){
        $shen_arr = array(
            "湖南","湖北","广西","广东",
        );
        foreach ($shen_arr as $vale){
            echo "$vale";
            echo "<option value='sheng'>".$vale.'</option>';
        }

    }

}

$sheng = new InArr();
$sheng ->get_sheng_arr();

