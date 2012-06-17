<?php include "../include/header.php" ?>

<?php 
	// Sanitize Date Inserted to SQL
	if (get_magic_quotes_gpc()){
	$process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
	while (list($key, $val) = each($process)){
		foreach ($val as $k => $v){
			unset($process[$key][$k]);
			if (is_array($v)){
				$process[$key][stripslashes($k)] = $v;
				$process[] = &$process[$key][stripslashes($k)];
			} else {
				$process[$key][stripslashes($k)] = stripslashes($v);
			}
		}
	}
	unset($process);
}
?>

<?php 
	if (isset($_REQUEST['addjoke'])){
		if (isset($_REQUEST['name'])){
			if ($_REQUEST['name'] != NULL && $_REQUEST['title'] != NULL && $_REQUEST['joke'] != NULL) {
				try {

					$sql = 'INSERT INTO joke SET
							joketitle = :joketitle,
							jokeauthor = :jokeauthor,
							joketext = :joketext,
							jokedate = "' . $SERVER_DATE . '";';

					$pdo = new PDO('mysql:host=localhost;dbname=ijdb',
									'ijdbuser','adminpassword');
					$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					$pdo->exec('SET NAMES "utf8"');
					
					$s = $pdo->prepare($sql);
					$s->bindValue(':joketitle',$_REQUEST['title']);
					$s->bindValue(':jokeauthor',$_REQUEST['name']);
					$s->bindValue(':joketext',$_REQUEST['joke']);					$s->bindValue(':jokedate',$SERVER_DATE);		
					$s->execute();

				} catch (PDOException $e) {
					echo 'There has been a problem in the server. '
						. $e->getMessage();
					exit();
				}

			} else {
					echo "<article>Please fill everything in the form!</article>";
			}
		} else {
					echo "<article>Please fill everything in the form!</article>";
			}
	} else {
		include 'form.php';
	}
?>


<?php include "../include/footer.php" ?>	