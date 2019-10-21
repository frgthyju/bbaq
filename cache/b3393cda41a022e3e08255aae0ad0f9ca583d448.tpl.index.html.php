<?php
/* Smarty version 3.1.33, created on 2019-09-25 05:46:38
  from '/search/odin/fun/bbaq/template/tpl.index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8aff3e21c722_09562124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09041c1c684f8d6e55606d102e1ab2e0e6afc3c' => 
    array (
      0 => '/search/odin/fun/bbaq/template/tpl.index.html',
      1 => 1569378795,
      2 => 'file',
    ),
    '73d95872b021f00fbadb0ffc45e2e441bccaf18e' => 
    array (
      0 => '/search/odin/fun/bbaq/template/index/tpl.head.html',
      1 => 1569379377,
      2 => 'file',
    ),
    '4d8832ba0517557eab41b449f20cb6b50fe36c1c' => 
    array (
      0 => '/search/odin/fun/bbaq/template/index/tpl.scripts.html',
      1 => 1569389779,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 86400,
),true)) {
function content_5d8aff3e21c722_09562124 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <strip>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>用户管理系统</title>

    <link rel="stylesheet" href="/assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <script src="/assets/js/jquery-1.11.1.min.js"></script>
    <script src="/assets/path.js"></script>
    <script src="/assets/cookie.js"></script>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
</strip></head>
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
   <strip>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/TweenMax.min.js"></script>
    <script src="/assets/js/resizeable.js"></script>
    <script src="/assets/js/joinable.js"></script>
    <script src="/assets/js/xenon-api.js"></script>
    <script src="/assets/js/xenon-toggles.js"></script>
    <script src="/assets/js/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/js/toastr/toastr.min.js"></script>

    <script src="/assets/js/xenon-custom.js"></script>
    <script src="/assets/login.js"></script>
<!--    <script type="text/javascript">-->
<!--        window.info_jump = <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: info_jump in /search/odin/fun/bbaq/template_c/4d8832ba0517557eab41b449f20cb6b50fe36c1c_0.file.tpl.scripts.html.cache.php on line <i>60</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0008</td><td bgcolor='#eeeeec' align='right'>398656</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/search/odin/fun/bbaq/Page/index.php' bgcolor='#eeeeec'>.../index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>445112</td><td bgcolor='#eeeeec'>Smarty->display( <span><font color='#cc0000'>string(14)</font></span>, ???, ???, ??? )</td><td title='/search/odin/fun/bbaq/Page/index.php' bgcolor='#eeeeec'>.../index.php<b>:</b>10</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>445112</td><td bgcolor='#eeeeec'>Smarty->_execute( <span><font color='#cc0000'>string(14)</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#4e9a06'>long</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>.../smarty_internal_templatebase.php<b>:</b>134</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0023</td><td bgcolor='#eeeeec' align='right'>464392</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render( <span><font color='#75507b'>false</font></span>, <span><font color='#4e9a06'>long</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>.../smarty_internal_templatebase.php<b>:</b>232</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0026</td><td bgcolor='#eeeeec' align='right'>473336</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span>, <span><font color='#75507b'>false</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_template.php' bgcolor='#eeeeec'>.../smarty_internal_template.php<b>:</b>211</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0029</td><td bgcolor='#eeeeec' align='right'>474048</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache( <span><font color='#8f5902'>object(Smarty_Template_Cached)[8]</font></span>, <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span>, <span><font color='#75507b'>false</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_cached.php' bgcolor='#eeeeec'>.../smarty_template_cached.php<b>:</b>143</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0030</td><td bgcolor='#eeeeec' align='right'>558048</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>.../smarty_internal_runtime_updatecache.php<b>:</b>38</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0030</td><td bgcolor='#eeeeec' align='right'>558776</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->getRenderedTemplateCode( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span>, ??? )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_compiled.php' bgcolor='#eeeeec'>.../smarty_template_compiled.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0031</td><td bgcolor='#eeeeec' align='right'>558776</td><td bgcolor='#eeeeec'>content_5d8ad1ef732f11_27884635( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_resource_base.php' bgcolor='#eeeeec'>.../smarty_template_resource_base.php<b>:</b>123</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0033</td><td bgcolor='#eeeeec' align='right'>559216</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->_subTemplateRender( <span><font color='#cc0000'>string(27)</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#4e9a06'>long</font></span>, <span><font color='#4e9a06'>long</font></span>, <span><font color='#ce5c00'>array(0)</font></span>, <span><font color='#4e9a06'>long</font></span>, <span><font color='#75507b'>false</font></span>, ???, ??? )</td><td title='/search/odin/fun/bbaq/template_c/d09041c1c684f8d6e55606d102e1ab2e0e6afc3c_0.file.tpl.index.html.cache.php' bgcolor='#eeeeec'>.../d09041c1c684f8d6e55606d102e1ab2e0e6afc3c_0.file.tpl.index.html.cache.php<b>:</b>70</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.0034</td><td bgcolor='#eeeeec' align='right'>562096</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render( <span><font color='#8f5902'>object(Smarty_Internal_Template)[12]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_template.php' bgcolor='#eeeeec'>.../smarty_internal_template.php<b>:</b>383</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.0073</td><td bgcolor='#eeeeec' align='right'>698304</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->getRenderedTemplateCode( <span><font color='#8f5902'>object(Smarty_Internal_Template)[12]</font></span>, ??? )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_compiled.php' bgcolor='#eeeeec'>.../smarty_template_compiled.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.0073</td><td bgcolor='#eeeeec' align='right'>698304</td><td bgcolor='#eeeeec'>content_5d8aff3e2071a7_45531545( <span><font color='#8f5902'>object(Smarty_Internal_Template)[12]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_resource_base.php' bgcolor='#eeeeec'>.../smarty_template_resource_base.php<b>:</b>123</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property 'value' of non-object in /search/odin/fun/bbaq/template_c/4d8832ba0517557eab41b449f20cb6b50fe36c1c_0.file.tpl.scripts.html.cache.php on line <i>60</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0008</td><td bgcolor='#eeeeec' align='right'>398656</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/search/odin/fun/bbaq/Page/index.php' bgcolor='#eeeeec'>.../index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>445112</td><td bgcolor='#eeeeec'>Smarty->display( <span><font color='#cc0000'>string(14)</font></span>, ???, ???, ??? )</td><td title='/search/odin/fun/bbaq/Page/index.php' bgcolor='#eeeeec'>.../index.php<b>:</b>10</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>445112</td><td bgcolor='#eeeeec'>Smarty->_execute( <span><font color='#cc0000'>string(14)</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#4e9a06'>long</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>.../smarty_internal_templatebase.php<b>:</b>134</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0023</td><td bgcolor='#eeeeec' align='right'>464392</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render( <span><font color='#75507b'>false</font></span>, <span><font color='#4e9a06'>long</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_templatebase.php' bgcolor='#eeeeec'>.../smarty_internal_templatebase.php<b>:</b>232</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0026</td><td bgcolor='#eeeeec' align='right'>473336</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span>, <span><font color='#75507b'>false</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_template.php' bgcolor='#eeeeec'>.../smarty_internal_template.php<b>:</b>211</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0029</td><td bgcolor='#eeeeec' align='right'>474048</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache( <span><font color='#8f5902'>object(Smarty_Template_Cached)[8]</font></span>, <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span>, <span><font color='#75507b'>false</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_cached.php' bgcolor='#eeeeec'>.../smarty_template_cached.php<b>:</b>143</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0030</td><td bgcolor='#eeeeec' align='right'>558048</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>.../smarty_internal_runtime_updatecache.php<b>:</b>38</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0030</td><td bgcolor='#eeeeec' align='right'>558776</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->getRenderedTemplateCode( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span>, ??? )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_compiled.php' bgcolor='#eeeeec'>.../smarty_template_compiled.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0031</td><td bgcolor='#eeeeec' align='right'>558776</td><td bgcolor='#eeeeec'>content_5d8ad1ef732f11_27884635( <span><font color='#8f5902'>object(Smarty_Internal_Template)[4]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_resource_base.php' bgcolor='#eeeeec'>.../smarty_template_resource_base.php<b>:</b>123</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0033</td><td bgcolor='#eeeeec' align='right'>559216</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->_subTemplateRender( <span><font color='#cc0000'>string(27)</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#3465a4'>null</font></span>, <span><font color='#4e9a06'>long</font></span>, <span><font color='#4e9a06'>long</font></span>, <span><font color='#ce5c00'>array(0)</font></span>, <span><font color='#4e9a06'>long</font></span>, <span><font color='#75507b'>false</font></span>, ???, ??? )</td><td title='/search/odin/fun/bbaq/template_c/d09041c1c684f8d6e55606d102e1ab2e0e6afc3c_0.file.tpl.index.html.cache.php' bgcolor='#eeeeec'>.../d09041c1c684f8d6e55606d102e1ab2e0e6afc3c_0.file.tpl.index.html.cache.php<b>:</b>70</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.0034</td><td bgcolor='#eeeeec' align='right'>562096</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render( <span><font color='#8f5902'>object(Smarty_Internal_Template)[12]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_internal_template.php' bgcolor='#eeeeec'>.../smarty_internal_template.php<b>:</b>383</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.0073</td><td bgcolor='#eeeeec' align='right'>698304</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->getRenderedTemplateCode( <span><font color='#8f5902'>object(Smarty_Internal_Template)[12]</font></span>, ??? )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_compiled.php' bgcolor='#eeeeec'>.../smarty_template_compiled.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.0073</td><td bgcolor='#eeeeec' align='right'>698304</td><td bgcolor='#eeeeec'>content_5d8aff3e2071a7_45531545( <span><font color='#8f5902'>object(Smarty_Internal_Template)[12]</font></span> )</td><td title='/search/odin/fun/bbaq/smarty/libs/sysplugins/smarty_template_resource_base.php' bgcolor='#eeeeec'>.../smarty_template_resource_base.php<b>:</b>123</td></tr>
</table></font>
-->
<!--        console.log(hahah);-->
<!--        console.log(info_jump);-->
<!--    </script>-->

</strip></body>
</html>

<?php }
}
