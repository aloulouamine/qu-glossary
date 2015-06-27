<?php
session_start();
if(isset($_SESSION['email'])){
	echo 'welcome '.$_SESSION['email'];
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Quatar University Glossary</title>
	<script src="bower_components/platform/platform.js" >
		</script>

	<script src="../components/webcomponentsjs/webcomponents.js"> 
		</script>
	<link rel="import" href="bower_components/polymer/polymer.html">
	<link rel="import" href="elements.html">
	<link rel="import" href="mycomponents/search-bar.html">
	<link rel="import" href="mycomponents/words-list.html">
	<link rel="import" href="mycomponents/word-detail.html">
	
	<link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body fullbleed layout vertical>
	<core-drawer-panel id="drawerPanel">
		<core-header-panel drawer >
			<core-toolbar>Glossary</core-toolbar>
				<words-list></words-list>

		</core-header-panel>
		<core-header-panel main >
			<core-toolbar>
				<core-icon-button id="navicon" icon="menu">
				</core-icon-button>
				<span flex></span>
				<div id="searchDiv"> Search</div>
				
				<span tool><search-bar theme=light></span>
			</core-toolbar>
			<div class="content">
				<word-detail></word-detail>
			</div>
		</core-header-panel>
	</core-drawer-panel>
	
	<script type="text/javascript" src="js/navdrawer.js"></script>
</body>
</html>