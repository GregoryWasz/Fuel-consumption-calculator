<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-29 22:36:34
  from '/Applications/MAMP/htdocs/Spalanie/templates/main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8122f2dcb0f3_67782397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1642ad94cc76aa1a37564e683e6eb885a22fd850' => 
    array (
      0 => '/Applications/MAMP/htdocs/Spalanie/templates/main.html',
      1 => 1585521392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8122f2dcb0f3_67782397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Kalkulatory samochodowe</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.html" id="logo">Super <em>Kalkulator Samochodowy</em></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Kalkulator Spalania</a></li>
                <li>Kalkulator 1</li>
                <li>Kalkulator 2</li>
                <li>Kalkulator 3</li>
            </ul>
        </nav>

    </div>

    <!-- Banner -->
    <section id="banner">
        <header>
            <h2><em>Dowiedz się więcej o samochodach</em></h2>
            <a href="#" class="button">Więcej!</a>
        </header>
    </section>
    <!-- Blok z moim kalkulatorem-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18712238025e8122f2dc4696_86338448', 'content');
?>

        <!-- Footer -->
    <div id="footer">

        <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                <li>Calculators by Grzegorz Waszkowski</li>
            </ul>
        </div>

    </div>

</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_18712238025e8122f2dc4696_86338448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18712238025e8122f2dc4696_86338448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 domyślny<?php
}
}
/* {/block 'content'} */
}
