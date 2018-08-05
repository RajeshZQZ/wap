<?php

/**
* 
*/
class IdCrd 
{
	public $coef = array(
	7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2,
	);
	public $arr_x = array(1,0,"X",9,8,7,6,5,4,3,2,);

	public function do_test($num){
	$i = new IdCrd;
	$res = $i ->id_card($num);
	if (empty($res)){
		//echo "输入值为空，请输入身份证前17位！";
	$url = "./input.html";
	header('Location:'.$url);    
	exit;
	}else{
	echo "身份证号码为：$res";
	}
	}

	public function id_card($id){
	//$id_card = $_GET['id_card'];
	if (empty($id)){
	//echo "输入值为空，请输入身份证前17位！";
	return FALSE;
	}
	$id_arr = str_split($id,1);
	$coef = $this -> coef;
	$id_end = 0;
	foreach($id_arr as $k => $v){
	$temp = $v * $coef[$k];
	$id_end = $id_end +$temp;
	}
	$id_x = $id_end % 11 ;
	$arr_x = $this -> arr_x;
	$id_y = $arr_x[$id_x];
	$id_card_end = $id.$id_y;
	return $id_card_end;
   }
}

?>
