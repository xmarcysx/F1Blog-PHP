<?php
/* Smarty version 4.1.0, created on 2022-04-18 12:58:33
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625d44592f36f8_24960131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3100a083a92f5b514c5156e38a9f96f797aa9b46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\register.html',
      1 => 1650279495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d44592f36f8_24960131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836029539625d44592ee3b7_80257887', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_1836029539625d44592ee3b7_80257887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1836029539625d44592ee3b7_80257887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="login-container">
  <div class="login-main">
    <div class="login-form">
      <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
        <p class="register-text" style="font-size: 2rem; font-weight: 800">
          Rejestracja
        </p>
        <div class="input-group">
          <input type="email" placeholder="Email" name="email" />
        </div>

        <div class="input-group">
          <input type="text" placeholder="Nazwa użytkownika" name="username" />
        </div>

        <div class="input-group">
          <input type="password" placeholder="Hasło" name="password" />
        </div>

        <div class="input-group">
          <input
            type="password"
            placeholder="Powtórz hasło"
            name="password_repeat"
          />
        </div>

        <div class="log-btn">
          <button type="submit">
            <span class="text">Zarejestruj</span>
          </button>
        </div>
        <p class="login-register-text">
          Masz konto?
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Zaloguj się</a>.
        </p>
      </form>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
