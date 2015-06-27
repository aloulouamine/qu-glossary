<?php

	include_once ('../model/Word.class.php');
	include_once ('../include/db.php');

	echo Word::getDefinition($conn, $_GET["word"]);

?>