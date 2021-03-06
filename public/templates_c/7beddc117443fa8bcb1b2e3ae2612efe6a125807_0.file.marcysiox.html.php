<?php
/* Smarty version 4.1.0, created on 2022-05-10 21:06:50
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\marcysiox.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627ab7cacb89a2_98880848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7beddc117443fa8bcb1b2e3ae2612efe6a125807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\marcysiox.html',
      1 => 1652209609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627ab7cacb89a2_98880848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467467247627ab7cac9d5a9_75662460', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_1467467247627ab7cac9d5a9_75662460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1467467247627ab7cac9d5a9_75662460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="navigation">
  <nav class="nav-items">
    <div class="logoF1">
      <h1>F1Blog<span>🏎️</span></h1>
    </div>
    <ul class="nav-menu">
      <li class="nav-link">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
blog"
          ><?php if ($_smarty_tpl->tpl_vars['user']->value->username == "admin") {?>Dodaj Wpis<?php } else { ?>Blog<?php }?></a
        >
      </li>
      <li class="nav-link">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
artykuly">Artykuły</a>
      </li>
      <li class="nav-link">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ustawienia">Ustawienia</a>
      </li>
      <li class="nav-link"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
    </ul>
  </nav>
</div>

<div class="blog-container">
  <div class="blog-main">
    <div class="marcysiox">
      <div class="profile">
        <div class="profile-logo">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/logo.png" />
        </div>
        <div class="profile-username">
          <h3>Marcysiox</h3>
        </div>
      </div>

      <h4>Administrator</h4>
      <p>
        Student Uniwersytetu Ślaskiego na kierunku informatyka. Projektant i
        programista aplikacji webowych. Frontend Developer. W wolnym czasie
        pasjonat Formuły 1. Prywatnie kibic Maxa Verstappena oraz zespołu
        RedBull.
      </p>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'tekstBloga');
$_smarty_tpl->tpl_vars['tekstBloga']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tekstBloga']->value) {
$_smarty_tpl->tpl_vars['tekstBloga']->do_else = false;
?>
    <div class="blog-content">
      <div class="info">
        <div class="avatar">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/logo.png" />
        </div>
        <div class="blog-username">
          <h3><a href="">Marcysiox</a></h3>
        </div>
      </div>

      <div class="blog-text"><?php echo $_smarty_tpl->tpl_vars['tekstBloga']->value["tekst"];?>
</div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php if ($_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
    <a
      type="button"
      class="pervious"
      href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
marcysiox/<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
"
      >‹</a
    >
    <?php }?> <?php if ($_smarty_tpl->tpl_vars['isNextPage']->value) {?>
    <a
      type="button"
      class="next"
      href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
marcysiox/<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
"
      >›</a
    >
    <?php }?>
  </div>
</div>
<?php echo '<script'; ?>
>
  $(document).ready(function () {
    $("#usersValues").DataTable();
  });
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
