<!DOCTYPE html>
<html lang="<?= $this->language() ?>">
<head>
	<!-- (c) & (p) parentNode.dk 2009-2014 //-->
	<!-- All material protected by copyrightlaws, as if you didnt know //-->
	<!-- If you want to help build the ultimate frontend-centered platform, visit parentnode.dk -->
	<title><?= SITE_NAME ?> - <?= $this->pageTitle() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="device mobile tablet detection segment web development api desktop webservice" />
	<meta name="description" content="<?= $this->pageDescription() ?>" />
	<meta name="viewport" content="initial-scale=1, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<? if(Session::value("dev")) { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_<?= $this->segment() ?>_include.css" />
	<script type="text/javascript" src="/js/lib/seg_<?= $this->segment() ?>_include.js"></script>
<? } else { ?>
	<link type="text/css" rel="stylesheet" media="all" href="/css/seg_<?= $this->segment() ?>.css" />
	<script type="text/javascript" src="/js/seg_<?= $this->segment() ?>.js"></script>
<? } ?>
</head>

<body<?= HTML::attribute("class", $this->bodyClass()) ?>>

<div id="page" class="i:page">
	<div id="header">
		<ul class="servicenavigation">
			<li class="keynav navigation nofollow"><a href="#navigation" rel="nofollow">Navigation</a></li>
		</ul>
	</div>

	<div id="content">
