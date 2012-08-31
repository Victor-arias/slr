<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);

$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
//SLIDER
/*$slidePath = 'images/encabezado';
$slides = array();
if (is_dir(JPATH_ROOT.DS.$slidePath)) {
    $files = JFolder::files(JPATH_ROOT.DS.$slidePath, '(.\.jpg)|(.\.png)');
    foreach($files as $file) {
        $slide = new stdClass();
        $slide->image = JURI::root().$slidePath.'/'.$file;
        $slides[] = $slide;
    }
} else {
    $handle = fopen(JPATH_ROOT.DS.$slidePath, 'r');    
    $line = 1;
    while (($buffer = fgets($handle)) !== false) {
        if (trim($buffer) == '') {
            continue;
        }
        $slide = json_decode($buffer);
        if ($slide && $slide->image) {
            $slides[] = $slide;
        }
        $line++;
    }
}
$urls = '';
foreach($slides as $slide){
	$urls .= '"' . $slide->image . '", ';
}
$urls = substr(trim($urls), 0, -1);*/
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<meta charset="utf-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
		<jdoc:include type="head" />
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css">
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<!--[if lte IE 6]>
			<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		<!--[if IE 7]>
			<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/jquery.fancybox.pack.js"></script>
		<script>
		$(document).ready(function() {
			$('body').append('<div id="header_image"><div id="header_image_image"></div></div>');
			$('#header_image_image').css('background','url(images/encabezado/fundesol.jpg) top center no-repeat');
			$("a.pop_up").fancybox();
		});
		</script>
	</head>

	<body>
		<div id="main">
			<header>
				<div class="f_left">
					<jdoc:include type="modules" name="encabezado_izq" style="none" />
				</div>
				<div class="f_right">
					<jdoc:include type="modules" name="encabezado_der" style="none" />
				</div>
			</header>
			<nav>
				<jdoc:include type="modules" name="menu" style="none" />
			</nav>
			<section id="content">
				<jdoc:include type="component" />
			</section>
			<footer>
				<jdoc:include type="modules" name="pie" style="none" />
			</footer>
		</div>
		<jdoc:include type="modules" name="debug" />
	</body>
</html>