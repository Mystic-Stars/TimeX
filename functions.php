<?php
error_reporting(0);
function themeConfig($form)
{
  if ($check_info == '1') {
    echo '<font color=red>' . $message . '</font>';
    die;
  }
  $data = json_decode(file_get_contents('https://plog.mysticstars.cn/usr/themes/TimeX/releases.json'), true);
  $message = $data['tag_name'];
  //当前版本号
  $selfmessage = '1.0';
  if ($selfmessage == $message) {
    echo  'TimeX&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp当前版本：' . 'v' . $selfmessage . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . '最新版本:' . 'v' . $message;
  } else  if ($selfmessage > $message) {
    echo  'TimeX&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp当前版本：' . 'v' . $selfmessage . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . '最新版本:' . 'v' . $message;
  } else  if ($selfmessage < $message) {
    echo  'TimeX&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp当前版本：' . 'v' . $selfmessage . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" . '发现新版本:' . '<span style="color:red;"><b>v ' . $message . '</b></span>&nbsp&nbsp请更新，<a href="https://github.com/Mystic-Stars/TimeX/releases" target="_blank">新版本特性</a>';
  }
  //首页名称
  $IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, '时光相册', _t('首页的名称(必填)'), _t('输入你的首页显示的名称'));
  $form->addInput($IndexName);
  //网站图标
  $IconUrl = new Typecho_Widget_Helper_Form_Element_Text('IconUrl', NULL, 'https://bu.dusays.com/2024/04/23/662770aaee40e.webp', _t('网站图标地址'), _t('输入网站的图标（建议200px宽度png）'));
  $form->addInput($IconUrl);
  //Apple网站图标
  $AppleIcon = new Typecho_Widget_Helper_Form_Element_Text('AppleIcon', NULL, '', _t('兼容Apple设备的图标'), _t('建议使用有背景无圆角矩形图标，在被iOS添加到书签或桌面后显示此图标（建议200px宽度png）'));
  $form->addInput($AppleIcon);
  //首页名称后缀（必填）
  $Indexdict = new Typecho_Widget_Helper_Form_Element_Text('Indexdict', NULL, '采用TimeX。', _t('首页的名称后缀(必填)'), _t('输入你的首页显示的名称后缀'));
  $form->addInput($Indexdict);
  $zmkiabout = new Typecho_Widget_Helper_Form_Element_Text('zmkiabout', NULL, '时光相册', _t('自定义底栏前缀'), _t('输入你的首页底部栏前缀'));
  $form->addInput($zmkiabout);
  $zmkiabouts = new Typecho_Widget_Helper_Form_Element_Text('zmkiabouts', NULL, '采用TimeX', _t('自定义底栏后缀'), _t('输入你的首页底部栏后缀'));
  $form->addInput($zmkiabouts);
  //大logo
  $Biglogo = new Typecho_Widget_Helper_Form_Element_Text('Biglogo', NULL, '欢迎使用TimeX，这里填写你的介绍。', _t('关于-详细介绍'), _t('底栏展开后的详细介绍，可以使用html标签'));
  $form->addInput($Biglogo);
  $zmki_ys = new Typecho_Widget_Helper_Form_Element_Text('zmki_ys', NULL, '', _t('缩略图-图片处理规则名称-(优化选项,选填)'), _t('需要带自定义分隔符;使用oss图片处理生成小缩略图可优化页面打开速度; 使用帮助:https://github.com/zhheo/TimePlus/wiki/Time%E7%9B%B8%E5%86%8C%E5%9B%BE%E5%86%8C%E4%BC%98%E5%8C%96%E6%96%B9%E6%A1%88-%E7%BC%A9%E7%95%A5%E5%9B%BE%E5%8E%8B%E7%BC%A9%E5%92%8Cwebp%E8%87%AA%E9%80%82%E5%BA%94#%E4%BC%98%E5%8C%96%E6%96%B9%E6%A1%88%E4%B9%8B-%E7%BC%A9%E7%95%A5%E5%9B%BE%E4%BC%98%E5%8C%96'));
  $form->addInput($zmki_ys);
  $zmki_sy = new Typecho_Widget_Helper_Form_Element_Text('zmki_sy', NULL, '', _t('图片版权水印-图片处理规则名称-(优化选项,选填)'), _t('需要带自定义分隔符;此处可填写oss水印规则名称，默认对全部图片生效; 使用帮助:https://github.com/zhheo/TimePlus/wiki/%E9%98%BF%E9%87%8C%E4%BA%91oss%E3%80%81%E5%8F%88%E6%8B%8D%E4%BA%91%E5%82%A8%E5%AD%98%E7%AD%89%E5%82%A8%E5%AD%98%E6%A1%B6%E5%9B%BE%E7%89%87%E5%A4%84%E7%90%86%E4%BB%8B%E7%BB%8D-%E2%80%93%E9%85%8D%E5%90%88-Time%E6%97%B6%E5%85%89%E7%9B%B8%E5%86%8C%E4%BD%BF%E7%94%A8#%E4%BA%8C%E4%BC%98%E5%8C%96%E5%9B%BE%E7%89%87%E7%89%88%E6%9D%83%E6%B0%B4%E5%8D%B0'));
  $form->addInput($zmki_sy);
  $xxhome = new Typecho_Widget_Helper_Form_Element_Text('xxhome', NULL, '', _t('Home'), _t('填写你的主页链接 http(s)://'));
  $form->addInput($xxhome);
  $xxweibo = new Typecho_Widget_Helper_Form_Element_Text('xxweibo', NULL, '', _t('Weibo'), _t('填写你的weibo链接  http(s)://'));
  $form->addInput($xxweibo);
  $xxgithub = new Typecho_Widget_Helper_Form_Element_Text('xxgithub', NULL, '', _t('GitHub'), _t('填写你的GitHub链接  http(s)://'));
  $form->addInput($xxgithub);
  $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, '', _t('ICP备案号'), _t('如果你在国内有备案，可在此处填写'));
  $form->addInput($icp);
  $cnzz = new Typecho_Widget_Helper_Form_Element_Text('cnzz', NULL, '', _t('统计代码'), _t('cnzz或百度..统计代码。可在此处填写处'));
  $form->addInput($cnzz);
}
//输出导航
function themeFields($layout)
{
  $img = new Typecho_Widget_Helper_Form_Element_Text('img', NULL, NULL, _t('图片链接'), _t('请输入要展示的图片链接'));
  $layout->addItem($img);
}
