<?php
/* Smarty version 3.1.33, created on 2021-04-08 02:36:21
  from 'D:\phpstudy_pro\WWW\0xnull\public\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_606e5005e98922_75277400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33b6dc3ab482922ff372fd79ea0fd844b83fe23' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\0xnull\\public\\upload.html',
      1 => 1617807364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606e5005e98922_75277400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title><?php echo $_smarty_tpl->tpl_vars['expTitle']->value;?>
-开普勒安全团队</title>
    </head>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['index_css']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['prism_css']->value;?>
">
    <body>
        <div id="head">
            <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_img']->value;?>
"/></a>
            <span class="title"><?php echo $_smarty_tpl->tpl_vars['expTitle']->value;?>
</span>
        </div>
        <div id="main">
    <div id="upload_panel">
        <div class="float_btn">
			<a href="javascript:get_prompt()">查看代码</a>
        </div>
    
        <ol>
            <li>
                <h3>任务</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
....</p>
                <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post" enctype="multipart/form-data">
                    <p><?php echo $_smarty_tpl->tpl_vars['alt_1']->value;?>
<p>
                    <input class="input_file" type="file" name="upload_file"  dir="rtl" style="float:left;margin-right:10px;width:170px;"/>
                    <input class="upload_btn" type="submit" name="submit" value="确定上传"/>
                </form>
                <div class="card"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</p>
            </li>
        </ol>
    </div>
    
    </div>
            <div class="mask"></div>
            <div class="dialog">
                <div class="dialog-title">提&nbsp;示<a href="javascript:tips_close()" class="close" title="关闭">关闭</a></div>
                <div class="dialog-content">
                    <p><?php echo $_smarty_tpl->tpl_vars['sql']->value;?>
</p>
                </div>
            </div>	
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jq_js']->value;?>
"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['index_js']->value;?>
"><?php echo '</script'; ?>
>	
    </body>
    </html>
    <?php }
}
