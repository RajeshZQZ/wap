<?php
class DoTest extends IdCrd{

function print_card_id (){
	$num = $_POST['id_card'] ?: "123" ;
	parent ::do_test($num);
}

}

$D = new DoTest;
$D -> print_card_id();

?>
