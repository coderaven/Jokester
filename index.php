<?php include "include/header.php" ?>
<?php 
try {

	$pdo = new PDO('mysql:host=localhost;dbname=ijdb',
			 	   'ijdbuser','adminpassword');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
	// Set up table columns
	$ijdb = $pdo->query('SELECT * FROM joke');
} catch (PDOException $e) {
	echo 'There has been a problem in the server. '
	. $e->getMessage();
	exit();
}
?>

<?php 
	foreach($ijdb as $joke):
		$fdate = date( "F j, Y g:i A",strtotime($joke['jokedate']) );
?>
	<article>
		<h2> <?php echo $joke['joketitle']; ?> </h2> 
		<cite>by <?php echo $joke['jokeauthor']; ?>
		(<time datetime="<?php echo $joke['jokedate']; ?>" pubdate>
			<?php echo $fdate; ?>
		</time>)</cite>
		<p> <?php echo $joke['joketext']; ?> </p>
	</article>

<?php 
	endforeach;
?>


<?php include "include/footer.php" ?>			
