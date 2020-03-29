<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-29 22:34:09
  from '/Applications/MAMP/htdocs/Spalanie/app/CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e81226136b069_50616887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350b990d417dbd66c299f9a13b770eb6b579dc5a' => 
    array (
      0 => '/Applications/MAMP/htdocs/Spalanie/app/CalcView.html',
      1 => 1585520509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e81226136b069_50616887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2694203025e812261353919_58531814', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_2694203025e812261353919_58531814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2694203025e812261353919_58531814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Forms -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row gtr-200">
                <section class="col-6 col-12-narrower">
                    <h3>Kalkulator kosztu przejechania trasy</h3>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
                        <div class="row gtr-50">
                            <div class="col-12">
                                <input type="text" name="x" id="x" placeholder="Długość planowanej trasy w kilometrach" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/>
                            </div>
                            <div class="col-12">
                                <input type="text" name="y" id="y" placeholder="Średnie spalanie w litrach na 100 km" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"/>
                            </div>
                            <div class="col-12">
                                <input type="text" name="z" id="z" placeholder="Cena litra paliwa"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
"/>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" class="button alt" value="Licz!" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <div class="col-6 col-12-narrower">
                                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                            <h4>Wystąpiły błędy: </h4>
                            <div style=" padding: 10px; border-radius: 5px; background-color: #ff4468; width:100%;">
                            <ol style ="margin: 0">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                            </div>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                            <h4>Informacje: </h4>
                            <div style=" padding: 10px; border-radius: 5px; background-color: #1bff12; width:100%;">
                            <ol style ="margin: 0">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                            </div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
                        <h4>Wynik</h4>
                        <p style="padding: 10px;  border-radius: 5px; background-color: #fff930; width:100%;">
                            <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                        </p>
                    <?php }?>

                </div>
            </div>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
}
