<?php
require( 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
$smarty = new Smarty();
//$smarty->template_dir           = THEME_TEMPLATE_DIR; 
//$smarty->cache_dir              = SMARTY_CACHE_DIR; 
//$smarty->compile_dir            = SMARTY_COMPILE_DIR; 
//$smarty->force_compile          = $QConfig->smarty_force_compile; 

// chaining of method calls
$smarty->setTemplateDir('./templates')
       ->setCompileDir('./templates_c')
       ->setCacheDir('./cache');

?>
