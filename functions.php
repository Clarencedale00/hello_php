<?php
	function connectToDatabase() {
		try {
			$pdo = new PDO('mysql:host=127.0.0.1;dbname=text', 'root', '');
			return $pdo;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
?>