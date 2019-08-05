<?php
define('ROOT_PATH', __DIR__);
require_once(ROOT_PATH . "/libraries/Language.php");
$lang = new Language();
$lang->load("menu");
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--><html class="no-js" lang="zh-tw"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>PHP i18n Page</title>
</head>
<body>
<?php
echo "<h1>PHP i18n Page (" . $lang->line("menu.description") . ")</h1>";
echo "<p>" . $lang->line("menu.index") . "</p>";
echo "<a href='test.php?lang=zh-TW'>Chinese</a> | <a href='test.php?lang=en-US'>English</a><br />";
?>

<?php include 'menu.php';?>
</body>
</html>
