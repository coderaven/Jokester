<?php include "./include/header.php" ?>

<?php 	
	try {
			$pdo = new PDO('mysql:host=localhost;dbname=ijdb','ijdbuser','adminpassword');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$pdo->exec('SET NAMES "utf8"');
		} catch (PDOException $e) {
			echo '
			<article class="error">There has been an error with the database. '.
			$e->getMessage().'</article>';
			exit();
		}	
?>

<?php include "./include/footer.php" ?>	

