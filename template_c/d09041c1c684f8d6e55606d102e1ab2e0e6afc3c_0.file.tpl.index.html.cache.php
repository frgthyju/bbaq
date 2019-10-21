<?php
/* Smarty version 3.1.33, created on 2019-09-25 02:33:19
  from '/search/odin/fun/bbaq/template/tpl.index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8ad1ef732f11_27884635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09041c1c684f8d6e55606d102e1ab2e0e6afc3c' => 
    array (
      0 => '/search/odin/fun/bbaq/template/tpl.index.html',
      1 => 1569378795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/tpl.head.html' => 1,
    'file:index/tpl.scripts.html' => 1,
  ),
),false)) {
function content_5d8ad1ef732f11_27884635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16909312905d8ad1ef716504_69151110';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:index/tpl.head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="page-body lockscreen-page">
<div class="login-container">
    <div class="row">
        <div class="col-sm-7">
            <form role="form" id="lockscreen" class="lockcreen-form fade-in-effect">
                <div class="user-thumb">
                    <a href="#">
                        <img src="/assets/images/hyj.jpg" class="img-responsive img-circle" />
                    </a>
                </div>

                <div class="form-group">
                    <h3>欢迎登录用户管理系统</h3>
                    <p>请输入您的用户名和密码.</p>
                    <div class="input-group">
                        <input type="username" class="form-control input-dark" name="username" id="username" placeholder="Username" />
                        <span class="input-group-btn">
								<div style="display: none" class="btn btn-primary"class="btn btn-primary">Log In</div>
							</span>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control input-dark" name="passwd" id="passwd" placeholder="Password" />
                        <span class="input-group-btn">
								<div style="display: none" class="btn btn-primary"class="btn btn-primary">Log In</div>
							</span>
                    </div>
                    <div class="input-group">
							<span class="input-group-btn">
								<button type="submit" id="login"  class="btn btn-primary" >Log In</button>
							</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
   <?php $_smarty_tpl->_subTemplateRender("file:index/tpl.scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>

<?php }
}
