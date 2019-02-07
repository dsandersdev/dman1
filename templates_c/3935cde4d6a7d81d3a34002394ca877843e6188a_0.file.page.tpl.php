<?php
/* Smarty version 3.1.33, created on 2019-02-07 03:29:01
  from '/var/www/html/dman1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5ba5fd5dcf97_39471129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3935cde4d6a7d81d3a34002394ca877843e6188a' => 
    array (
      0 => '/var/www/html/dman1/templates/page.tpl',
      1 => 1549510135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5ba5fd5dcf97_39471129 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
</head>

	<body>
		<div id="header_div">
			<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

		</div>
		<div id="content_div">
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</div>
		<div id="footer_div">
			<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

		</div>
	</body>
</html>
<?php }
}
