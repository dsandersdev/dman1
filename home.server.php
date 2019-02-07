<?php
require_once 'utils/setup.inc';
function test_content() {
	$smarty = new Smarty();
	$smarty->assign('name', 'Duane');
	$html = $smarty->fetch('home.tpl');
	return $html;
}	

?>
