<?php
require_once( 'utils/setup.inc'); 
require_once('home.server.php');
$html = test_content();
$smarty->assign('content', $html);
$smarty->assign('page_title', 'Welcome Home');
$smarty->assign('title', 'Welcome to my website');
$smarty->display('page.tpl');

?>
