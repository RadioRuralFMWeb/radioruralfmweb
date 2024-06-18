<?php include("./config.php"); ?>

<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->

<head>

<meta charset="utf-8">

<title><?php echo $page_title; ?></title>

<meta name="description" content="<?php echo $page_desc; ?>">

<!--// Mobile Metas //-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<frameset rows="50,*" cols="*" framespacing="0" frameborder="no" border="0">
	<frame src="play/play.php" name="topFrame" scrolling="no" noresize >
	<frame src="home.php" name="mainFrame">
</frameset>
<noframes>
<body>
Esta página usa frames e seu navegador não os suporta.
</body>
</noframes>
</html>