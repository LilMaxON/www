<?php
	$mysqli = false;

	function connectDB (string $baseName):void {
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", $baseName);
		#mysqli->query("SET NAMES 'utf-8'");
	}

	function closeDB ():void {
		global $mysqli;
		$mysqli->close();
	}