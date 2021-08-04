<?php
/* Smarty version 3.1.33, created on 2021-04-08 03:42:59
  from 'D:\phpstudy_pro\WWW\0xnull\public\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_606e5fa3dd6df6_66799148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b805288afee54b1b69296ab56fa9c86c545a87dc' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\0xnull\\public\\index.html',
      1 => 1617846152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606e5fa3dd6df6_66799148 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title><?php echo $_smarty_tpl->tpl_vars['expTitle']->value;?>
-开普勒安全团队</title>
        <style type="text/css">
            .page-home {
                color: #fff;
                background: url(/img/bg.png) no-repeat fixed #000;
                background-size: cover;
            }
        </style>
    </head>
    <?php echo '<script'; ?>
 type="text/javascript">
            /*改变原始宽度（0）*/
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }
        
            /*恢复原始宽度0*/
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
    <?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['index_css']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['prism_css']->value;?>
">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['star_sNuMVECHBxUzZGrbnpKK']->value;?>
"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['star_css']->value;?>
">

    <body class="page-home" id="page-home">
        <div id="head">
            <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_img']->value;?>
"/></a>
            <span class="title"><?php echo $_smarty_tpl->tpl_vars['expTitle']->value;?>
</span>
            <span class="menu-btn"onclick="openNav()">&#9776;</span>
        </div>
        <div id="main">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="/index.php" class="item">
                    常规SQL注入
                </a>
                <a href="/index.php/Home/Index/SQL_tow" class="item">
                    布尔盲注SQL注入
                </a>
                <a href="/index.php/Home/Index/SQL_three" class="item">
                    时间盲注SQL注入
                </a>
                <a href="/index.php/Home/Index/SQL_four" class="item">
                    limit注入
                </a>
                <a href="/index.php/Home/Index/SQL_five" class="item">
                    order by注入
                </a>
                <a href="/index.php/Home/Index/SQL_six" class="item">
                    union 写入webshell
                </a>
                <a href="/index.php/Home/Index/SQL_seven" class="item">
                    order by写webshell
                </a>
                <a href="/index.php/Home/Index/SQL_eit" class="item">
                    limit 写shell
                </a>
                <a href="/index.php/Home/Index/SQL_nine" class="item">
                    union 读取文件
                </a>
                <a href="javascript:alert('未开启,敬请期待')" class="item">
                    盲注 读取文件
                </a>
                <a href="/index.php/Home/Xss/xss_one" class="item">
                    反射型XSS
                </a>
                <a href="/index.php/Home/Xss/xss_tow" class="item">
                    输出在script中
                </a>
                <a href="/index.php/Home/Xss/xss_tow_2" class="item">
                    输出在script中_2
                </a>
                <a href="/index.php/Home/Xss/xss_three" class="item">
                    输出在html属性中
                </a>
                <a href="/index.php/Home/Xss/xss_four" class="item">
                    输出在注释中
                </a>
                <a href="/index.php/Home/Xss/xss_five" class="item">
                    完蛋,JavaScript被过滤了
                </a>
                <a href="/index.php/Home/Xss/xss_six" class="item">
                    震惊!等号究竟是怎么回事
                </a>
                <a href="/index.php/Home/Xss/xss_seven" class="item">
                    可怕! onerror输出出了故障
                </a>
                <a href="/index.php/Home/Xss/xss_eit" class="item">
                    Dom型XSS1
                </a>
                <a href="/index.php/Home/Xss/xss_nine" class="item">
                    Dom型XSS2
                </a>
                <a href="/index.php/Home/Xss/xss_ten" class="item">
                    Dom型XSS3
                </a>
                <a href="/index.php/Home/Xss/xss_eleven" class="item">
                    Dom型XSS4
                </a>
                <a href="javascript:alert('未开启,敬请期待')" class="item">
                    Dom型XSS5
                </a>
                <a href="/index.php/Home/Upload/upload_one" class="item">
                    任意文件上传漏洞
                </a>
                <a href="/index.php/Home/Upload/upload_four" class="item">
                    基于黑名单的文件上传
                </a>
                <a href="/index.php/Home/Upload/upload_three" class="item">
                    基于白名单的文件上传
                </a>
                <a href="/index.php/Home/Upload/upload_tow" class="item">
                    基于type检测的文件上传
                </a>
                <a href="/index.php/Home/Upload/upload_five" class="item">
                    基于内容验证的文件上传
                </a>
                <a href="/index.php/Home/Xxe/xxe_one" class="item">
                    回显型XXE
                </a>
                <a href="/index.php/Home/Xxe/xxe_tow" class="item">
                    盲型XXE
                </a>
                <a href="#" class="item">
                    一马平川
                </a>
                <a href="#" class="item">
                    过滤了Ip
                </a>
                <a href="#" class="item">
                    匹配127.0.0.1
                </a>
            </div>

            <div class="stars-box" id="js-starsBox">
                <span style="width: 3.14848px; height: 3.14848px; top: 24.9431%; left: 1.41811%;"></span>
                <span style="width: 1.61218px; height: 1.61218px; top: 30.954%; left: 67.4089%;"></span>
                <span style="width: 2.96474px; height: 2.96474px; top: 74.007%; left: 6.85425%;"></span>
                <span style="width: 1.60445px; height: 1.60445px; top: 87.4588%; left: 99.9386%;"></span>
                <span style="width: 0.33879px; height: 0.33879px; top: 33.5145%; left: 0.820764%;"></span>
                <span style="width: 2.9144px; height: 2.9144px; top: 37.4333%; left: 45.1217%;"></span>
                <span style="width: 1.97674px; height: 1.97674px; top: 55.8215%; left: 2.29375%;"></span>
                <span style="width: 2.87455px; height: 2.87455px; top: 12.3188%; left: 86.6349%;"></span>
                <span style="width: 1.81197px; height: 1.81197px; top: 93.4168%; left: 48.8437%;"></span>
                <span style="width: 1.15144px; height: 1.15144px; top: 3.39636%; left: 79.8598%;"></span>
                <span style="width: 2.01226px; height: 2.01226px; top: 93.2197%; left: 2.63168%;"></span>
                <span style="width: 1.8011px; height: 1.8011px; top: 53.749%; left: 17.224%;"></span>
                <span style="width: 3.49264px; height: 3.49264px; top: 5.74669%; left: 53.2807%;"></span>
                <span style="width: 2.22732px; height: 2.22732px; top: 62.7785%; left: 35.8164%;"></span>
                <span style="width: 2.23154px; height: 2.23154px; top: 14.6469%; left: 50.6915%;"></span>
                <span style="width: 2.05466px; height: 2.05466px; top: 60.8256%; left: 71.4398%;"></span>
                <span style="width: 2.90873px; height: 2.90873px; top: 9.42316%; left: 31.782%;"></span>
                <span style="width: 1.95721px; height: 1.95721px; top: 57.1717%; left: 34.52%;"></span>
                <span style="width: 3.59201px; height: 3.59201px; top: 52.6612%; left: 42.0485%;"></span>
                <span style="width: 2.44087px; height: 2.44087px; top: 88.415%; left: 36.3001%;"></span>
                <span style="width: 3.59847px; height: 3.59847px; top: 6.70146%; left: 76.1724%;"></span>
                <span style="width: 2.70075px; height: 2.70075px; top: 36.179%; left: 5.78936%;"></span>
                <span style="width: 0.354653px; height: 0.354653px; top: 74.0062%; left: 45.7657%;"></span>
                <span style="width: 1.62341px; height: 1.62341px; top: 56.1069%; left: 17.0565%;"></span>
                <span style="width: 0.0140709px; height: 0.0140709px; top: 41.7194%; left: 51.3836%;"></span>
                <span style="width: 0.837556px; height: 0.837556px; top: 57.1409%; left: 49.2065%;"></span>
                <span style="width: 3.01216px; height: 3.01216px; top: 38.2319%; left: 47.6262%;"></span>
                <span style="width: 1.15497px; height: 1.15497px; top: 42.9361%; left: 76.8414%;"></span>
                <span style="width: 3.92956px; height: 3.92956px; top: 24.6053%; left: 39.412%;"></span>
                <span style="width: 1.76794px; height: 1.76794px; top: 59.8772%; left: 8.02284%;"></span>
                <span style="width: 1.21841px; height: 1.21841px; top: 27.7513%; left: 15.7539%;"></span>
                <span style="width: 0.357825px; height: 0.357825px; top: 43.9948%; left: 71.4185%;"></span>
                <span style="width: 3.05904px; height: 3.05904px; top: 83.314%; left: 18.0091%;"></span>
                <span style="width: 1.39797px; height: 1.39797px; top: 10.0895%; left: 48.7686%;"></span>
                <span style="width: 2.84817px; height: 2.84817px; top: 34.3933%; left: 99.3602%;"></span>
                <span style="width: 3.75171px; height: 3.75171px; top: 59.4942%; left: 52.1022%;"></span>
                <span style="width: 0.804244px; height: 0.804244px; top: 44.5828%; left: 92.5449%;"></span>
                <span style="width: 3.96482px; height: 3.96482px; top: 67.9703%; left: 1.80717%;"></span>
                <span style="width: 3.01061px; height: 3.01061px; top: 15.1389%; left: 39.1783%;"></span>
                <span style="width: 1.43886px; height: 1.43886px; top: 35.4845%; left: 22.7516%;"></span>
                <span style="width: 1.24186px; height: 1.24186px; top: 33.6128%; left: 99.2505%;"></span>
                <span style="width: 2.03258px; height: 2.03258px; top: 7.4989%; left: 58.0193%;"></span>
                <span style="width: 0.466664px; height: 0.466664px; top: 90.6054%; left: 52.9068%;"></span>
                <span style="width: 3.57072px; height: 3.57072px; top: 42.2118%; left: 82.456%;"></span>
                <span style="width: 1.0855px; height: 1.0855px; top: 29.2153%; left: 4.94233%;"></span>
                <span style="width: 1.91812px; height: 1.91812px; top: 50.9852%; left: 62.086%;"></span>
                <span style="width: 2.29243px; height: 2.29243px; top: 56.6968%; left: 47.2346%;"></span>
                <span style="width: 3.32142px; height: 3.32142px; top: 34.6344%; left: 37.7664%;"></span>
                <span style="width: 2.27416px; height: 2.27416px; top: 56.7904%; left: 12.0399%;"></span>
                <span style="width: 0.0908868px; height: 0.0908868px; top: 98.8894%; left: 41.7482%;"></span>
                <span style="width: 1.39203px; height: 1.39203px; top: 67.425%; left: 16.3556%;"></span>
            </div>

    <div id="upload_panel">
        <div class="float_btn">
			<a href="javascript:get_prompt()">查看代码</a>
        </div>
    
        <ol>
            <li>
                <h3>任务</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['alt_1']->value;?>
</p>
                <div class="card">
                    <p>User: <?php echo $_smarty_tpl->tpl_vars['data']->value['Username'];?>
</p>
                    <p>Pass: <?php echo $_smarty_tpl->tpl_vars['data']->value['Password'];?>
</p>
                    <p>Email: <?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</p>
                    <p>Blog: <?php echo $_smarty_tpl->tpl_vars['data']->value['blog'];?>
</p>
                </div>
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
            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['star_app']->value;?>
"><?php echo '</script'; ?>
>
    </body>
    </html>
    <?php }
}
